<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory;

/**
 * DataProvider for class {testClassName}.
 */
class EventFactoryDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\EventFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeItemWasCreatedEventMethod(): array
    {
        return [
            0 => [
                0 => [
                    'makeItemWasCreatedEvent' => null,
                    'UUID' => [
                        'toNative' => '3cb57131-847a-3c67-abf7-f3e26d45644e',
                        'getUuid' => [
                            'toString' => '4f1b913e-f79b-31c8-9ad4-1bf0446228de',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '022b1969-4106-3893-9687-8cafba602228',
                        'getUuid' => [
                            'toString' => '93b3052d-8278-3efb-9120-58f481b207ee',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'cumque',
                            1 => 'doloribus',
                            2 => 'earum',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'cumque',
                            1 => 'doloribus',
                            2 => 'earum',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 3,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 9,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'King Funk',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 8,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://www.kerluke.org/molestiae-aliquam-neque-aut-qui',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '11:02:25',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '08:30:11',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '23:45:50',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '23:40:04',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '15:41:24',
                            ],
                        ],
                        'serialize' => [
                            0 => 'cumque',
                            1 => 'doloribus',
                            2 => 'earum',
                        ],
                    ],
                ],
                1 => [
                    'makeItemWasCreatedEvent' => 0,
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
                    'Item' => [
                        'times' => 0,
                        'toArray' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 0,
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
                        'setId' => 0,
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
                                    'getTimestamp' => 0,
                                ],
                            ],
                            'getTime' => [
                                'times' => 0,
                                'toNative' => [
                                    'times' => 0,
                                    'getTimestamp' => 0,
                                ],
                            ],
                            'toNativeDateTime' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'serialize' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\EventFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeItemWasUpdatedEventMethod(): array
    {
        return [
            0 => [
                0 => [
                    'makeItemWasUpdatedEvent' => '1989-11-13',
                    'UUID' => [
                        'toNative' => '91a18fa5-148e-3a78-a20a-bfbaf47d70b9',
                        'getUuid' => [
                            'toString' => 'a0a52ad8-ff2b-361a-bf78-17d25efdcc44',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => 'd49407e6-182d-39fc-8f3d-96492ad529b7',
                        'getUuid' => [
                            'toString' => '8df05076-c20b-377e-9e97-d01540dc6001',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'voluptas',
                            1 => 'et',
                            2 => 'eius',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'voluptas',
                            1 => 'et',
                            2 => 'eius',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 6,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Alysa Herzog',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'https://schowalter.org/cum-ut-optio-et-et-laborum-natus-possimus.html',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '05:58:08',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '14:52:09',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '16:58:06',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '04:31:03',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '16:25:33',
                            ],
                        ],
                        'serialize' => [
                            0 => 'voluptas',
                            1 => 'et',
                            2 => 'eius',
                        ],
                    ],
                ],
                1 => [
                    'makeItemWasUpdatedEvent' => 0,
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
                    'Item' => [
                        'times' => 0,
                        'toArray' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 0,
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
                        'setId' => 0,
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
                                    'getTimestamp' => 0,
                                ],
                            ],
                            'getTime' => [
                                'times' => 0,
                                'toNative' => [
                                    'times' => 0,
                                    'getTimestamp' => 0,
                                ],
                            ],
                            'toNativeDateTime' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'serialize' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\EventFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeItemWasDeletedEventMethod(): array
    {
        return [
            0 => [
                0 => [
                    'makeItemWasDeletedEvent' => null,
                    'UUID' => [
                        'toNative' => 'e50e8b3b-6456-302f-9ae3-843b0c276bda',
                        'getUuid' => [
                            'toString' => 'f56706bf-7343-3268-aecd-8c54837564a5',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '36b1c0ab-2358-3fcd-82a2-a66863711acc',
                        'getUuid' => [
                            'toString' => '33139fd3-9966-3613-9aae-554d4f8e7845',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                ],
                1 => [
                    'makeItemWasDeletedEvent' => 0,
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
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\EventFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeItemIdWasCreatedEventMethod(): array
    {
        return [
            0 => [
                0 => [
                    'makeItemIdWasCreatedEvent' => null,
                    'UUID' => [
                        'toNative' => '436ddafa-48a9-3ac5-87cd-ca9933e549b1',
                        'getUuid' => [
                            'toString' => 'f0281613-b1e3-3a58-a110-aab718cf40f3',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => 'b318076e-dfbc-334e-a231-d34653d60ba8',
                        'getUuid' => [
                            'toString' => '98ba91b7-b7a8-310b-a04e-7dd86cdfd6d4',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Id' => [
                        'sameValueAs' => false,
                        'toNative' => 4,
                        'inc' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'decr' => [
                            'sameValueAs' => false,
                            'toNative' => 8,
                        ],
                    ],
                ],
                1 => [
                    'makeItemIdWasCreatedEvent' => 0,
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
                    'Id' => [
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
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\EventFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeItemIdWasAddedEventMethod(): array
    {
        return [
            0 => [
                0 => [
                    'makeItemIdWasAddedEvent' => null,
                    'UUID' => [
                        'toNative' => '1b5ad9ab-c9ae-3821-8e6c-f39af6136769',
                        'getUuid' => [
                            'toString' => 'fbd449b7-ed30-3679-a8d7-0b1792417f0a',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '0ebf6a70-098b-3fa4-a5ea-bcc1f464485f',
                        'getUuid' => [
                            'toString' => '56229999-ed56-3b5d-adac-69bf31f2aea3',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Id' => [
                        'sameValueAs' => true,
                        'toNative' => 4,
                        'inc' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'decr' => [
                            'sameValueAs' => true,
                            'toNative' => 9,
                        ],
                    ],
                ],
                1 => [
                    'makeItemIdWasAddedEvent' => 0,
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
                    'Id' => [
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
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\EventFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeEventStreamMethod(): array
    {
        return [
            0 => [
                0 => [
                    'makeEventStream' => null,
                    'ItemEvent' => [
                        'getUuid' => [
                            'toNative' => 'c963040c-c07c-38b3-9ad9-56a16b4eaf00',
                            'getUuid' => [
                                'toString' => '94f64bd1-9625-3af2-a7ea-8d190f50c22f',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getProcessUuid' => [
                            'toNative' => '21250ef3-a2ca-3af3-8ffc-82f75598ebe5',
                            'getUuid' => [
                                'toString' => 'ab22ee42-2182-3d3a-960e-c1e2aba511af',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'serialize' => [
                            0 => 'accusamus',
                            1 => 'ratione',
                            2 => 'iste',
                        ],
                    ],
                ],
                1 => [
                    'makeEventStream' => 0,
                    'ItemEvent' => [
                        'times' => 0,
                        'getUuid' => [
                            'times' => 1,
                            'toNative' => 1,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getProcessUuid' => [
                            'times' => 0,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'serialize' => 0,
                    ],
                ],
            ],
        ];
    }
}
