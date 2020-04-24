<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Exception;

use MicroModule\Base\Domain\Exception\ErrorException;

/**
 * Class ModificationProhibitedException.
 *
 * @category Domain\Exception
 */
final class ModificationProhibitedException extends ErrorException
{
}
