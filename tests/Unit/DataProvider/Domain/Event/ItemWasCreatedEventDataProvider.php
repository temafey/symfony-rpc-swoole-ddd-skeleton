<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event;

/**
 * DataProvider for class {testClassName}.
 */
class ItemWasCreatedEventDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent.
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
                    'Item' => [
                        'toArray' => [
                            'id' => 7,
                            'parentId' => 3,
                            'name' => 'Bertrand Stracke',
                            'status' => 1,
                            'url' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'createdAt' => '2020-03-16T10:44:21+00:00',
                            'updatedAt' => '2020-03-16T09:09:05+00:00',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            'id' => 7,
                            'parentId' => 3,
                            'name' => 'Bertrand Stracke',
                            'status' => 1,
                            'url' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'createdAt' => '2020-03-16T10:44:21+00:00',
                            'updatedAt' => '2020-03-16T09:09:05+00:00',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                        ],

                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Bertrand Stracke',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '2020-03-16T10:44:21+00:00',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '2020-03-16T09:09:05+00:00',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '08:05:09',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '21:16:27',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '13:19:08',
                            ],
                        ],
                        'serialize' => [
                            0 => 'voluptatum',
                            1 => 'maiores',
                            2 => 'dolorum',
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
                    'Item' => [
                        'times' => 0,
                        'toArray' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent.
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
                    'Item' => [
                        'toArray' => [
                            'id' => 7,
                            'parentId' => 3,
                            'name' => 'Bertrand Stracke',
                            'status' => 1,
                            'url' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'createdAt' => '2020-03-16T10:44:21+00:00',
                            'updatedAt' => '2020-03-16T09:09:05+00:00',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            'id' => 7,
                            'parentId' => 3,
                            'name' => 'Bertrand Stracke',
                            'status' => 1,
                            'url' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'createdAt' => '2020-03-16T10:44:21+00:00',
                            'updatedAt' => '2020-03-16T09:09:05+00:00',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                        ],
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Bertrand Stracke',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '2020-03-16T10:44:21+00:00',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '2020-03-16T09:09:05+00:00',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '08:05:09',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '21:16:27',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '13:19:08',
                            ],
                        ],
                        'serialize' => [
                            'id' => 7,
                            'parentId' => 3,
                            'name' => 'Bertrand Stracke',
                            'status' => 1,
                            'url' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'createdAt' => '2020-03-16T10:44:21+00:00',
                            'updatedAt' => '2020-03-16T09:09:05+00:00',
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent.
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
                    'Item' => [
                        'toArray' => [
                            'id' => 7,
                            'parentId' => 3,
                            'name' => 'Bertrand Stracke',
                            'status' => 1,
                            'url' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'createdAt' => '2020-03-16T10:44:21+00:00',
                            'updatedAt' => '2020-03-16T09:09:05+00:00',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            'id' => 7,
                            'parentId' => 3,
                            'name' => 'Bertrand Stracke',
                            'status' => 1,
                            'url' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'createdAt' => '2020-03-16T10:44:21+00:00',
                            'updatedAt' => '2020-03-16T09:09:05+00:00',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                        ],
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Bertrand Stracke',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '2020-03-16T10:44:21+00:00',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '2020-03-16T09:09:05+00:00',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '08:05:09',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '21:16:27',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '13:19:08',
                            ],
                        ],
                        'serialize' => [
                            'id' => 7,
                            'parentId' => 3,
                            'name' => 'Bertrand Stracke',
                            'status' => 1,
                            'url' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'createdAt' => '2020-03-16T10:44:21+00:00',
                            'updatedAt' => '2020-03-16T09:09:05+00:00',
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
                    'Item' => [
                        'times' => 0,
                        'toArray' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
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
}
