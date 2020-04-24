<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject;

use stdClass;

/**
 * DataProvider for class {testClassName}.
 */
class StatusDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Status.
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 1,
                    'ValueObjectStatus' => [
                        'toNative' => 1,
                        'sameValueAs' => true,
                    ],
                ],
                1 => [
                    'ValueObjectStatus' => [
                        'times' => 0,
                        'toNative' => 1,
                        'sameValueAs' => 0,
                    ],
                ],
            ],
            1 => [
                0 => [
                    'value' => 0,
                    'ValueObjectStatus' => [
                        'toNative' => 0,
                        'sameValueAs' => true,
                    ],
                ],
                1 => [
                    'ValueObjectStatus' => [
                        'times' => 0,
                        'toNative' => 1,
                        'sameValueAs' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Status.
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 1,
                    'toNative' => 1,
                ],
                1 => [
                    'toNative' => 1,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Status.
     *
     * @return mixed[]
     */
    public function getInvalidTypeErrorData(): array
    {
        return [
            0 => [
                0 => [
                    'value' => '3',
                ],
            ],
            1 => [
                0 => [
                    'value' => 'test',
                ],
            ],
            2 => [
                0 => [
                    'value' => false,
                ],
            ],
            3 => [
                0 => [
                    'value' => new stdClass(),
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Status.
     *
     * @return mixed[]
     */
    public function getInvalidStatusInvalidExceptionData(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 2,
                ],
            ],
            1 => [
                0 => [
                    'value' => 100,
                ],
            ],
            2 => [
                0 => [
                    'value' => -111,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Status.
     *
     * @return mixed[]
     */
    public function getDataForToRealMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 1,
                    'toReal' => null,
                ],
                1 => [
                    'toReal' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Status.
     *
     * @return mixed[]
     */
    public function getDataForIncMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 1,
                    'inc' => [
                        'sameValueAs' => true,
                        'toNative' => 8,
                        'className' => 'MicroModule\\ValueObject\\Number\\Integer',
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Status.
     *
     * @return mixed[]
     */
    public function getDataForDecrMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 1,
                    'decr' => [
                        'sameValueAs' => false,
                        'toNative' => 1,
                        'className' => 'MicroModule\\ValueObject\\Number\\Integer',
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Status.
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 0,
                    'fromNative' => null,
                ],
                1 => [
                    'fromNative' => 0,
                ],
            ],
            1 => [
                0 => [
                    'value' => 1,
                    'fromNative' => null,
                ],
                1 => [
                    'fromNative' => 0,
                ],
            ],
        ];
    }
}
