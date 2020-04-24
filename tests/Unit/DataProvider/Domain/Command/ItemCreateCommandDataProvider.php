<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command;

/**
 * DataProvider for class {testClassName}.
 */
class ItemCreateCommandDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand.
     *
     * @return mixed[]
     */
    public function getDataForGetItemUuidMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'e7305eeb-32be-33af-a92d-119292c06f11',
                        'getUuid' => [
                            'toString' => '37161dd1-d345-340f-8cf7-bbeb8a913c2c',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => 'fed895d6-b606-3127-a6bc-0f50b72e66d2',
                        'getUuid' => [
                            'toString' => '5f5b6c4b-1427-3134-8ecd-8c79d6cba809',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'nulla',
                            1 => 'similique',
                            2 => 'possimus',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'nulla',
                            1 => 'similique',
                            2 => 'possimus',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 9,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Demond Hills',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Joelle Altenwerth',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'https://dubuque.com/optio-a-autem-optio-doloremque-id-qui-et-qui.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'https://bahringer.com/doloribus-et-soluta-exercitationem-aut-aliquam-quam-at.html',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '22:34:25',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '12:04:45',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '16:33:11',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '03:52:05',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '02:19:13',
                            ],
                        ],
                        'setUpdatedAt' => '2016-07-18',
                        'serialize' => [
                            0 => 'nulla',
                            1 => 'similique',
                            2 => 'possimus',
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
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
                        ],
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setParentId' => 0,
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setName' => 0,
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setStatus' => 0,
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setUrl' => 0,
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'setCreatedAt' => 0,
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
                        'setUpdatedAt' => 0,
                        'serialize' => 0,
                    ],
                ],
            ],
            1 => [
                0 => [
                    'UUID' => [
                        'toNative' => '519fbbaf-9e16-38d3-802b-7f440f1ed3fd',
                        'getUuid' => [
                            'toString' => '47082558-7baa-3c6b-8e81-0368cba17ecf',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '9c47ec66-11b8-3e64-956d-8ae30960e50c',
                        'getUuid' => [
                            'toString' => '2b554cd2-346e-370a-9b5d-e5f1ffe21704',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'enim',
                            1 => 'amet',
                            2 => 'ut',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'enim',
                            1 => 'amet',
                            2 => 'ut',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 8,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 6,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Johnny Moen',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Mrs. Thora Breitenberg',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://stoltenberg.com/quam-omnis-atque-doloribus-dolor-repellendus-non.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.haley.net/adipisci-doloremque-corporis-est-a-est-ut-aperiam-nihil',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '09:27:02',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '12:41:58',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '18:55:20',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '16:16:11',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '00:16:55',
                            ],
                        ],
                        'setUpdatedAt' => '1992-08-19',
                        'serialize' => [
                            0 => 'enim',
                            1 => 'amet',
                            2 => 'ut',
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
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
                        ],
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setParentId' => 0,
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setName' => 0,
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setStatus' => 0,
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setUrl' => 0,
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'setCreatedAt' => 0,
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
                        'setUpdatedAt' => 0,
                        'serialize' => 0,
                    ],
                ],
            ],
            2 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'c5f830bb-5aef-353f-8012-ac1edab3db55',
                        'getUuid' => [
                            'toString' => '58c656df-5b74-3fea-91e8-371182f2efc9',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '43abeeea-7bc5-3760-a300-d5934c27453c',
                        'getUuid' => [
                            'toString' => '5b71e162-8c23-36fa-8aae-ad4257837108',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'voluptas',
                            1 => 'sit',
                            2 => 'expedita',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'voluptas',
                            1 => 'sit',
                            2 => 'expedita',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 6,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Nya Ruecker',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Maida Eichmann Sr.',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'https://jaskolski.org/sit-exercitationem-cupiditate-voluptas-vel-sequi-quam-est.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.stroman.info/perspiciatis-reiciendis-ab-rerum-eos',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '10:27:51',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '03:42:07',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '18:48:37',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '01:49:39',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '19:12:57',
                            ],
                        ],
                        'setUpdatedAt' => '1992-12-22',
                        'serialize' => [
                            0 => 'voluptas',
                            1 => 'sit',
                            2 => 'expedita',
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
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
                        ],
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setParentId' => 0,
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setName' => 0,
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setStatus' => 0,
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setUrl' => 0,
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'setCreatedAt' => 0,
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
                        'setUpdatedAt' => 0,
                        'serialize' => 0,
                    ],
                ],
            ],
            3 => [
                0 => [
                    'UUID' => [
                        'toNative' => '0d4b56a0-aebe-3a23-923e-db270ca21c1d',
                        'getUuid' => [
                            'toString' => '3dae82db-1fcc-3809-8de5-3eaf5547fb81',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '9a4a38af-c8c5-3bd1-8e80-fe96614b7803',
                        'getUuid' => [
                            'toString' => 'd4d91662-7cf5-3177-8a2d-07173559e572',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'commodi',
                            1 => 'explicabo',
                            2 => 'ratione',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'commodi',
                            1 => 'explicabo',
                            2 => 'ratione',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 7,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 4,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Elisa Wehner',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Hester Beier',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://dach.com/',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://oberbrunner.com/est-quod-ea-quia-aut',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '20:15:41',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '23:38:58',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '14:46:49',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '21:54:07',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '01:49:07',
                            ],
                        ],
                        'setUpdatedAt' => '1988-07-01',
                        'serialize' => [
                            0 => 'commodi',
                            1 => 'explicabo',
                            2 => 'ratione',
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
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
                        ],
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setParentId' => 0,
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setName' => 0,
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setStatus' => 0,
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setUrl' => 0,
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'setCreatedAt' => 0,
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
                        'setUpdatedAt' => 0,
                        'serialize' => 0,
                    ],
                ],
            ],
            4 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'f2f9a930-e85b-3fb1-aff5-028c8d3e18e2',
                        'getUuid' => [
                            'toString' => '76705cb9-4708-31f6-aa97-573397728b3b',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '06353a42-71b8-3c4b-b83c-ec4e83c89c27',
                        'getUuid' => [
                            'toString' => '1937908c-e636-32f8-ba07-242f42045524',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'sunt',
                            1 => 'a',
                            2 => 'in',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'sunt',
                            1 => 'a',
                            2 => 'in',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 4,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Moriah Gottlieb',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Sandy Stracke IV',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 8,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://wolff.org/',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setUrl' => 'https://www.legros.com/aliquid-qui-quos-eos-quod-pariatur-reiciendis-quas',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '11:46:30',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '03:54:22',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '18:00:40',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '19:14:17',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '14:41:59',
                            ],
                        ],
                        'setUpdatedAt' => '2010-06-30',
                        'serialize' => [
                            0 => 'sunt',
                            1 => 'a',
                            2 => 'in',
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
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
                        ],
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setParentId' => 0,
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setName' => 0,
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setStatus' => 0,
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setUrl' => 0,
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'setCreatedAt' => 0,
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
                        'setUpdatedAt' => 0,
                        'serialize' => 0,
                    ],
                ],
            ],
        ];
    }
}
