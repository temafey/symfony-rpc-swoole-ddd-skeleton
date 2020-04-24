<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Entity;

/**
 * Interface EntityInterface.
 *
 * @category Domain\Entity
 * @sub-package Item
 */
interface EntityInterface
{
    /**
     * Return entity primary key value.
     *
     * @return string|int
     */
    public function getPrimaryKeyValue();

    /**
     * Convert entity object to array.
     *
     * @return mixed[]
     */
    public function normalize(): array;
}
