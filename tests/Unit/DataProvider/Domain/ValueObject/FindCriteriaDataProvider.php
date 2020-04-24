<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject;

use stdClass;

/**
 * DataProvider for class {testClassFindCriteria}.
 */
class FindCriteriaDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria.
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => ['Shyanne Breitenberg', 'Test'],
                    'fromNative' => null,
                ],
                1 => [
                    'fromNative' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria.
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => ['Shyanne Breitenberg', 'Test'],
                    'toNative' => ['Shyanne Breitenberg', 'Test'],
                ],
                1 => [
                    'toNative' => 1,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria.
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => ['Shyanne Breitenberg', 'Test'],
                    'ValueObjectFindCriteria' => ['Shyanne Breitenberg', 'Test'],
                ],
                1 => [
                    'ValueObjectFindCriteria' => [
                        'toNative' => 1,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria.
     *
     * @return mixed[]
     */
    public function getInvalidData(): array
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria.
     *
     * @return mixed[]
     */
    public function getDataForToCountMethod(): array
    {
        return [
            0 => [
                0 => [
                    'value' => ['Shyanne Breitenberg', 'Test'],
                    'count' => 2,
                ],
                1 => [
                    'toNative' => 1,
                ],
            ],
            1 => [
                0 => [
                    'value' => ['Shyanne Breitenberg', 'Test', 'test3'],
                    'count' => 3,
                ],
                1 => [
                    'toNative' => 1,
                ],
            ],
            2 => [
                0 => [
                    'value' => [],
                    'count' => 0,
                ],
                1 => [
                    'toNative' => 1,
                ],
            ],
        ];
    }
}
