<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject;

use stdClass;

/**
 * DataProvider for class {testClassName}.
 */
class IdDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Id.
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 6,
                    'ValueObjectId' => [
                        'toNative' => 6,
                        'sameValueAs' => true,
                    ],
                ],
                1 => [
                    'ValueObjectId' => [
                        'times' => 0,
                        'toNative' => 1,
                        'sameValueAs' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Id.
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 3,
                    'toNative' => 3,
                ],
                1 => [
                    'toNative' => 1,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Id.
     *
     * @return mixed[]
     */
    public function getInvalidData(): array
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Id.
     *
     * @return mixed[]
     */
    public function getDataForToRealMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 6,
                    'toReal' => null,
                ],
                1 => [
                    'toReal' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Id.
     *
     * @return mixed[]
     */
    public function getDataForIncMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 6,
                    'inc' => [
                        'sameValueAs' => true,
                        'toNative' => 8,
                        'className' => 'MicroModule\\ValueObject\\Number\\Integer',
                    ],
                ],
                1 => [
                    'inc' => [
                        'times' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 0,
                        'className' => 'MicroModule\\ValueObject\\Number\\Integer',
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Id.
     *
     * @return mixed[]
     */
    public function getDataForDecrMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 6,
                    'decr' => [
                        'sameValueAs' => false,
                        'toNative' => 6,
                        'className' => 'MicroModule\\ValueObject\\Number\\Integer',
                    ],
                ],
                1 => [
                    'decr' => [
                        'times' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 0,
                        'className' => 'MicroModule\\ValueObject\\Number\\Integer',
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Id.
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 6,
                    'fromNative' => null,
                ],
                1 => [
                    'fromNative' => 0,
                ],
            ],
        ];
    }
}
