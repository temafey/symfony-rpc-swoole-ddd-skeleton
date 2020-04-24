<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory;

/**
 * DataProvider for class {testClassName}.
 */
class ItemFactoryDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ItemFactory.
     *
     * @return mixed[]
     */
    public function getDataForCreateInstanceMethod(): array
    {
        return [
            0 => [
                0 => [
                    'createInstance' => null,
                    'UUID' => [
                        'toNative' => '41f67434-a3f9-3acc-bb94-9077bd07cdd6',
                        'getUuid' => [
                            'toString' => '68475979-e7f4-307b-84d0-896b5c5a63fb',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => 'c57ab0e1-e9c6-3c59-bd8d-fb0a96509e86',
                        'getUuid' => [
                            'toString' => 'e6e8308b-e3fe-3971-a450-3960e5644d99',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'nemo',
                            1 => 'dolorem',
                            2 => 'vel',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'nemo',
                            1 => 'dolorem',
                            2 => 'vel',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 9,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Dr. Lenna Jacobi',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 4,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://little.com/ab-occaecati-ut-quibusdam-qui-delectus-ut-id',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '01:15:00',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '10:20:56',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '08:19:48',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '09:01:35',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '16:55:28',
                            ],
                        ],
                        'serialize' => [
                            0 => 'nemo',
                            1 => 'dolorem',
                            2 => 'vel',
                        ],
                    ],
                ],
                1 => [
                    'createInstance' => 0,
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
                        'toNative' => 0,
                        'getId' => [
                            'times' => 2,
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
                            'times' => 2,
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
                            'times' => 2,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getStatus' => [
                            'times' => 2,
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
                            'times' => 2,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getCreatedAt' => [
                            'times' => 2,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'getUpdatedAt' => [
                            'times' => 2,
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ItemFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeActualInstanceMethod(): array
    {
        return [
            0 => [
                0 => [
                    'makeActualInstance' => null,
                    'Uuid' => [
                        'toNative' => '83ca6aff-d5f6-3c97-8856-099ad06d5525',
                        'getUuid' => [
                            'toString' => '7762c084-2967-3cb7-9295-d3382817de83',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'repellat',
                            1 => 'earum',
                            2 => 'et',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'repellat',
                            1 => 'earum',
                            2 => 'et',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 6,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Romaine Blick',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://von.org/',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '18:42:25',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '23:57:40',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '00:03:20',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '17:05:28',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '23:55:37',
                            ],
                        ],
                        'serialize' => [
                            0 => 'repellat',
                            1 => 'earum',
                            2 => 'et',
                        ],
                    ],
                ],
                1 => [
                    'makeActualInstance' => 0,
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
                            'times' => 2,
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
                            'times' => 2,
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
                            'times' => 2,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getStatus' => [
                            'times' => 2,
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
                            'times' => 2,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getCreatedAt' => [
                            'times' => 2,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'getUpdatedAt' => [
                            'times' => 2,
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
