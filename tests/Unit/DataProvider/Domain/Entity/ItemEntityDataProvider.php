<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity;

/**
 * DataProvider for class {testClassName}.
 */
class ItemEntityDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity.
     *
     * @return mixed[]
     */
    public function getDataForCreateMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventFactory' => [
                        'makeItemWasCreatedEvent' => [
                            'getItem' => [
                                'toArray' => [
                                    0 => 'minus',
                                    1 => 'eos',
                                    2 => 'sed',
                                ],
                                'sameValueAs' => false,
                                'toNative' => [
                                    0 => 'minus',
                                    1 => 'eos',
                                    2 => 'sed',
                                ],
                                'getId' => [
                                    'sameValueAs' => true,
                                    'toNative' => 2,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'setId' => null,
                                'getParentId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 1,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getName' => [
                                    'toNative' => 'Madison Jacobi',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getStatus' => [
                                    'isActive' => false,
                                    'sameValueAs' => false,
                                    'toNative' => 4,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getUrl' => [
                                    'toNative' => 'http://ebert.com/',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                    ],
                                    'sameValueAs' => true,
                                    'getDate' => [
                                    ],
                                    'getTime' => [
                                    ],
                                    'toNativeDateTime' => [
                                    ],
                                ],
                                'serialize' => [
                                    0 => 'minus',
                                    1 => 'eos',
                                    2 => 'sed',
                                ],
                            ],
                            'serialize' => [
                                0 => 'pariatur',
                                1 => 'dolores',
                                2 => 'accusantium',
                            ],
                            'getUuid' => [
                                'toNative' => '56060dde-7933-318c-89df-c2666dd1c958',
                                'getUuid' => [
                                    'toString' => '5f09c068-15c3-3e47-8cd8-637a6af750f7',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getProcessUuid' => [
                                'toNative' => 'fdeb8177-d2c4-37b4-8a62-00142bb083c0',
                                'getUuid' => [
                                    'toString' => 'ff1047b3-6ff9-335f-94ef-299040f59556',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                        ],
                    ],
                    'create' => null,
                    'UUID' => [
                        'toNative' => '82b506b9-d1af-3992-852e-891924f5e933',
                        'getUuid' => [
                            'toString' => 'ea133f0f-88a0-3916-a564-84f11abcda0d',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '4579eb34-b5fd-3f20-93fc-96b94e91712a',
                        'getUuid' => [
                            'toString' => '9b23d1c4-e0bd-3c29-9fec-356a01194948',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'omnis',
                            1 => 'eum',
                            2 => 'fugit',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'omnis',
                            1 => 'eum',
                            2 => 'fugit',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 4,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Dr. Earnest Abbott III',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 4,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://www.champlin.com/eligendi-odio-recusandae-vel-et.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '18:40:53',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '22:12:49',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '16:03:41',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '11:50:15',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '00:29:04',
                            ],
                        ],
                        'serialize' => [
                            0 => 'omnis',
                            1 => 'eum',
                            2 => 'fugit',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [
                        'times' => 0,
                        'makeItemWasCreatedEvent' => [
                            'times' => 1,
                            'getItem' => [
                                'times' => 1,
                                'toArray' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'getId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 1,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'setId' => 0,
                                'getParentId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 0,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'getName' => [
                                    'times' => 2,
                                    'toNative' => 1,
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
                                    ],
                                    'decr' => [
                                        'times' => 0,
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
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'times' => 2,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                    'sameValueAs' => 0,
                                    'getDate' => [
                                        'times' => 0,
                                    ],
                                    'getTime' => [
                                        'times' => 0,
                                    ],
                                    'toNativeDateTime' => [
                                        'times' => 0,
                                    ],
                                ],
                                'serialize' => 0,
                            ],
                            'serialize' => 0,
                            'getUuid' => [
                                'times' => 1,
                                'toNative' => 2,
                                'getUuid' => [
                                    'times' => 0,
                                    'toString' => 0,
                                ],
                                'sameValueAs' => 0,
                                'isEmpty' => 0,
                            ],
                            'getProcessUuid' => [
                                'times' => 1,
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
                    'create' => 0,
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
            1 => [
                0 => [
                    'EventFactory' => [
                        'makeItemWasCreatedEvent' => [
                            'getItem' => [
                                'toArray' => [
                                    0 => 'iure',
                                    1 => 'vitae',
                                    2 => 'voluptas',
                                ],
                                'sameValueAs' => false,
                                'toNative' => [
                                    0 => 'iure',
                                    1 => 'vitae',
                                    2 => 'voluptas',
                                ],
                                'getId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 9,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'setId' => null,
                                'getParentId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 3,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getName' => [
                                    'toNative' => 'Valentina Lueilwitz V',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getStatus' => [
                                    'isActive' => false,
                                    'sameValueAs' => false,
                                    'toNative' => 1,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getUrl' => [
                                    'toNative' => 'http://boehm.com/totam-eius-in-est-est-sit',
                                    'sameValueAs' => false,
                                    'isEmpty' => false,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                    ],
                                    'sameValueAs' => false,
                                    'getDate' => [
                                    ],
                                    'getTime' => [
                                    ],
                                    'toNativeDateTime' => [
                                    ],
                                ],
                                'serialize' => [
                                    0 => 'iure',
                                    1 => 'vitae',
                                    2 => 'voluptas',
                                ],
                            ],
                            'serialize' => [
                                0 => 'nobis',
                                1 => 'laudantium',
                                2 => 'similique',
                            ],
                            'getUuid' => [
                                'toNative' => '511a6091-61e0-36be-ac31-f5d54af6a2c9',
                                'getUuid' => [
                                    'toString' => '060decfc-3b4e-3203-ba2d-39a4696a79fd',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getProcessUuid' => [
                                'toNative' => 'f563a0d9-76a2-394c-8543-f5f6ccd368e8',
                                'getUuid' => [
                                    'toString' => '296d31da-b7c0-389b-8fdb-96ad85445532',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                        ],
                    ],
                    'create' => null,
                    'UUID' => [
                        'toNative' => '2da11668-4dda-3199-95b2-1011d4d39719',
                        'getUuid' => [
                            'toString' => 'd9f2d6e0-db4c-3589-b25b-7d60913f3c7a',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '39ec8a45-a8e2-367d-a2dc-c04544ae3754',
                        'getUuid' => [
                            'toString' => '75831c31-367e-3554-97e4-b5fa699e153b',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'explicabo',
                            1 => 'doloremque',
                            2 => 'mollitia',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'explicabo',
                            1 => 'doloremque',
                            2 => 'mollitia',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 9,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Kavon Heathcote',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'https://oconner.net/quia-deserunt-nemo-et-praesentium.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '08:53:43',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:00:34',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '04:37:50',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '17:51:26',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '20:04:38',
                            ],
                        ],
                        'serialize' => [
                            0 => 'explicabo',
                            1 => 'doloremque',
                            2 => 'mollitia',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [
                        'times' => 0,
                        'makeItemWasCreatedEvent' => [
                            'times' => 1,
                            'getItem' => [
                                'times' => 1,
                                'toArray' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'getId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 1,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'setId' => 0,
                                'getParentId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 0,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'getName' => [
                                    'times' => 2,
                                    'toNative' => 1,
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
                                    ],
                                    'decr' => [
                                        'times' => 0,
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
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'times' => 2,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                    'sameValueAs' => 0,
                                    'getDate' => [
                                        'times' => 0,
                                    ],
                                    'getTime' => [
                                        'times' => 0,
                                    ],
                                    'toNativeDateTime' => [
                                        'times' => 0,
                                    ],
                                ],
                                'serialize' => 0,
                            ],
                            'serialize' => 0,
                            'getUuid' => [
                                'times' => 1,
                                'toNative' => 2,
                                'getUuid' => [
                                    'times' => 0,
                                    'toString' => 0,
                                ],
                                'sameValueAs' => 0,
                                'isEmpty' => 0,
                            ],
                            'getProcessUuid' => [
                                'times' => 1,
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
                    'create' => 0,
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
            2 => [
                0 => [
                    'EventFactory' => [
                        'makeItemWasCreatedEvent' => [
                            'getItem' => [
                                'toArray' => [
                                    0 => 'illum',
                                    1 => 'cum',
                                    2 => 'iste',
                                ],
                                'sameValueAs' => true,
                                'toNative' => [
                                    0 => 'illum',
                                    1 => 'cum',
                                    2 => 'iste',
                                ],
                                'getId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 6,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'setId' => null,
                                'getParentId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 1,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getName' => [
                                    'toNative' => 'Weldon Hirthe',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getStatus' => [
                                    'isActive' => true,
                                    'sameValueAs' => true,
                                    'toNative' => 1,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getUrl' => [
                                    'toNative' => 'http://bahringer.com/',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                    ],
                                    'sameValueAs' => true,
                                    'getDate' => [
                                    ],
                                    'getTime' => [
                                    ],
                                    'toNativeDateTime' => [
                                    ],
                                ],
                                'serialize' => [
                                    0 => 'illum',
                                    1 => 'cum',
                                    2 => 'iste',
                                ],
                            ],
                            'serialize' => [
                                0 => 'commodi',
                                1 => 'quia',
                                2 => 'consequatur',
                            ],
                            'getUuid' => [
                                'toNative' => 'd0443ddf-0495-36e2-9e06-517a0bf0e257',
                                'getUuid' => [
                                    'toString' => '0b23c9e4-53d0-3d6a-a519-bfbb78a7daa5',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getProcessUuid' => [
                                'toNative' => 'e8e93a80-253a-3d78-8830-552dd9ce8a94',
                                'getUuid' => [
                                    'toString' => '32ac7bce-8480-3dcc-a09d-062eb24e2149',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                        ],
                    ],
                    'create' => null,
                    'UUID' => [
                        'toNative' => '6661600f-2e0c-3664-8514-023664f42a08',
                        'getUuid' => [
                            'toString' => '5e6fba59-097e-3b5b-8d90-e48655877ca4',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '6d16f8cc-0e3c-3dd7-b212-496e869e71e9',
                        'getUuid' => [
                            'toString' => 'a037e3c6-be0e-3540-bdb2-cbc7298bb087',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'earum',
                            1 => 'eius',
                            2 => 'explicabo',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'earum',
                            1 => 'eius',
                            2 => 'explicabo',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 8,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Prof. Larry Ziemann',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'https://collier.com/pariatur-maiores-iusto-asperiores-illo.html',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '05:10:03',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '13:11:19',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '15:15:07',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '09:33:30',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '18:30:12',
                            ],
                        ],
                        'serialize' => [
                            0 => 'earum',
                            1 => 'eius',
                            2 => 'explicabo',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [
                        'times' => 0,
                        'makeItemWasCreatedEvent' => [
                            'times' => 1,
                            'getItem' => [
                                'times' => 1,
                                'toArray' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'getId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 1,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'setId' => 0,
                                'getParentId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 0,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'getName' => [
                                    'times' => 2,
                                    'toNative' => 1,
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
                                    ],
                                    'decr' => [
                                        'times' => 0,
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
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'times' => 2,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                    'sameValueAs' => 0,
                                    'getDate' => [
                                        'times' => 0,
                                    ],
                                    'getTime' => [
                                        'times' => 0,
                                    ],
                                    'toNativeDateTime' => [
                                        'times' => 0,
                                    ],
                                ],
                                'serialize' => 0,
                            ],
                            'serialize' => 0,
                            'getUuid' => [
                                'times' => 1,
                                'toNative' => 2,
                                'getUuid' => [
                                    'times' => 0,
                                    'toString' => 0,
                                ],
                                'sameValueAs' => 0,
                                'isEmpty' => 0,
                            ],
                            'getProcessUuid' => [
                                'times' => 1,
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
                    'create' => 0,
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity.
     *
     * @return mixed[]
     */
    public function getDataForAddIdMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventFactory' => [
                        'makeItemWasCreatedEvent' => [
                            'getItem' => [
                                'toArray' => [
                                    0 => 'non',
                                    1 => 'dolorem',
                                    2 => 'dolorum',
                                ],
                                'sameValueAs' => true,
                                'toNative' => [
                                    0 => 'non',
                                    1 => 'dolorem',
                                    2 => 'dolorum',
                                ],
                                'getId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'setId' => null,
                                'getParentId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getName' => [
                                    'toNative' => 'Prof. Rosalyn Nienow',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getStatus' => [
                                    'isActive' => false,
                                    'sameValueAs' => false,
                                    'toNative' => 1,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getUrl' => [
                                    'toNative' => 'https://www.conroy.com/velit-natus-ducimus-corrupti-aut-aut-earum-libero',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                    ],
                                    'sameValueAs' => true,
                                    'getDate' => [
                                    ],
                                    'getTime' => [
                                    ],
                                    'toNativeDateTime' => [
                                    ],
                                ],
                                'serialize' => [
                                    0 => 'non',
                                    1 => 'dolorem',
                                    2 => 'dolorum',
                                ],
                            ],
                            'serialize' => [
                                0 => 'debitis',
                                1 => 'quis',
                                2 => 'fugiat',
                            ],
                            'getUuid' => [
                                'toNative' => 'bf3a6270-4e97-3009-a2ff-e827f7d79f24',
                                'getUuid' => [
                                    'toString' => '8d200bcb-cdcf-3bcc-adec-0a155bda0d67',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getProcessUuid' => [
                                'toNative' => '1416a986-9710-3cdb-bef2-5ed241cbcaa8',
                                'getUuid' => [
                                    'toString' => '4b01c8d2-ee44-3331-a05f-3e01d7087f29',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                        ],
                        'makeItemIdWasAddedEvent' => [
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 3,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 2,
                                ],
                            ],
                            'serialize' => [
                                0 => 'saepe',
                                1 => 'possimus',
                                2 => 'ut',
                            ],
                            'getUuid' => [
                                'toNative' => 'a87334a2-a5bb-3207-8760-d98f89dfc582',
                                'getUuid' => [
                                    'toString' => '9b3f9160-e29f-3e3f-b5ed-8641f33852f7',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getProcessUuid' => [
                                'toNative' => 'b56fa72c-484c-3a1e-91b5-7159a99dc9fc',
                                'getUuid' => [
                                    'toString' => 'a9f4e45d-d2de-3b84-aee3-2d245f9acba0',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                        ],
                    ],
                    'UUID' => [
                        'toNative' => '82b506b9-d1af-3992-852e-891924f5e933',
                        'getUuid' => [
                            'toString' => 'ea133f0f-88a0-3916-a564-84f11abcda0d',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '4579eb34-b5fd-3f20-93fc-96b94e91712a',
                        'getUuid' => [
                            'toString' => '9b23d1c4-e0bd-3c29-9fec-356a01194948',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Id' => [
                        'sameValueAs' => false,
                        'toNative' => 7,
                        'inc' => [
                            'sameValueAs' => true,
                            'toNative' => 8,
                        ],
                        'decr' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'omnis',
                            1 => 'eum',
                            2 => 'fugit',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'omnis',
                            1 => 'eum',
                            2 => 'fugit',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 4,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Dr. Earnest Abbott III',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 4,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://www.champlin.com/eligendi-odio-recusandae-vel-et.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '18:40:53',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '22:12:49',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '16:03:41',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '11:50:15',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '00:29:04',
                            ],
                        ],
                        'serialize' => [
                            0 => 'omnis',
                            1 => 'eum',
                            2 => 'fugit',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [
                        'times' => 0,
                        'makeItemWasCreatedEvent' => [
                            'times' => 1,
                            'getItem' => [
                                'times' => 1,
                                'toArray' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'getId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 0,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'setId' => 0,
                                'getParentId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 0,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'getName' => [
                                    'times' => 2,
                                    'toNative' => 1,
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
                                    ],
                                    'decr' => [
                                        'times' => 0,
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
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'times' => 2,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                    'sameValueAs' => 0,
                                    'getDate' => [
                                        'times' => 0,
                                    ],
                                    'getTime' => [
                                        'times' => 0,
                                    ],
                                    'toNativeDateTime' => [
                                        'times' => 0,
                                    ],
                                ],
                                'serialize' => 0,
                            ],
                            'serialize' => 0,
                            'getUuid' => [
                                'times' => 1,
                                'toNative' => 3,
                                'getUuid' => [
                                    'times' => 0,
                                    'toString' => 0,
                                ],
                                'sameValueAs' => 0,
                                'isEmpty' => 0,
                            ],
                            'getProcessUuid' => [
                                'times' => 1,
                                'toNative' => 0,
                                'getUuid' => [
                                    'times' => 0,
                                    'toString' => 0,
                                ],
                                'sameValueAs' => 0,
                                'isEmpty' => 0,
                            ],
                        ],
                        'makeItemIdWasAddedEvent' => [
                            'times' => 1,
                            'getId' => [
                                'times' => 1,
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
                        ],
                    ],
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity.
     *
     * @return mixed[]
     */
    public function getDataForUpdateMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventFactory' => [
                        'makeItemWasCreatedEvent' => [
                            'getItem' => [
                                'toArray' => [
                                    0 => 'non',
                                    1 => 'dolorem',
                                    2 => 'dolorum',
                                ],
                                'sameValueAs' => true,
                                'toNative' => [
                                    0 => 'non',
                                    1 => 'dolorem',
                                    2 => 'dolorum',
                                ],
                                'getId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'setId' => null,
                                'getParentId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getName' => [
                                    'toNative' => 'Prof. Rosalyn Nienow',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getStatus' => [
                                    'isActive' => false,
                                    'sameValueAs' => false,
                                    'toNative' => 1,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getUrl' => [
                                    'toNative' => 'https://www.conroy.com/velit-natus-ducimus-corrupti-aut-aut-earum-libero',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                    ],
                                    'sameValueAs' => true,
                                    'getDate' => [
                                    ],
                                    'getTime' => [
                                    ],
                                    'toNativeDateTime' => [
                                    ],
                                ],
                                'serialize' => [
                                    0 => 'non',
                                    1 => 'dolorem',
                                    2 => 'dolorum',
                                ],
                            ],
                            'serialize' => [
                                0 => 'debitis',
                                1 => 'quis',
                                2 => 'fugiat',
                            ],
                            'getUuid' => [
                                'toNative' => 'bf3a6270-4e97-3009-a2ff-e827f7d79f24',
                                'getUuid' => [
                                    'toString' => '8d200bcb-cdcf-3bcc-adec-0a155bda0d67',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getProcessUuid' => [
                                'toNative' => '1416a986-9710-3cdb-bef2-5ed241cbcaa8',
                                'getUuid' => [
                                    'toString' => '4b01c8d2-ee44-3331-a05f-3e01d7087f29',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                        ],
                        'makeItemWasUpdatedEvent' => [
                            'getItem' => [
                                'toArray' => [
                                    0 => 'reiciendis',
                                    1 => 'in',
                                    2 => 'eius',
                                ],
                                'sameValueAs' => false,
                                'toNative' => [
                                    0 => 'reiciendis',
                                    1 => 'in',
                                    2 => 'eius',
                                ],
                                'getId' => [
                                    'sameValueAs' => true,
                                    'toNative' => 2,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'setId' => null,
                                'getParentId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 3,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getName' => [
                                    'toNative' => 'Marilyne Monahan',
                                    'sameValueAs' => false,
                                    'isEmpty' => false,
                                ],
                                'getStatus' => [
                                    'isActive' => false,
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getUrl' => [
                                    'toNative' => 'http://www.willms.com/',
                                    'sameValueAs' => false,
                                    'isEmpty' => false,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                    ],
                                    'sameValueAs' => false,
                                    'getDate' => [
                                    ],
                                    'getTime' => [
                                    ],
                                    'toNativeDateTime' => [
                                    ],
                                ],
                                'serialize' => [
                                    0 => 'reiciendis',
                                    1 => 'in',
                                    2 => 'eius',
                                ],
                            ],
                            'serialize' => [
                                0 => 'nihil',
                                1 => 'animi',
                                2 => 'dolorum',
                            ],
                            'getUuid' => [
                                'toNative' => 'b646961f-ba36-3a66-b8c4-3a37624ba14c',
                                'getUuid' => [
                                    'toString' => '1cd5c7ce-9093-3d8b-bf16-4948a7e8e282',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getProcessUuid' => [
                                'toNative' => 'b335bec5-a11a-36f0-8a95-d14b1be26ce4',
                                'getUuid' => [
                                    'toString' => '489a5198-133e-3a1a-b21f-099860649f56',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                        ],
                    ],
                    'UUID' => [
                        'toNative' => '82b506b9-d1af-3992-852e-891924f5e933',
                        'getUuid' => [
                            'toString' => 'ea133f0f-88a0-3916-a564-84f11abcda0d',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '4579eb34-b5fd-3f20-93fc-96b94e91712a',
                        'getUuid' => [
                            'toString' => '9b23d1c4-e0bd-3c29-9fec-356a01194948',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'optio',
                            1 => 'omnis',
                            2 => 'hic',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'optio',
                            1 => 'omnis',
                            2 => 'hic',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 8,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 8,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Miss Yazmin McLaughlin II',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'https://www.kihn.com/veniam-totam-incidunt-iste-ullam',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '19:51:48',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '14:09:00',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '12:37:24',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '18:52:20',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '23:56:38',
                            ],
                        ],
                        'serialize' => [
                            0 => 'optio',
                            1 => 'omnis',
                            2 => 'hic',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [
                        'times' => 0,
                        'makeItemWasCreatedEvent' => [
                            'times' => 1,
                            'getItem' => [
                                'times' => 1,
                                'toArray' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'getId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 0,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'setId' => 0,
                                'getParentId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 1,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'getName' => [
                                    'times' => 2,
                                    'toNative' => 1,
                                    'sameValueAs' => 0,
                                    'isEmpty' => 0,
                                ],
                                'getStatus' => [
                                    'times' => 2,
                                    'isActive' => 0,
                                    'sameValueAs' => 0,
                                    'toNative' => 1,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'getUrl' => [
                                    'times' => 2,
                                    'toNative' => 1,
                                    'sameValueAs' => 0,
                                    'isEmpty' => 0,
                                ],
                                'getCreatedAt' => [
                                    'times' => 2,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'times' => 2,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                    'sameValueAs' => 0,
                                    'getDate' => [
                                        'times' => 0,
                                    ],
                                    'getTime' => [
                                        'times' => 0,
                                    ],
                                    'toNativeDateTime' => [
                                        'times' => 0,
                                    ],
                                ],
                                'serialize' => 0,
                            ],
                            'serialize' => 0,
                            'getUuid' => [
                                'times' => 1,
                                'toNative' => 3,
                                'getUuid' => [
                                    'times' => 0,
                                    'toString' => 0,
                                ],
                                'sameValueAs' => 0,
                                'isEmpty' => 0,
                            ],
                            'getProcessUuid' => [
                                'times' => 1,
                                'toNative' => 0,
                                'getUuid' => [
                                    'times' => 0,
                                    'toString' => 0,
                                ],
                                'sameValueAs' => 0,
                                'isEmpty' => 0,
                            ],
                        ],
                        'makeItemWasUpdatedEvent' => [
                            'times' => 1,
                            'getItem' => [
                                'times' => 1,
                                'toArray' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'getId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 0,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'setId' => 0,
                                'getParentId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 1,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'getName' => [
                                    'times' => 2,
                                    'toNative' => 1,
                                    'sameValueAs' => 0,
                                    'isEmpty' => 0,
                                ],
                                'getStatus' => [
                                    'times' => 2,
                                    'isActive' => 0,
                                    'sameValueAs' => 0,
                                    'toNative' => 1,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'getUrl' => [
                                    'times' => 2,
                                    'toNative' => 1,
                                    'sameValueAs' => 0,
                                    'isEmpty' => 0,
                                ],
                                'getCreatedAt' => [
                                    'times' => 2,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'times' => 2,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                    'sameValueAs' => 0,
                                    'getDate' => [
                                        'times' => 0,
                                    ],
                                    'getTime' => [
                                        'times' => 0,
                                    ],
                                    'toNativeDateTime' => [
                                        'times' => 0,
                                    ],
                                ],
                                'serialize' => 0,
                            ],
                            'serialize' => 0,
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
                        ],
                    ],
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity.
     *
     * @return mixed[]
     */
    public function getDataForDeleteMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventFactory' => [
                        'makeItemWasCreatedEvent' => [
                            'getItem' => [
                                'toArray' => [
                                    0 => 'non',
                                    1 => 'dolorem',
                                    2 => 'dolorum',
                                ],
                                'sameValueAs' => true,
                                'toNative' => [
                                    0 => 'non',
                                    1 => 'dolorem',
                                    2 => 'dolorum',
                                ],
                                'getId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'setId' => null,
                                'getParentId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getName' => [
                                    'toNative' => 'Prof. Rosalyn Nienow',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getStatus' => [
                                    'isActive' => false,
                                    'sameValueAs' => false,
                                    'toNative' => 1,
                                    'inc' => [
                                    ],
                                    'decr' => [
                                    ],
                                ],
                                'getUrl' => [
                                    'toNative' => 'https://www.conroy.com/velit-natus-ducimus-corrupti-aut-aut-earum-libero',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                    ],
                                    'sameValueAs' => true,
                                    'getDate' => [
                                    ],
                                    'getTime' => [
                                    ],
                                    'toNativeDateTime' => [
                                    ],
                                ],
                                'serialize' => [
                                    0 => 'non',
                                    1 => 'dolorem',
                                    2 => 'dolorum',
                                ],
                            ],
                            'serialize' => [
                                0 => 'debitis',
                                1 => 'quis',
                                2 => 'fugiat',
                            ],
                            'getUuid' => [
                                'toNative' => 'bf3a6270-4e97-3009-a2ff-e827f7d79f24',
                                'getUuid' => [
                                    'toString' => '8d200bcb-cdcf-3bcc-adec-0a155bda0d67',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getProcessUuid' => [
                                'toNative' => '1416a986-9710-3cdb-bef2-5ed241cbcaa8',
                                'getUuid' => [
                                    'toString' => '4b01c8d2-ee44-3331-a05f-3e01d7087f29',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                        ],
                        'makeItemWasDeletedEvent' => [
                            'getUuid' => [
                                'toNative' => 'e1f388a2-c28a-3232-ad33-5844f4435d26',
                                'getUuid' => [
                                    'toString' => '5bd2b689-95c2-3f0b-8732-c6b1ff480f6a',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getProcessUuid' => [
                                'toNative' => 'a449d895-9604-3661-9e5b-f019320a5e18',
                                'getUuid' => [
                                    'toString' => 'b1d64f1e-6d3c-3034-944c-e5cb21a49bea',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'serialize' => [
                                0 => 'nam',
                                1 => 'nemo',
                                2 => 'similique',
                            ],
                        ],
                    ],
                    'UUID' => [
                        'toNative' => '82b506b9-d1af-3992-852e-891924f5e933',
                        'getUuid' => [
                            'toString' => 'ea133f0f-88a0-3916-a564-84f11abcda0d',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '4579eb34-b5fd-3f20-93fc-96b94e91712a',
                        'getUuid' => [
                            'toString' => '9b23d1c4-e0bd-3c29-9fec-356a01194948',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'omnis',
                            1 => 'eum',
                            2 => 'fugit',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'omnis',
                            1 => 'eum',
                            2 => 'fugit',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 4,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Dr. Earnest Abbott III',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 4,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://www.champlin.com/eligendi-odio-recusandae-vel-et.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '18:40:53',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '22:12:49',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '16:03:41',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '11:50:15',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '00:29:04',
                            ],
                        ],
                        'serialize' => [
                            0 => 'omnis',
                            1 => 'eum',
                            2 => 'fugit',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [
                        'times' => 0,
                        'makeItemWasCreatedEvent' => [
                            'times' => 1,
                            'getItem' => [
                                'times' => 1,
                                'toArray' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'getId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 0,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
                                    ],
                                ],
                                'setId' => 0,
                                'getParentId' => [
                                    'times' => 2,
                                    'sameValueAs' => 0,
                                    'toNative' => 0,
                                    'inc' => [
                                        'times' => 0,
                                    ],
                                    'decr' => [
                                        'times' => 0,
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
                                    ],
                                    'decr' => [
                                        'times' => 0,
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
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'times' => 2,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                    'sameValueAs' => 0,
                                    'getDate' => [
                                        'times' => 0,
                                    ],
                                    'getTime' => [
                                        'times' => 0,
                                    ],
                                    'toNativeDateTime' => [
                                        'times' => 0,
                                    ],
                                ],
                                'serialize' => 0,
                            ],
                            'serialize' => 0,
                            'getUuid' => [
                                'times' => 1,
                                'toNative' => 2,
                                'getUuid' => [
                                    'times' => 0,
                                    'toString' => 0,
                                ],
                                'sameValueAs' => 0,
                                'isEmpty' => 0,
                            ],
                            'getProcessUuid' => [
                                'times' => 1,
                                'toNative' => 0,
                                'getUuid' => [
                                    'times' => 0,
                                    'toString' => 0,
                                ],
                                'sameValueAs' => 0,
                                'isEmpty' => 0,
                            ],
                        ],
                        'makeItemWasDeletedEvent' => [
                            'times' => 1,
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity.
     *
     * @return mixed[]
     */
    public function getDataForCreateActualMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventFactory' => [],
                    'createActual' => null,
                    'Uuid' => [
                        'toNative' => '64e82308-ec9f-325c-abca-836173de7952',
                        'getUuid' => [
                            'toString' => '60175e73-e985-33ef-aff1-17055c9e43b9',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
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
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Lysanne Deckow',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 2,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://damore.com/eveniet-ut-assumenda-eveniet-corporis-sapiente-officiis-dolore',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '06:58:27',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:48:52',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '01:34:31',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '12:25:58',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '12:45:03',
                            ],
                        ],
                        'serialize' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [],
                    'createActual' => 0,
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

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity.
     *
     * @return mixed[]
     */
    public function getDataForAssembleFromValueObjectMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventFactory' => [],
                    'Item' => [
                        'toArray' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
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
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Lysanne Deckow',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 2,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://damore.com/eveniet-ut-assumenda-eveniet-corporis-sapiente-officiis-dolore',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '06:58:27',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:48:52',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '01:34:31',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '12:25:58',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '12:45:03',
                            ],
                        ],
                        'serialize' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [],
                    'Item' => [
                        'times' => 0,
                        'toArray' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 0,
                        'getId' => [
                            'times' => 2,
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
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 2,
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
                        'getName' => [
                            'times' => 2,
                            'toNative' => 1,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getStatus' => [
                            'times' => 2,
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
                        'getUrl' => [
                            'times' => 2,
                            'toNative' => 1,
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity.
     *
     * @return mixed[]
     */
    public function getDataForAssembleToValueObjectMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventFactory' => [],
                    'createActual' => null,
                    'Uuid' => [
                        'toNative' => '64e82308-ec9f-325c-abca-836173de7952',
                        'getUuid' => [
                            'toString' => '60175e73-e985-33ef-aff1-17055c9e43b9',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
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
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Lysanne Deckow',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://damore.com/eveniet-ut-assumenda-eveniet-corporis-sapiente-officiis-dolore',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:48:52',
                                'format' => '06:58:27',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'format' => '06:58:27',
                                'getTimestamp' => '02:48:52',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '01:34:31',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '12:25:58',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '12:45:03',
                            ],
                        ],
                        'serialize' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [],
                    'createActual' => 0,
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
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 2,
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
                        'getName' => [
                            'times' => 2,
                            'toNative' => 1,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getStatus' => [
                            'times' => 2,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 2,
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
                            'toNative' => 1,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getCreatedAt' => [
                            'times' => 2,
                            'toNative' => [
                                'times' => 1,
                                'getTimestamp' => 0,
                                'format' => 1,
                            ],
                        ],
                        'getUpdatedAt' => [
                            'times' => 2,
                            'toNative' => [
                                'times' => 1,
                                'getTimestamp' => 0,
                                'format' => 1,
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity.
     *
     * @return mixed[]
     */
    public function getDataForNormalizeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventFactory' => [],
                    'createActual' => null,
                    'Uuid' => [
                        'toNative' => '64e82308-ec9f-325c-abca-836173de7952',
                        'getUuid' => [
                            'toString' => '60175e73-e985-33ef-aff1-17055c9e43b9',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
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
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Lysanne Deckow',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://damore.com/eveniet-ut-assumenda-eveniet-corporis-sapiente-officiis-dolore',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:48:52',
                                'format' => '06:58:27',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'format' => '06:58:27',
                                'getTimestamp' => '02:48:52',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '01:34:31',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '12:25:58',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '12:45:03',
                            ],
                        ],
                        'serialize' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [],
                    'createActual' => 0,
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
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 2,
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
                        'getName' => [
                            'times' => 2,
                            'toNative' => 1,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getStatus' => [
                            'times' => 2,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 2,
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
                            'toNative' => 1,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getCreatedAt' => [
                            'times' => 2,
                            'toNative' => [
                                'times' => 1,
                                'getTimestamp' => 0,
                                'format' => 1,
                            ],
                        ],
                        'getUpdatedAt' => [
                            'times' => 2,
                            'toNative' => [
                                'times' => 1,
                                'getTimestamp' => 0,
                                'format' => 1,
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity.
     *
     * @return mixed[]
     */
    public function getDataForGetPrimaryKeyValueMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventFactory' => [],
                    'createActual' => null,
                    'Uuid' => [
                        'toNative' => '64e82308-ec9f-325c-abca-836173de7952',
                        'getUuid' => [
                            'toString' => '60175e73-e985-33ef-aff1-17055c9e43b9',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
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
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Lysanne Deckow',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://damore.com/eveniet-ut-assumenda-eveniet-corporis-sapiente-officiis-dolore',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:48:52',
                                'format' => '06:58:27',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'format' => '06:58:27',
                                'getTimestamp' => '02:48:52',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '01:34:31',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '12:25:58',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '12:45:03',
                            ],
                        ],
                        'serialize' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [],
                    'createActual' => 0,
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
                                'format' => 0,
                            ],
                        ],
                        'getUpdatedAt' => [
                            'times' => 2,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                                'format' => 0,
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity.
     *
     * @return mixed[]
     */
    public function getDataForGetAggregateRootIdMethod(): array
    {
        return [
            0 => [
                0 => [
                    'EventFactory' => [],
                    'createActual' => null,
                    'Uuid' => [
                        'toNative' => '64e82308-ec9f-325c-abca-836173de7952',
                        'getUuid' => [
                            'toString' => '60175e73-e985-33ef-aff1-17055c9e43b9',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
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
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Lysanne Deckow',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://damore.com/eveniet-ut-assumenda-eveniet-corporis-sapiente-officiis-dolore',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:48:52',
                                'format' => '06:58:27',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'format' => '06:58:27',
                                'getTimestamp' => '02:48:52',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '01:34:31',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '12:25:58',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '12:45:03',
                            ],
                        ],
                        'serialize' => [
                            0 => 'perferendis',
                            1 => 'consequatur',
                            2 => 'odit',
                        ],
                    ],
                ],
                1 => [
                    'EventFactory' => [],
                    'createActual' => 0,
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
                                'format' => 0,
                            ],
                        ],
                        'getUpdatedAt' => [
                            'times' => 2,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                                'format' => 0,
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
