<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Infrastructure\Repository;

use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\Exception\ValueObjectInvalidException;
use Backend\Api\RpcSkeleton\Domain\Factory\ItemFactory;
use Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory;
use Backend\Api\RpcSkeleton\Domain\Repository\QueryRepositoryInterface;
use Backend\Api\RpcSkeleton\Domain\Repository\ReadModelStoreInterface;
use Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\NotFoundException;
use Exception;
use MicroModule\Base\Utils\LoggerTrait;

/**
 * Class QueryRepository.
 *
 * @category Infrastructure\Query
 */
class QueryRepository implements QueryRepositoryInterface
{
    use LoggerTrait;

    /**
     * ReadModel repository.
     *
     * @var ReadModelStoreInterface
     */
    private ReadModelStoreInterface $readModelStore;

    /**
     * ValueObject factory.
     *
     * @var ValueObjectFactory
     */
    private ValueObjectFactory $valueObjectFactory;

    /**
     * ItemEntity factory.
     *
     * @var ItemFactory
     */
    private ItemFactory $itemFactory;

    /**
     * RequestRepositoryRepository constructor.
     *
     * @param ReadModelStoreInterface $readModelStore
     * @param ValueObjectFactory      $valueObjectFactory
     * @param ItemFactory             $itemFactory
     */
    public function __construct(
        ReadModelStoreInterface $readModelStore,
        ValueObjectFactory $valueObjectFactory,
        ItemFactory $itemFactory
    ) {
        $this->readModelStore = $readModelStore;
        $this->valueObjectFactory = $valueObjectFactory;
        $this->itemFactory = $itemFactory;
    }

    /**
     * Find and return item entity by item uuid.
     *
     * @param Uuid $uuid
     *
     * @return ItemEntity|null
     *
     * @throws Exception
     */
    public function findByUuid(Uuid $uuid): ?ItemEntity
    {
        try {
            $result = $this->readModelStore->findOne($uuid->toNative());
        } catch (NotFoundException $e) {
            return null;
        }

        if (null === $result) {
            return null;
        }
        $uuidValueObject = $this->valueObjectFactory->makeUuid($result['uuid']);
        $itemValueObject = $this->valueObjectFactory->makeItem($result);

        return $this->itemFactory->makeActualInstance($uuidValueObject, $itemValueObject);
    }

    /**
     * Find and return array of ItemEntity by FindCriteria.
     *
     * @param FindCriteria $findCriteria
     *
     * @return ItemEntity[]|null
     *
     * @throws ValueObjectInvalidException
     * @throws Exception
     * @throws Exception
     */
    public function findByCriteria(FindCriteria $findCriteria): ?array
    {
        try {
            $result = $this->readModelStore->findBy($findCriteria->toNative());
        } catch (NotFoundException $e) {
            return null;
        }
        $itemCollection = [];

        foreach ($result as $item) {
            $uuidValueObject = $this->valueObjectFactory->makeUuid($item['uuid']);
            $itemValueObject = $this->valueObjectFactory->makeItem($item);
            $itemCollection[] = $this->itemFactory->makeActualInstance($uuidValueObject, $itemValueObject);
        }

        return $itemCollection;
    }
}
