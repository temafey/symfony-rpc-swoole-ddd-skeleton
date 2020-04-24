<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Exception;

use RuntimeException;

/**
 * Exception thrown if an item is not found.
 */
final class ItemNotFoundException extends RuntimeException
{
}
