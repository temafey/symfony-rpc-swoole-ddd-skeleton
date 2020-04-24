<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject;

use stdClass;

/**
 * DataProvider for class {testClassUuid}.
 */
class UuidDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid.
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => '82700a19-0ab8-3c8e-9880-ec319ee83b51',
                    'fromNative' => null,
                ],
                1 => [
                    'fromNative' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid.
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => '82700a19-0ab8-3c8e-9880-ec319ee83b51',
                    'toNative' => '82700a19-0ab8-3c8e-9880-ec319ee83b51',
                ],
                1 => [
                    'toNative' => 1,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid.
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => '82700a19-0ab8-3c8e-9880-ec319ee83b51',
                    'ValueObjectUuid' => [
                        'toNative' => '82700a19-0ab8-3c8e-9880-ec319ee83b51',
                    ],
                ],
                1 => [
                    'ValueObjectUuid' => [
                        'toNative' => 1,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid.
     *
     * @return mixed[]
     */
    public function getInvalidTypeErrorData(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 3,
                ],
            ],
            1 => [
                0 => [
                    'value' => 4.5,
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid.
     *
     * @return mixed[]
     */
    public function getInvalidNativeArgumentExceptionData(): array
    {
        return [
            0 => [
                0 => [
                    'value' => 'test',
                ],
            ],
        ];
    }
}
