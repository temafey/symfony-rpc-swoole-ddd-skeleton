<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository;

/**
 * DataProvider for class {testClassName}.
 */
class CommandRepositoryDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\CommandRepository.
     *
     * @return mixed[]
     */
    public function getDataForAddMethod(): array
    {
        return [
            0 => [
                0 => [
                    'ReadModelStoreInterface' => [
                        'findOne' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'findAll' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'findBy' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'findOneBy' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'insertOne' => null,
                        'updateOne' => '1976-08-17',
                        'deleteOne' => null,
                    ],
                    'ItemEntity' => [
                        'addId' => null,
                        'delete' => null,
                        'getUuid' => [
                            'toNative' => 'e8f2be28-a5cc-362c-b7cc-a6e55e1e0748',
                            'getUuid' => [
                                'toString' => '956eed60-431f-38d9-b5d1-1d74b0a5ae34',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                        ],
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Eino Kuhn DVM',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 9,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://predovic.info/',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '13:49:43',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '06:28:08',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '12:15:31',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '15:05:23',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '01:51:25',
                            ],
                        ],
                        'initializeState' => 'Texas',
                        'getPlayhead' => 4,
                    ],
                ],
                1 => [
                    'ReadModelStoreInterface' => [
                        'times' => 0,
                        'findOne' => 0,
                        'findAll' => 0,
                        'findBy' => 0,
                        'findOneBy' => 0,
                        'insertOne' => 1,
                        'updateOne' => 0,
                        'deleteOne' => 0,
                    ],
                    'ItemEntity' => [
                        'times' => 0,
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
                        'initializeState' => 0,
                        'getPlayhead' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\CommandRepository.
     *
     * @return mixed[]
     */
    public function getDataForUpdateMethod(): array
    {
        return [
            0 => [
                0 => [
                    'ReadModelStoreInterface' => [
                        'findOne' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'findAll' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'findBy' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'findOneBy' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'insertOne' => null,
                        'updateOne' => '1976-08-17',
                        'deleteOne' => null,
                    ],
                    'ItemEntity' => [
                        'addId' => null,
                        'delete' => null,
                        'getUuid' => [
                            'toNative' => '6ccb0984-dc7f-3d3c-8ab9-d4ae17ff3fec',
                            'getUuid' => [
                                'toString' => '1536a7aa-f82a-381f-885b-771033397f28',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 8,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                            ],
                        ],
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Minnie Strosin',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 8,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://orn.com/',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '14:14:50',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '06:18:36',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '03:46:29',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '02:11:51',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '09:02:22',
                            ],
                        ],
                        'initializeState' => 'Missouri',
                        'getPlayhead' => 9,
                    ],
                ],
                1 => [
                    'ReadModelStoreInterface' => [
                        'times' => 0,
                        'findOne' => 0,
                        'findAll' => 0,
                        'findBy' => 0,
                        'findOneBy' => 0,
                        'insertOne' => 0,
                        'updateOne' => 1,
                        'deleteOne' => 0,
                    ],
                    'ItemEntity' => [
                        'times' => 0,
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
                        'initializeState' => 0,
                        'getPlayhead' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\CommandRepository.
     *
     * @return mixed[]
     */
    public function getDataForDeleteMethod(): array
    {
        return [
            0 => [
                0 => [
                    'ReadModelStoreInterface' => [
                        'findOne' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'findAll' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'findBy' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'findOneBy' => [
                            0 => 'quis',
                            1 => 'dolorem',
                            2 => 'dolores',
                        ],
                        'insertOne' => null,
                        'updateOne' => '1976-08-17',
                        'deleteOne' => null,
                    ],
                    'ItemEntity' => [
                        'addId' => null,
                        'delete' => null,
                        'getUuid' => [
                            'toNative' => 'ac3dcf6c-1a97-31c2-8934-167bbc81ca9f',
                            'getUuid' => [
                                'toString' => '36692e56-fa37-30f7-a3cc-5d7c45367cf8',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 8,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                        ],
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Name Hammes',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 4,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://frami.com/et-aliquam-adipisci-molestiae-nemo',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '00:28:48',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '14:03:52',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '20:55:15',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '03:20:45',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '15:43:54',
                            ],
                        ],
                        'initializeState' => 'North Carolina',
                        'getPlayhead' => 5,
                    ],
                ],
                1 => [
                    'ReadModelStoreInterface' => [
                        'times' => 0,
                        'findOne' => 0,
                        'findAll' => 0,
                        'findBy' => 0,
                        'findOneBy' => 0,
                        'insertOne' => 0,
                        'updateOne' => 0,
                        'deleteOne' => 1,
                    ],
                    'ItemEntity' => [
                        'times' => 0,
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
                        'initializeState' => 0,
                        'getPlayhead' => 0,
                    ],
                ],
            ],
        ];
    }
}
