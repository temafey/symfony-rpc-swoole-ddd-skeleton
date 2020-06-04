<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Infrastructure\Repository;

use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\Exception\ItemDeleteException;
use Backend\Api\RpcSkeleton\Domain\Exception\ItemInsertException;
use Backend\Api\RpcSkeleton\Domain\Exception\ItemUpdateException;
use Backend\Api\RpcSkeleton\Domain\Repository\CommandRepositoryInterface;
use Backend\Api\RpcSkeleton\Domain\Repository\ReadModelStoreInterface;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\NotFoundException;
use MicroModule\Base\Utils\LoggerTrait;

/**
 * Class CommandRepository.
 *
 * @category Infrastructure\Command
 */
class CommandRepository implements CommandRepositoryInterface
{
    use LoggerTrait;

    /**
     * Read model ReadModelStoreInterface.
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
     * Add new item entity.
     *
     * @param ItemEntity $itemEntity
     *
     * @throws ItemInsertException
     */
    public function add(ItemEntity $itemEntity): void
    {
        try {
            $this->readModelStore->insertOne($itemEntity);
        } catch (NotFoundException $e) {
            throw new ItemInsertException('Item was not inserted in read model.');
        }
    }

    /**
     * Update item entity.
     *
     * @param ItemEntity $itemEntity
     *
     * @throws ItemUpdateException
     */
    public function update(ItemEntity $itemEntity): void
    {
        try {
            $this->readModelStore->updateOne($itemEntity);
        } catch (NotFoundException $e) {
            throw new ItemUpdateException('Item was not updated in read model.');
        }
    }

    /**
     * Delete item entity.
     *
     * @param ItemEntity $itemEntity
     *
     * @throws ItemDeleteException
     */
    public function delete(ItemEntity $itemEntity): void
    {
        try {
            $this->readModelStore->deleteOne($itemEntity);
        } catch (NotFoundException $e) {
            throw new ItemDeleteException('Item was not deleted in read model.');
        }
    }
}
