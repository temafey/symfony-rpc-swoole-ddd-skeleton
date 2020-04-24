<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository;

/**
 * DataProvider for class {testClassName}.
 */
class ItemEventSourcingStoreRepositoryDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemEventSourcingStoreRepository.
     *
     * @return mixed[]
     */
    public function getDataForLoadMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventStore' => [
                        'load' => [
                            'getIterator' => [
                                'rewind' => 0,
                                'valid' => 0,
                                'current' => 0,
                            ],
                        ],
                        'loadFromPlayhead' => [
                            'getIterator' => [
                            ],
                        ],
                        'append' => null,
                    ],
                    'EventBus' => [
                        'subscribe' => null,
                        'publish' => null,
                    ],
                    'eventStreamDecorators' => [
                        0 => 'cum',
                        1 => 'reiciendis',
                        2 => 'sed',
                    ],
                    'load' => [
                        'getUncommittedEvents' => [
                            'getIterator' => [
                            ],
                        ],
                        'getAggregateRootId' => 'veniam',
                        'className' => 'Broadway\\Domain\\AggregateRoot',
                    ],
                    'id' => 'sed',
                ],
                1 => [
                    'EventStore' => [
                        'times' => 0,
                        'load' => [
                            'times' => 1,
                            'getIterator' => [
                                'times' => 1,
                                'rewind' => 1,
                                'valid' => 1,
                                'current' => 0,
                            ],
                        ],
                        'loadFromPlayhead' => [
                            'times' => 0,
                            'getIterator' => [
                                'times' => 0,
                            ],
                        ],
                        'append' => 0,
                    ],
                    'EventBus' => [
                        'times' => 0,
                        'subscribe' => 0,
                        'publish' => 0,
                    ],
                    'load' => [
                        'times' => 0,
                        'getUncommittedEvents' => [
                            'times' => 0,
                            'getIterator' => [
                                'times' => 0,
                            ],
                        ],
                        'getAggregateRootId' => 0,
                        'className' => 'Broadway\\Domain\\AggregateRoot',
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemEventSourcingStoreRepository.
     *
     * @return mixed[]
     */
    public function getDataForSaveMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventStore' => [
                        'load' => [
                            'getIterator' => [
                            ],
                        ],
                        'loadFromPlayhead' => [
                            'getIterator' => [
                            ],
                        ],
                        'append' => null,
                    ],
                    'EventBus' => [
                        'subscribe' => null,
                        'publish' => null,
                    ],
                    'eventStreamDecorators' => [
                        0 => 'cum',
                        1 => 'reiciendis',
                        2 => 'sed',
                    ],
                    'ItemEntity' => [
                        'getAggregateRootId' => '1',
                        'getUncommittedEvents' => [
                            'getIterator' => [],
                        ],
                        'getUuid' => [
                            'toNative' => 'ca966819-b4d4-3006-ad40-94bd770e855e',
                            'getUuid' => [
                                'toString' => 'e8038919-fbd3-3d68-9580-2266f21002cd',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                        ],
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 9,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Mr. Wilber Stiedemann',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://damore.com/',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '00:02:13',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '00:17:47',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '07:37:02',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '12:38:15',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '09:48:59',
                            ],
                        ],
                        'initializeState' => 'Mississippi',
                        'getPlayhead' => 3,
                        'className' => 'MasterData\\Api\\RpcSkeleton\\Domain\\Entity\\ItemEntity',
                    ],
                ],
                1 => [
                    'EventStore' => [
                        'times' => 0,
                        'load' => [
                            'times' => 0,
                            'getIterator' => [
                                'times' => 0,
                            ],
                        ],
                        'loadFromPlayhead' => [
                            'times' => 0,
                            'getIterator' => [
                                'times' => 0,
                            ],
                        ],
                        'append' => 1,
                    ],
                    'EventBus' => [
                        'times' => 0,
                        'subscribe' => 0,
                        'publish' => 1,
                    ],
                    'ItemEntity' => [
                        'times' => 0,
                        'getAggregateRootId' => 2,
                        'getUncommittedEvents' => [
                            'times' => 1,
                            'getIterator' => [
                                'times' => 0,
                            ],
                        ],
                        'addId' => 0,
                        'delete' => 0,
                        'getUuid' => [
                            'times' => 0,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'getUpdatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                            'sameValueAs' => 0,
                            'getDate' => [
                                'times' => 0,
                                'toNative' => [
                                    'times' => 0,
                                ],
                            ],
                            'getTime' => [
                                'times' => 0,
                                'toNative' => [
                                    'times' => 0,
                                ],
                            ],
                            'toNativeDateTime' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'initializeState' => 0,
                        'getPlayhead' => 0,
                    ],
                ],
            ],
        ];
    }
}
