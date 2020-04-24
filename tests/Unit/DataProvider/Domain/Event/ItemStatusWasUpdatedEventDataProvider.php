<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event;

/**
 * DataProvider for class {testClassName}.
 */
class ItemStatusWasUpdatedEventDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent.
     *
     * @return mixed[]
     */
    public function getDataForGetMethods(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => '60835374-8f18-360a-9074-b22b1e86a20c',
                        'getUuid' => [
                            'toString' => '1cb931bd-7b4b-39fd-8374-db5e213ccff3',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '796316c3-4174-3e97-bd60-557b4ea87a64',
                        'getUuid' => [
                            'toString' => 'ce9cac0b-566b-3df6-8efa-56ed84220398',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Status' => [
                        'isActive' => true,
                        'sameValueAs' => true,
                        'toNative' => 3,
                        'inc' => [
                            'sameValueAs' => true,
                            'toNative' => 8,
                        ],
                        'decr' => [
                            'sameValueAs' => true,
                            'toNative' => 8,
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Uuid' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Status' => [
                        'times' => 0,
                        'isActive' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
                        'inc' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'decr' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent.
     *
     * @return mixed[]
     */
    public function getDataForDeserializeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => '60835374-8f18-360a-9074-b22b1e86a20c',
                        'getUuid' => [
                            'toString' => '1cb931bd-7b4b-39fd-8374-db5e213ccff3',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '796316c3-4174-3e97-bd60-557b4ea87a64',
                        'getUuid' => [
                            'toString' => 'ce9cac0b-566b-3df6-8efa-56ed84220398',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Status' => [
                        'isActive' => true,
                        'sameValueAs' => true,
                        'toNative' => 1,
                        'inc' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                        'decr' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Uuid' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Status' => [
                        'times' => 0,
                        'isActive' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
                        'inc' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'decr' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent.
     *
     * @return mixed[]
     */
    public function getDataForSerializeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => '60835374-8f18-360a-9074-b22b1e86a20c',
                        'getUuid' => [
                            'toString' => '60835374-8f18-360a-9074-b22b1e86a20c',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '796316c3-4174-3e97-bd60-557b4ea87a64',
                        'getUuid' => [
                            'toString' => 'ce9cac0b-566b-3df6-8efa-56ed84220398',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Status' => [
                        'isActive' => true,
                        'sameValueAs' => true,
                        'toNative' => 1,
                        'inc' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                        'decr' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Uuid' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Status' => [
                        'times' => 0,
                        'isActive' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
                        'inc' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'decr' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                    ],
                    'serialize' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent.
     *
     * @return mixed[]
     */
    public function getDataWithInvalidStatusForDeserializeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => '60835374-8f18-360a-9074-b22b1e86a20c',
                        'getUuid' => [
                            'toString' => '1cb931bd-7b4b-39fd-8374-db5e213ccff3',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '796316c3-4174-3e97-bd60-557b4ea87a64',
                        'getUuid' => [
                            'toString' => 'ce9cac0b-566b-3df6-8efa-56ed84220398',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Status' => [
                        'isActive' => true,
                        'sameValueAs' => true,
                        'toNative' => 2,
                        'inc' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'decr' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Uuid' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Status' => [
                        'times' => 0,
                        'isActive' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
                        'inc' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'decr' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }
}
