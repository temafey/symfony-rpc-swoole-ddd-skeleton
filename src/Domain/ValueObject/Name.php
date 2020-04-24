<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\ValueObject;

use MicroModule\ValueObject\StringLiteral\StringLiteral;

/**
 * Class Name.
 *
 * @SuppressWarnings(PHPMD)
 */
class Name extends StringLiteral
{
    /**
     * Name constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $name = trim($name);
        $name = htmlspecialchars_decode($name);

        parent::__construct($name);
    }
}
