<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Saga;

/**
 * DataProvider for class {testClassName}.
 */
class ItemSagaDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Saga\ItemSaga.
     *
     * @return mixed[]
     */
    public function getDataForConfigurationMethod(): array
    {
        return [
            0 => [
                0 => [
                    'configuration' => [
                        'ItemIdWasCreatedEvent' => null,
                    ],
                ],
                1 => [
                    'configuration' => [
                        'times' => 0,
                        'ItemIdWasCreatedEvent' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Saga\ItemSaga.
     *
     * @return mixed[]
     */
    public function getDataForHandleItemIdWasCreatedEventMethod(): array
    {
        return [
            0 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '2e86e248-8eab-380e-a535-3d37d4a7b3ca',
                            ],
                        ],
                    ],
                    'handleItemIdWasCreatedEvent' => null,
                    'State' => [
                        'set' => null,
                        'get' => null,
                        'getId' => 'nam',
                        'getSagaId' => 'nam',
                        'setDone' => null,
                        'isDone' => true,
                        'setFailed' => null,
                        'isFailed' => true,
                        'setDied' => null,
                        'isDied' => null,
                        'setInProgress' => null,
                        'isInProgress' => true,
                        'getStatus' => 2,
                        'isNew' => true,
                        'serialize' => null,
                    ],
                    'ItemIdWasCreatedEvent' => [
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 6,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'serialize' => [
                            0 => 'nemo',
                            1 => 'ducimus',
                            2 => 'animi',
                        ],
                        'getUuid' => [
                            'toNative' => '4778f923-a36e-3bd0-8b61-0122d132b4a0',
                            'getUuid' => [
                                'toString' => '03dde901-75ba-3469-9c20-59eeb5ab894f',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getProcessUuid' => [
                            'toNative' => '7360d28d-7e7a-3464-9c3f-da35faa56258',
                            'getUuid' => [
                                'toString' => '7854d47a-86a5-36d8-949a-ebaa130eb876',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                    ],
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 1,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 1,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'handleItemIdWasCreatedEvent' => 0,
                    'State' => [
                        'times' => 0,
                        'set' => 1,
                        'get' => 0,
                        'getId' => 0,
                        'getSagaId' => 0,
                        'setDone' => 1,
                        'isDone' => 0,
                        'setFailed' => 0,
                        'isFailed' => 0,
                        'setDied' => 0,
                        'isDied' => 0,
                        'setInProgress' => 0,
                        'isInProgress' => 0,
                        'getStatus' => 0,
                        'isNew' => 0,
                        'serialize' => 0,
                    ],
                    'ItemIdWasCreatedEvent' => [
                        'times' => 0,
                        'getId' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                            'inc' => 0,
                            'decr' => 0,
                        ],
                        'serialize' => 0,
                        'getUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getProcessUuid' => [
                            'times' => 2,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                    ],
                ],
            ],
            1 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '43cc79ab-3cc9-3489-beac-0368eeea8229',
                            ],
                        ],
                    ],
                    'handleItemIdWasCreatedEvent' => null,
                    'State' => [
                        'set' => null,
                        'get' => null,
                        'getId' => 'earum',
                        'getSagaId' => 'earum',
                        'setDone' => null,
                        'isDone' => true,
                        'setFailed' => null,
                        'isFailed' => true,
                        'setDied' => null,
                        'isDied' => null,
                        'setInProgress' => null,
                        'isInProgress' => true,
                        'getStatus' => 6,
                        'isNew' => true,
                        'serialize' => null,
                    ],
                    'ItemIdWasCreatedEvent' => [
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'serialize' => [
                            0 => 'sed',
                            1 => 'ducimus',
                            2 => 'qui',
                        ],
                        'getUuid' => [
                            'toNative' => 'f902c686-4634-352a-9a8b-bf85dfb0052e',
                            'getUuid' => [
                                'toString' => 'ea9bcb02-6b13-396d-9295-7a82e2fff076',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'e24657c1-2d4a-3a76-8e97-49b1379ad9fa',
                            'getUuid' => [
                                'toString' => 'fce65659-a293-3e3b-b5af-162185b56f0b',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                    ],
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 1,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 1,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'handleItemIdWasCreatedEvent' => 0,
                    'State' => [
                        'times' => 0,
                        'set' => 1,
                        'get' => 0,
                        'getId' => 0,
                        'getSagaId' => 0,
                        'setDone' => 1,
                        'isDone' => 0,
                        'setFailed' => 0,
                        'isFailed' => 0,
                        'setDied' => 0,
                        'isDied' => 0,
                        'setInProgress' => 0,
                        'isInProgress' => 0,
                        'getStatus' => 0,
                        'isNew' => 0,
                        'serialize' => 0,
                    ],
                    'ItemIdWasCreatedEvent' => [
                        'times' => 0,
                        'getId' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                            'inc' => 0,
                            'decr' => 0,
                        ],
                        'serialize' => 0,
                        'getUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getProcessUuid' => [
                            'times' => 2,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                    ],
                ],
            ],
            2 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '9fff33b6-0905-397e-b07a-115fc0f94174',
                            ],
                        ],
                    ],
                    'handleItemIdWasCreatedEvent' => null,
                    'State' => [
                        'set' => null,
                        'get' => null,
                        'getId' => 'molestiae',
                        'getSagaId' => 'molestiae',
                        'setDone' => null,
                        'isDone' => false,
                        'setFailed' => null,
                        'isFailed' => false,
                        'setDied' => null,
                        'isDied' => null,
                        'setInProgress' => null,
                        'isInProgress' => false,
                        'getStatus' => 4,
                        'isNew' => false,
                        'serialize' => null,
                    ],
                    'ItemIdWasCreatedEvent' => [
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'serialize' => [
                            0 => 'et',
                            1 => 'dicta',
                            2 => 'eos',
                        ],
                        'getUuid' => [
                            'toNative' => 'a3e7aac9-827a-33d8-85fa-3a141ad089e9',
                            'getUuid' => [
                                'toString' => '49f1cd35-a74c-3f41-85f9-0596b3c84f27',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'e0b88cf6-4f06-3b31-ba5a-a37f12bc99b6',
                            'getUuid' => [
                                'toString' => '138815b8-dd29-354f-a661-70e3c6cb0734',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                    ],
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 1,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 1,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'handleItemIdWasCreatedEvent' => 0,
                    'State' => [
                        'times' => 0,
                        'set' => 1,
                        'get' => 0,
                        'getId' => 0,
                        'getSagaId' => 0,
                        'setDone' => 1,
                        'isDone' => 0,
                        'setFailed' => 0,
                        'isFailed' => 0,
                        'setDied' => 0,
                        'isDied' => 0,
                        'setInProgress' => 0,
                        'isInProgress' => 0,
                        'getStatus' => 0,
                        'isNew' => 0,
                        'serialize' => 0,
                    ],
                    'ItemIdWasCreatedEvent' => [
                        'times' => 0,
                        'getId' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                            'inc' => 0,
                            'decr' => 0,
                        ],
                        'serialize' => 0,
                        'getUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getProcessUuid' => [
                            'times' => 2,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Saga\ItemSaga.
     *
     * @return mixed[]
     */
    public function getDataForHandleMethod(): array
    {
        return [
            0 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '2e86e248-8eab-380e-a535-3d37d4a7b3ca',
                            ],
                        ],
                    ],
                    'handle' => null,
                    'State' => [
                        'set' => null,
                        'get' => null,
                        'getId' => 'quidem',
                        'getSagaId' => 'quidem',
                        'setDone' => null,
                        'isDone' => false,
                        'setFailed' => null,
                        'isFailed' => false,
                        'setDied' => null,
                        'isDied' => null,
                        'setInProgress' => null,
                        'isInProgress' => false,
                        'getStatus' => 4,
                        'isNew' => false,
                        'serialize' => null,
                    ],
                    'DomainMessage' => [
                        'getId' => 'aut',
                        'getPlayhead' => 1,
                        'getMetadata' => [
                            'merge' => null,
                            'all' => [
                                0 => 'aspernatur',
                                1 => 'cum',
                                2 => 'qui',
                            ],
                            'get' => null,
                            'serialize' => null,
                        ],
                        'getPayload' => null,
                        'getRecordedOn' => [
                            'toString' => '1981-06-03T19:52:09+00:00',
                            'equals' => false,
                            'comesAfter' => false,
                            'add' => null,
                            'sub' => null,
                            'diff' => [
                                'format' => null,
                            ],
                            'toBeginningOfWeek' => null,
                            'toYearWeekString' => '1983',
                            'toNative' => '1981-06-03T19:52:09+00:00',
                        ],
                        'getType' => 'aut',
                        'andMetadata' => null,
                    ],
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 1,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'handle' => 0,
                    'State' => [
                        'times' => 0,
                        'set' => 1,
                        'get' => 0,
                        'getId' => 0,
                        'getSagaId' => 0,
                        'setDone' => 0,
                        'isDone' => 0,
                        'setFailed' => 0,
                        'isFailed' => 0,
                        'setDied' => 0,
                        'isDied' => 0,
                        'setInProgress' => 0,
                        'isInProgress' => 0,
                        'getStatus' => 0,
                        'isNew' => 0,
                        'serialize' => 0,
                    ],
                    'DomainMessage' => [
                        'times' => 0,
                        'getId' => 0,
                        'getPlayhead' => 0,
                        'getMetadata' => [
                            'times' => 0,
                            'merge' => 0,
                            'all' => 0,
                            'get' => 0,
                            'serialize' => 0,
                        ],
                        'getPayload' => 0,
                        'getRecordedOn' => [
                            'times' => 0,
                            'toString' => 0,
                            'equals' => 0,
                            'comesAfter' => 0,
                            'add' => 0,
                            'sub' => 0,
                            'diff' => [
                                'times' => 0,
                                'format' => 0,
                            ],
                            'toBeginningOfWeek' => 0,
                            'toYearWeekString' => 0,
                            'toNative' => 0,
                        ],
                        'getType' => 0,
                        'andMetadata' => 0,
                    ],
                ],
            ],
            1 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '43cc79ab-3cc9-3489-beac-0368eeea8229',
                            ],
                        ],
                    ],
                    'handle' => null,
                    'State' => [
                        'set' => null,
                        'get' => null,
                        'getId' => 'nulla',
                        'getSagaId' => 'nulla',
                        'setDone' => null,
                        'isDone' => false,
                        'setFailed' => null,
                        'isFailed' => false,
                        'setDied' => null,
                        'isDied' => null,
                        'setInProgress' => null,
                        'isInProgress' => false,
                        'getStatus' => 1,
                        'isNew' => false,
                        'serialize' => null,
                    ],
                    'DomainMessage' => [
                        'getId' => 'quas',
                        'getPlayhead' => 1,
                        'getMetadata' => [
                            'merge' => null,
                            'all' => [
                                0 => 'voluptatum',
                                1 => 'optio',
                                2 => 'aut',
                            ],
                            'get' => null,
                            'serialize' => null,
                        ],
                        'getPayload' => null,
                        'getRecordedOn' => [
                            'toString' => '2003-03-09T04:17:31+00:00',
                            'equals' => false,
                            'comesAfter' => false,
                            'add' => null,
                            'sub' => null,
                            'diff' => [
                                'format' => null,
                            ],
                            'toBeginningOfWeek' => null,
                            'toYearWeekString' => '2019',
                            'toNative' => '2003-03-09T04:17:31+00:00',
                        ],
                        'getType' => 'quas',
                        'andMetadata' => null,
                    ],
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'handle' => 0,
                    'State' => [
                        'times' => 0,
                        'set' => 1,
                        'get' => 0,
                        'getId' => 0,
                        'getSagaId' => 0,
                        'setDone' => 0,
                        'isDone' => 0,
                        'setFailed' => 0,
                        'isFailed' => 0,
                        'setDied' => 0,
                        'isDied' => 0,
                        'setInProgress' => 0,
                        'isInProgress' => 0,
                        'getStatus' => 0,
                        'isNew' => 0,
                        'serialize' => 0,
                    ],
                    'DomainMessage' => [
                        'times' => 0,
                        'getId' => 0,
                        'getPlayhead' => 0,
                        'getMetadata' => [
                            'times' => 0,
                            'merge' => 0,
                            'all' => 0,
                            'get' => 0,
                            'serialize' => 0,
                        ],
                        'getPayload' => 0,
                        'getRecordedOn' => [
                            'times' => 0,
                            'toString' => 0,
                            'equals' => 0,
                            'comesAfter' => 0,
                            'add' => 0,
                            'sub' => 0,
                            'diff' => [
                                'times' => 0,
                                'format' => 0,
                            ],
                            'toBeginningOfWeek' => 0,
                            'toYearWeekString' => 0,
                            'toNative' => 0,
                        ],
                        'getType' => 0,
                        'andMetadata' => 0,
                    ],
                ],
            ],
            2 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '9fff33b6-0905-397e-b07a-115fc0f94174',
                            ],
                        ],
                    ],
                    'handle' => null,
                    'State' => [
                        'set' => null,
                        'get' => null,
                        'getId' => 'aut',
                        'getSagaId' => 'aut',
                        'setDone' => null,
                        'isDone' => false,
                        'setFailed' => null,
                        'isFailed' => false,
                        'setDied' => null,
                        'isDied' => null,
                        'setInProgress' => null,
                        'isInProgress' => false,
                        'getStatus' => 3,
                        'isNew' => false,
                        'serialize' => null,
                    ],
                    'DomainMessage' => [
                        'getId' => 'facilis',
                        'getPlayhead' => 1,
                        'getMetadata' => [
                            'merge' => null,
                            'all' => [
                                0 => 'commodi',
                                1 => 'corporis',
                                2 => 'molestias',
                            ],
                            'get' => null,
                            'serialize' => null,
                        ],
                        'getPayload' => null,
                        'getRecordedOn' => [
                            'toString' => '1992-05-03T16:36:58+00:00',
                            'equals' => true,
                            'comesAfter' => true,
                            'add' => null,
                            'sub' => null,
                            'diff' => [
                                'format' => null,
                            ],
                            'toBeginningOfWeek' => null,
                            'toYearWeekString' => '2015',
                            'toNative' => '1992-05-03T16:36:58+00:00',
                        ],
                        'getType' => 'facilis',
                        'andMetadata' => null,
                    ],
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'handle' => 0,
                    'State' => [
                        'times' => 0,
                        'set' => 1,
                        'get' => 0,
                        'getId' => 0,
                        'getSagaId' => 0,
                        'setDone' => 0,
                        'isDone' => 0,
                        'setFailed' => 0,
                        'isFailed' => 0,
                        'setDied' => 0,
                        'isDied' => 0,
                        'setInProgress' => 0,
                        'isInProgress' => 0,
                        'getStatus' => 0,
                        'isNew' => 0,
                        'serialize' => 0,
                    ],
                    'DomainMessage' => [
                        'times' => 0,
                        'getId' => 0,
                        'getPlayhead' => 0,
                        'getMetadata' => [
                            'times' => 0,
                            'merge' => 0,
                            'all' => 0,
                            'get' => 0,
                            'serialize' => 0,
                        ],
                        'getPayload' => 0,
                        'getRecordedOn' => [
                            'times' => 0,
                            'toString' => 0,
                            'equals' => 0,
                            'comesAfter' => 0,
                            'add' => 0,
                            'sub' => 0,
                            'diff' => [
                                'times' => 0,
                                'format' => 0,
                            ],
                            'toBeginningOfWeek' => 0,
                            'toYearWeekString' => 0,
                            'toNative' => 0,
                        ],
                        'getType' => 0,
                        'andMetadata' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Saga\ItemSaga.
     *
     * @return mixed[]
     */
    public function getDataForGetLastStateMethod(): array
    {
        return [
            0 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '2e86e248-8eab-380e-a535-3d37d4a7b3ca',
                            ],
                        ],
                    ],
                    'getLastState' => 'Iowa',
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'getLastState' => 0,
                ],
            ],
            1 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '43cc79ab-3cc9-3489-beac-0368eeea8229',
                            ],
                        ],
                    ],
                    'getLastState' => 'South Dakota',
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'getLastState' => 0,
                ],
            ],
            2 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '9fff33b6-0905-397e-b07a-115fc0f94174',
                            ],
                        ],
                    ],
                    'getLastState' => 'Vermont',
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'getLastState' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Saga\ItemSaga.
     *
     * @return mixed[]
     */
    public function getDataForIsThrowExceptionMethod(): array
    {
        return [
            0 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '2e86e248-8eab-380e-a535-3d37d4a7b3ca',
                            ],
                        ],
                    ],
                    'isThrowException' => false,
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'isThrowException' => 0,
                ],
            ],
            1 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '43cc79ab-3cc9-3489-beac-0368eeea8229',
                            ],
                        ],
                    ],
                    'isThrowException' => true,
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'isThrowException' => 0,
                ],
            ],
            2 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '9fff33b6-0905-397e-b07a-115fc0f94174',
                            ],
                        ],
                    ],
                    'isThrowException' => true,
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'isThrowException' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Saga\ItemSaga.
     *
     * @return mixed[]
     */
    public function getDataForGetExceptionMethod(): array
    {
        return [
            0 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '2e86e248-8eab-380e-a535-3d37d4a7b3ca',
                            ],
                        ],
                    ],
                    'getException' => [
                        'getMessage' => null,
                        'getCode' => null,
                        'getFile' => null,
                        'getLine' => null,
                        'getTrace' => null,
                        'getPrevious' => null,
                        'getTraceAsString' => null,
                        'className' => 'Throwable',
                    ],
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'getException' => [
                        'times' => 0,
                        'getMessage' => 0,
                        'getCode' => 0,
                        'getFile' => 0,
                        'getLine' => 0,
                        'getTrace' => 0,
                        'getPrevious' => 0,
                        'getTraceAsString' => 0,
                        'className' => 'Throwable',
                    ],
                ],
            ],
            1 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '43cc79ab-3cc9-3489-beac-0368eeea8229',
                            ],
                        ],
                    ],
                    'getException' => [
                        'getMessage' => null,
                        'getCode' => null,
                        'getFile' => null,
                        'getLine' => null,
                        'getTrace' => null,
                        'getPrevious' => null,
                        'getTraceAsString' => null,
                        'className' => 'Throwable',
                    ],
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'getException' => [
                        'times' => 0,
                        'getMessage' => 0,
                        'getCode' => 0,
                        'getFile' => 0,
                        'getLine' => 0,
                        'getTrace' => 0,
                        'getPrevious' => 0,
                        'getTraceAsString' => 0,
                        'className' => 'Throwable',
                    ],
                ],
            ],
            2 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '9fff33b6-0905-397e-b07a-115fc0f94174',
                            ],
                        ],
                    ],
                    'getException' => [
                        'getMessage' => null,
                        'getCode' => null,
                        'getFile' => null,
                        'getLine' => null,
                        'getTrace' => null,
                        'getPrevious' => null,
                        'getTraceAsString' => null,
                        'className' => 'Throwable',
                    ],
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'getException' => [
                        'times' => 0,
                        'getMessage' => 0,
                        'getCode' => 0,
                        'getFile' => 0,
                        'getLine' => 0,
                        'getTrace' => 0,
                        'getPrevious' => 0,
                        'getTraceAsString' => 0,
                        'className' => 'Throwable',
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Saga\ItemSaga.
     *
     * @return mixed[]
     */
    public function getDataForCatchExceptionMethod(): array
    {
        return [
            0 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '2e86e248-8eab-380e-a535-3d37d4a7b3ca',
                            ],
                        ],
                    ],
                    'catchException' => null,
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'catchException' => 0,
                ],
            ],
            1 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '43cc79ab-3cc9-3489-beac-0368eeea8229',
                            ],
                        ],
                    ],
                    'catchException' => null,
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'catchException' => 0,
                ],
            ],
            2 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '9fff33b6-0905-397e-b07a-115fc0f94174',
                            ],
                        ],
                    ],
                    'catchException' => null,
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'catchException' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Saga\ItemSaga.
     *
     * @return mixed[]
     */
    public function getDataForIsExceptionCaughtMethod(): array
    {
        return [
            0 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '2e86e248-8eab-380e-a535-3d37d4a7b3ca',
                            ],
                        ],
                    ],
                    'isExceptionCaught' => null,
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'isExceptionCaught' => 0,
                ],
            ],
            1 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '43cc79ab-3cc9-3489-beac-0368eeea8229',
                            ],
                        ],
                    ],
                    'isExceptionCaught' => null,
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'isExceptionCaught' => 0,
                ],
            ],
            2 => [
                0 => [
                    'CommandBus' => [
                        'handle' => null,
                    ],
                    'CommandFactoryInterface' => [
                        'makeCommandInstanceByType' => [
                            'getUuid' => [
                                'toString' => '9fff33b6-0905-397e-b07a-115fc0f94174',
                            ],
                        ],
                    ],
                    'isExceptionCaught' => null,
                ],
                1 => [
                    'CommandBus' => [
                        'times' => 0,
                        'handle' => 0,
                    ],
                    'CommandFactoryInterface' => [
                        'times' => 0,
                        'makeCommandInstanceByType' => [
                            'times' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                        ],
                    ],
                    'isExceptionCaught' => 0,
                ],
            ],
        ];
    }
}
