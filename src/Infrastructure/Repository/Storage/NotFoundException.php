<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage;

use RuntimeException;

/**
 * Exception thrown if an event stream is not found.
 */
final class NotFoundException extends RuntimeException
{
}
