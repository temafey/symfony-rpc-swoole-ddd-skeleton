<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Infrastructure\Repository;

use MicroModule\Base\Utils\LoggerTrait;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Repository\QueryLiteRepositoryInterface;
use Backend\Api\RpcSkeleton\Domain\Repository\ReadModelStoreInterface;
use Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\NotFoundException;

/**
 * Class QueryLiteRepository.
 *
 * @category Infrastructure\Query
 */
class QueryLiteRepository implements QueryLiteRepositoryInterface
{
    use LoggerTrait;

    /**
     * ReadModel repository.
     *
     * @var ReadModelStoreInterface
     */
    private ReadModelStoreInterface $readModelStore;

    /**
     * RequestRepositoryRepository constructor.
     *
     * @param ReadModelStoreInterface $readModelStore
     */
    public function __construct(ReadModelStoreInterface $readModelStore)
    {
        $this->readModelStore = $readModelStore;
    }

    /**
     * Find and return item entity by item uuid.
     *
     * @param Uuid $uuid
     *
     * @return mixed[]|null
     *
     * @throws Exception
     */
    public function findByUuid(Uuid $uuid): ?array
    {
        try {
            return $this->readModelStore->findOne($uuid->toNative());
        } catch (NotFoundException $e) {
            return null;
        }
    }

    /**
     * Find and return array of ItemEntity by FindCriteria.
     *
     * @param FindCriteria $findCriteria
     *
     * @return mixed[]|null
     */
    public function findByCriteria(FindCriteria $findCriteria): ?array
    {
        try {
            return $this->readModelStore->findBy($findCriteria->toNative());
        } catch (NotFoundException $e) {
            return null;
        }
    }
}
