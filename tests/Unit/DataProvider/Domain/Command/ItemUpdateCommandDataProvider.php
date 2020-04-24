<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command;

/**
 * DataProvider for class {testClassName}.
 */
class ItemUpdateCommandDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateCommand.
     *
     * @return mixed[]
     */
    public function getDataForGetItemUuidMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'f37fa9f9-ce80-38cd-8e64-ee89c5651a2c',
                        'getUuid' => [
                            'toString' => 'ff629239-1411-3cc2-8cef-3a2ef57887b5',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '48c232f0-db15-3d76-a22c-cd1eeeb21ba5',
                        'getUuid' => [
                            'toString' => '09baa340-6f64-37c9-bf12-4eb0cd3d0c16',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 3,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 8,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Miss Nelda Kessler I',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Prof. Brant Doyle',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://olson.net/',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setUrl' => 'https://mitchell.org/sunt-repellat-et-voluptatem-sit-voluptas-odit-sit.html',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '16:05:01',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:34:52',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '03:05:13',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '03:02:19',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '06:35:50',
                            ],
                        ],
                        'setUpdatedAt' => '2011-10-31',
                        'serialize' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
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
                        'toNative' => 'ee2f404f-dd3d-3d26-af74-914f0f8907f7',
                        'getUuid' => [
                            'toString' => '4245c19b-d7e9-37d5-9c5b-824fd5f2fd93',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => 'bfaec223-d21e-3c1e-b758-df3d937afd7f',
                        'getUuid' => [
                            'toString' => '30d69cb5-fb4c-306a-84d8-1c4c79d64315',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Trenton Mertz',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Shakira Hudson',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 9,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://gorczany.com/voluptatem-esse-consectetur-amet-odit-culpa-perferendis-incidunt-ipsam',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.hegmann.com/',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '04:57:19',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '13:39:54',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '05:37:46',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '22:21:40',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '01:16:30',
                            ],
                        ],
                        'setUpdatedAt' => '2010-02-23',
                        'serialize' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
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
                        'toNative' => '7a49f62b-18ee-3ff7-8d1a-7d4b7359d041',
                        'getUuid' => [
                            'toString' => 'e6c0cb5c-f366-351f-8b3c-63c86b4cd95c',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '71d671eb-a4d2-302c-8f9c-3e2997f3cea1',
                        'getUuid' => [
                            'toString' => '0f2db5d3-f90f-36b1-9c29-cbdb82608cce',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 3,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Yvette Green',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Taya Padberg',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 8,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://www.mcdermott.com/dignissimos-doloremque-consequuntur-odit-earum-ut-ut.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'https://www.price.com/consequatur-architecto-sed-nihil-est-sint',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '21:32:23',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:58:08',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '03:56:37',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '06:47:45',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '01:07:13',
                            ],
                        ],
                        'setUpdatedAt' => '2019-05-09',
                        'serialize' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
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
                        'toNative' => '8f1c3ff6-a0fd-3275-9f85-c2b735242a1e',
                        'getUuid' => [
                            'toString' => 'a7803c71-7f82-3985-890c-091d419fd0a1',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '24aabcac-5894-359c-9053-650e0be15b9e',
                        'getUuid' => [
                            'toString' => 'fc2121dc-8dd8-3a8e-a8f2-f080ca556dcd',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 6,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Princess Prohaska',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Jonatan Harvey PhD',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://kilback.com/possimus-ipsam-vitae-facere.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.predovic.com/',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '12:44:50',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '05:19:54',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '00:59:58',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '02:31:34',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '20:14:07',
                            ],
                        ],
                        'setUpdatedAt' => '1989-07-02',
                        'serialize' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
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
                        'toNative' => 'd0136ae4-b874-3fe0-b432-198a62e0c64f',
                        'getUuid' => [
                            'toString' => '16d7b27c-a7c9-3d14-8085-3366147c8259',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '2c72b29a-9777-3133-aa99-2ceb26ac1ced',
                        'getUuid' => [
                            'toString' => '2ca9ba2d-ab4f-3833-9a03-2ded8a3c60ac',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Lula O\'Hara',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Reggie Price',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://www.armstrong.org/eos-asperiores-aut-eveniet',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'https://lebsack.net/qui-debitis-officiis-id.html',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '16:50:33',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '20:28:23',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '04:56:44',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '20:05:46',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '05:26:54',
                            ],
                        ],
                        'setUpdatedAt' => '1973-07-13',
                        'serialize' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
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

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateCommand.
     *
     * @return mixed[]
     */
    public function getDataForGetItemMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'f37fa9f9-ce80-38cd-8e64-ee89c5651a2c',
                        'getUuid' => [
                            'toString' => 'ff629239-1411-3cc2-8cef-3a2ef57887b5',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '48c232f0-db15-3d76-a22c-cd1eeeb21ba5',
                        'getUuid' => [
                            'toString' => '09baa340-6f64-37c9-bf12-4eb0cd3d0c16',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 3,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 8,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Miss Nelda Kessler I',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Prof. Brant Doyle',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://olson.net/',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setUrl' => 'https://mitchell.org/sunt-repellat-et-voluptatem-sit-voluptas-odit-sit.html',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '16:05:01',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:34:52',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '03:05:13',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '03:02:19',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '06:35:50',
                            ],
                        ],
                        'setUpdatedAt' => '2011-10-31',
                        'serialize' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
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
                        'toNative' => 'ee2f404f-dd3d-3d26-af74-914f0f8907f7',
                        'getUuid' => [
                            'toString' => '4245c19b-d7e9-37d5-9c5b-824fd5f2fd93',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => 'bfaec223-d21e-3c1e-b758-df3d937afd7f',
                        'getUuid' => [
                            'toString' => '30d69cb5-fb4c-306a-84d8-1c4c79d64315',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Trenton Mertz',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Shakira Hudson',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 9,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://gorczany.com/voluptatem-esse-consectetur-amet-odit-culpa-perferendis-incidunt-ipsam',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.hegmann.com/',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '04:57:19',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '13:39:54',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '05:37:46',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '22:21:40',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '01:16:30',
                            ],
                        ],
                        'setUpdatedAt' => '2010-02-23',
                        'serialize' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
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
                        'toNative' => '7a49f62b-18ee-3ff7-8d1a-7d4b7359d041',
                        'getUuid' => [
                            'toString' => 'e6c0cb5c-f366-351f-8b3c-63c86b4cd95c',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '71d671eb-a4d2-302c-8f9c-3e2997f3cea1',
                        'getUuid' => [
                            'toString' => '0f2db5d3-f90f-36b1-9c29-cbdb82608cce',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 3,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Yvette Green',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Taya Padberg',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 8,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://www.mcdermott.com/dignissimos-doloremque-consequuntur-odit-earum-ut-ut.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'https://www.price.com/consequatur-architecto-sed-nihil-est-sint',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '21:32:23',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:58:08',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '03:56:37',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '06:47:45',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '01:07:13',
                            ],
                        ],
                        'setUpdatedAt' => '2019-05-09',
                        'serialize' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
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
                        'toNative' => '8f1c3ff6-a0fd-3275-9f85-c2b735242a1e',
                        'getUuid' => [
                            'toString' => 'a7803c71-7f82-3985-890c-091d419fd0a1',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '24aabcac-5894-359c-9053-650e0be15b9e',
                        'getUuid' => [
                            'toString' => 'fc2121dc-8dd8-3a8e-a8f2-f080ca556dcd',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 6,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Princess Prohaska',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Jonatan Harvey PhD',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://kilback.com/possimus-ipsam-vitae-facere.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.predovic.com/',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '12:44:50',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '05:19:54',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '00:59:58',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '02:31:34',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '20:14:07',
                            ],
                        ],
                        'setUpdatedAt' => '1989-07-02',
                        'serialize' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
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
                        'toNative' => 'd0136ae4-b874-3fe0-b432-198a62e0c64f',
                        'getUuid' => [
                            'toString' => '16d7b27c-a7c9-3d14-8085-3366147c8259',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '2c72b29a-9777-3133-aa99-2ceb26ac1ced',
                        'getUuid' => [
                            'toString' => '2ca9ba2d-ab4f-3833-9a03-2ded8a3c60ac',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Lula O\'Hara',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Reggie Price',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://www.armstrong.org/eos-asperiores-aut-eveniet',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'https://lebsack.net/qui-debitis-officiis-id.html',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '16:50:33',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '20:28:23',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '04:56:44',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '20:05:46',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '05:26:54',
                            ],
                        ],
                        'setUpdatedAt' => '1973-07-13',
                        'serialize' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
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

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateCommand.
     *
     * @return mixed[]
     */
    public function getDataForGetProcessUuidMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'f37fa9f9-ce80-38cd-8e64-ee89c5651a2c',
                        'getUuid' => [
                            'toString' => 'ff629239-1411-3cc2-8cef-3a2ef57887b5',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '48c232f0-db15-3d76-a22c-cd1eeeb21ba5',
                        'getUuid' => [
                            'toString' => '09baa340-6f64-37c9-bf12-4eb0cd3d0c16',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 3,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 8,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Miss Nelda Kessler I',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Prof. Brant Doyle',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://olson.net/',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setUrl' => 'https://mitchell.org/sunt-repellat-et-voluptatem-sit-voluptas-odit-sit.html',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '16:05:01',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:34:52',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '03:05:13',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '03:02:19',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '06:35:50',
                            ],
                        ],
                        'setUpdatedAt' => '2011-10-31',
                        'serialize' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
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
                        'toNative' => 'ee2f404f-dd3d-3d26-af74-914f0f8907f7',
                        'getUuid' => [
                            'toString' => '4245c19b-d7e9-37d5-9c5b-824fd5f2fd93',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => 'bfaec223-d21e-3c1e-b758-df3d937afd7f',
                        'getUuid' => [
                            'toString' => '30d69cb5-fb4c-306a-84d8-1c4c79d64315',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Trenton Mertz',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Shakira Hudson',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 9,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://gorczany.com/voluptatem-esse-consectetur-amet-odit-culpa-perferendis-incidunt-ipsam',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.hegmann.com/',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '04:57:19',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '13:39:54',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '05:37:46',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '22:21:40',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '01:16:30',
                            ],
                        ],
                        'setUpdatedAt' => '2010-02-23',
                        'serialize' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
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
                        'toNative' => '7a49f62b-18ee-3ff7-8d1a-7d4b7359d041',
                        'getUuid' => [
                            'toString' => 'e6c0cb5c-f366-351f-8b3c-63c86b4cd95c',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '71d671eb-a4d2-302c-8f9c-3e2997f3cea1',
                        'getUuid' => [
                            'toString' => '0f2db5d3-f90f-36b1-9c29-cbdb82608cce',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 3,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Yvette Green',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Taya Padberg',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 8,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://www.mcdermott.com/dignissimos-doloremque-consequuntur-odit-earum-ut-ut.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'https://www.price.com/consequatur-architecto-sed-nihil-est-sint',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '21:32:23',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:58:08',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '03:56:37',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '06:47:45',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '01:07:13',
                            ],
                        ],
                        'setUpdatedAt' => '2019-05-09',
                        'serialize' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
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
                        'toNative' => '8f1c3ff6-a0fd-3275-9f85-c2b735242a1e',
                        'getUuid' => [
                            'toString' => 'a7803c71-7f82-3985-890c-091d419fd0a1',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '24aabcac-5894-359c-9053-650e0be15b9e',
                        'getUuid' => [
                            'toString' => 'fc2121dc-8dd8-3a8e-a8f2-f080ca556dcd',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 6,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Princess Prohaska',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Jonatan Harvey PhD',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://kilback.com/possimus-ipsam-vitae-facere.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.predovic.com/',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '12:44:50',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '05:19:54',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '00:59:58',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '02:31:34',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '20:14:07',
                            ],
                        ],
                        'setUpdatedAt' => '1989-07-02',
                        'serialize' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
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
                        'toNative' => 'd0136ae4-b874-3fe0-b432-198a62e0c64f',
                        'getUuid' => [
                            'toString' => '16d7b27c-a7c9-3d14-8085-3366147c8259',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '2c72b29a-9777-3133-aa99-2ceb26ac1ced',
                        'getUuid' => [
                            'toString' => '2ca9ba2d-ab4f-3833-9a03-2ded8a3c60ac',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Lula O\'Hara',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Reggie Price',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://www.armstrong.org/eos-asperiores-aut-eveniet',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'https://lebsack.net/qui-debitis-officiis-id.html',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '16:50:33',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '20:28:23',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '04:56:44',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '20:05:46',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '05:26:54',
                            ],
                        ],
                        'setUpdatedAt' => '1973-07-13',
                        'serialize' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
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

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateCommand.
     *
     * @return mixed[]
     */
    public function getDataForGetUuidMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'f37fa9f9-ce80-38cd-8e64-ee89c5651a2c',
                        'getUuid' => [
                            'toString' => 'ff629239-1411-3cc2-8cef-3a2ef57887b5',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '48c232f0-db15-3d76-a22c-cd1eeeb21ba5',
                        'getUuid' => [
                            'toString' => '09baa340-6f64-37c9-bf12-4eb0cd3d0c16',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 3,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 8,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Miss Nelda Kessler I',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Prof. Brant Doyle',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://olson.net/',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setUrl' => 'https://mitchell.org/sunt-repellat-et-voluptatem-sit-voluptas-odit-sit.html',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '16:05:01',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:34:52',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '03:05:13',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '03:02:19',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '06:35:50',
                            ],
                        ],
                        'setUpdatedAt' => '2011-10-31',
                        'serialize' => [
                            0 => 'ducimus',
                            1 => 'officiis',
                            2 => 'omnis',
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
                        'toNative' => 'ee2f404f-dd3d-3d26-af74-914f0f8907f7',
                        'getUuid' => [
                            'toString' => '4245c19b-d7e9-37d5-9c5b-824fd5f2fd93',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => 'bfaec223-d21e-3c1e-b758-df3d937afd7f',
                        'getUuid' => [
                            'toString' => '30d69cb5-fb4c-306a-84d8-1c4c79d64315',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Trenton Mertz',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Shakira Hudson',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 9,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://gorczany.com/voluptatem-esse-consectetur-amet-odit-culpa-perferendis-incidunt-ipsam',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.hegmann.com/',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '04:57:19',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '13:39:54',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '05:37:46',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '22:21:40',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '01:16:30',
                            ],
                        ],
                        'setUpdatedAt' => '2010-02-23',
                        'serialize' => [
                            0 => 'necessitatibus',
                            1 => 'earum',
                            2 => 'perferendis',
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
                        'toNative' => '7a49f62b-18ee-3ff7-8d1a-7d4b7359d041',
                        'getUuid' => [
                            'toString' => 'e6c0cb5c-f366-351f-8b3c-63c86b4cd95c',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '71d671eb-a4d2-302c-8f9c-3e2997f3cea1',
                        'getUuid' => [
                            'toString' => '0f2db5d3-f90f-36b1-9c29-cbdb82608cce',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 3,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Yvette Green',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Taya Padberg',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 8,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://www.mcdermott.com/dignissimos-doloremque-consequuntur-odit-earum-ut-ut.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'https://www.price.com/consequatur-architecto-sed-nihil-est-sint',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '21:32:23',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:58:08',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '03:56:37',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '06:47:45',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '01:07:13',
                            ],
                        ],
                        'setUpdatedAt' => '2019-05-09',
                        'serialize' => [
                            0 => 'labore',
                            1 => 'a',
                            2 => 'ea',
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
                        'toNative' => '8f1c3ff6-a0fd-3275-9f85-c2b735242a1e',
                        'getUuid' => [
                            'toString' => 'a7803c71-7f82-3985-890c-091d419fd0a1',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '24aabcac-5894-359c-9053-650e0be15b9e',
                        'getUuid' => [
                            'toString' => 'fc2121dc-8dd8-3a8e-a8f2-f080ca556dcd',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 6,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Princess Prohaska',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Jonatan Harvey PhD',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://kilback.com/possimus-ipsam-vitae-facere.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.predovic.com/',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '12:44:50',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '05:19:54',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '00:59:58',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '02:31:34',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '20:14:07',
                            ],
                        ],
                        'setUpdatedAt' => '1989-07-02',
                        'serialize' => [
                            0 => 'quia',
                            1 => 'consequatur',
                            2 => 'officia',
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
                        'toNative' => 'd0136ae4-b874-3fe0-b432-198a62e0c64f',
                        'getUuid' => [
                            'toString' => '16d7b27c-a7c9-3d14-8085-3366147c8259',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Uuid' => [
                        'toNative' => '2c72b29a-9777-3133-aa99-2ceb26ac1ced',
                        'getUuid' => [
                            'toString' => '2ca9ba2d-ab4f-3833-9a03-2ded8a3c60ac',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Lula O\'Hara',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Reggie Price',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 7,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://www.armstrong.org/eos-asperiores-aut-eveniet',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'https://lebsack.net/qui-debitis-officiis-id.html',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '16:50:33',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '20:28:23',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '04:56:44',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '20:05:46',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '05:26:54',
                            ],
                        ],
                        'setUpdatedAt' => '1973-07-13',
                        'serialize' => [
                            0 => 'adipisci',
                            1 => 'vel',
                            2 => 'maxime',
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
