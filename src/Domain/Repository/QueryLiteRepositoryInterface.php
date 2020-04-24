<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Repository;

use Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;

/**
 * Interface QueryRepositoryInterface.
 *
 * @category Domain\Query\Repository
 */
interface QueryLiteRepositoryInterface
{
    /**
     * Find and return item entity by item uuid.
     *
     * @param Uuid $uuid
     *
     * @return mixed[]|null
     */
    public function findByUuid(Uuid $uuid): ?array;

    /**
     * Find and return array of ItemEntity by FindCriteria.
     *
     * @param FindCriteria $findCriteria
     *
     * @return mixed[]|null
     */
    public function findByCriteria(FindCriteria $findCriteria): ?array;
}
