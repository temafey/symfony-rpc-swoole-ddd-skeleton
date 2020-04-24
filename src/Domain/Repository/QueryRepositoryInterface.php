<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Repository;

use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;

/**
 * Interface QueryRepositoryInterface.
 *
 * @category Domain\Query\Repository
 */
interface QueryRepositoryInterface
{
    /**
     * Find and return item entity by item uuid.
     *
     * @param Uuid $uuid
     *
     * @return ItemEntity|null
     */
    public function findByUuid(Uuid $uuid): ?ItemEntity;

    /**
     * Find and return array of ItemEntity by FindCriteria.
     *
     * @param FindCriteria $findCriteria
     *
     * @return ItemEntity[]|mixed[]|null
     */
    public function findByCriteria(FindCriteria $findCriteria): ?array;
}
