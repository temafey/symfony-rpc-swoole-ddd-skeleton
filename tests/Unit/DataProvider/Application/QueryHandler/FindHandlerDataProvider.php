<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\QueryHandler;

/**
 * DataProvider for class {testClassName}.
 */
class FindHandlerDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Query\FindHandler.
     *
     * @return mixed[]
     */
    public function getDataForHandleMethod(): array
    {
        return [
            0 => [
                0 => [
                    'QueryRepositoryInterface' => [
                        'findByUuid' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'dfa5e9e9-4b3f-3b08-bd10-fc642fadf247',
                                'getUuid' => [
                                    'toString' => '01d55b0a-0fc7-369c-b626-870468141f62',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 3,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getName' => [
                                'toNative' => 'Meredith Parker',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 5,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://www.luettgen.com/animi-aut-illum-repudiandae-quis-deserunt',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '20:59:23',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '23:45:56',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '06:13:31',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '01:22:23',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '11:01:33',
                                ],
                            ],
                            'initializeState' => 'Iowa',
                            'getPlayhead' => 6,
                        ],
                        'findByCriteria' => [
                            0 => [
                                'addId' => null,
                                'delete' => null,
                                'getUuid' => [
                                    'toNative' => 'c9ca7057-1ce5-3c81-9fe4-4f73e05c1b17',
                                    'getUuid' => [
                                        'toString' => '2467aadf-9b1b-3885-ade4-7e74ae8f98f3',
                                    ],
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getId' => [
                                    'sameValueAs' => true,
                                    'toNative' => 7,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getParentId' => [
                                    'sameValueAs' => true,
                                    'toNative' => 3,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getName' => [
                                    'toNative' => 'Ms. Syble Sanford DVM',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getStatus' => [
                                    'isActive' => false,
                                    'sameValueAs' => false,
                                    'toNative' => 2,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getUrl' => [
                                    'toNative' => 'http://waelchi.com/assumenda-adipisci-vitae-ut-suscipit-fugiat',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '22:03:56',
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '09:36:38',
                                    ],
                                    'sameValueAs' => false,
                                    'getDate' => [
                                        'toNative' => [
                                            'getTimestamp' => '15:28:52',
                                        ],
                                    ],
                                    'getTime' => [
                                        'toNative' => [
                                            'getTimestamp' => '01:20:45',
                                        ],
                                    ],
                                    'toNativeDateTime' => [
                                        'getTimestamp' => '18:58:30',
                                    ],
                                ],
                                'initializeState' => 'Michigan',
                                'getPlayhead' => 5,
                            ],
                        ],
                    ],
                    'ItemAssembler' => [
                        'writeDto' => [
                            'normalize' => [
                                0 => 'incidunt',
                                1 => 'inventore',
                                2 => 'id',
                            ],
                            'getUuid' => '7a8632b9-2085-3670-94c2-c9b1eb7f4e81',
                            'setUuid' => '4a466242-2ab4-36ec-8541-d8ddbbbe96d8',
                            'getVersion' => 'ducimus',
                            'getName' => 'Kariane Parisian',
                            'setName' => 'Prof. Salvador Gusikowski V',
                            'getParentId' => 2,
                            'setParentId' => null,
                            'getUrl' => 'http://rempel.net/ut-quia-non-sunt-autem-dolorum',
                            'setUrl' => 'http://prosacco.com/dicta-adipisci-ea-quisquam-adipisci',
                            'getStatus' => 2,
                            'setStatus' => null,
                            'getCreatedAt' => 'ducimus',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '2015-05-20',
                            'setUpdatedAt' => '1979-12-20',
                        ],
                    ],
                    'handle' => [
                        0 => [
                            'normalize' => [
                                0 => 'incidunt',
                                1 => 'inventore',
                                2 => 'id',
                            ],
                            'getUuid' => '7a8632b9-2085-3670-94c2-c9b1eb7f4e81',
                            'setUuid' => '4a466242-2ab4-36ec-8541-d8ddbbbe96d8',
                            'getVersion' => 'ducimus',
                            'getName' => 'Kariane Parisian',
                            'setName' => 'Prof. Salvador Gusikowski V',
                            'getParentId' => 2,
                            'setParentId' => null,
                            'getUrl' => 'http://rempel.net/ut-quia-non-sunt-autem-dolorum',
                            'setUrl' => 'http://prosacco.com/dicta-adipisci-ea-quisquam-adipisci',
                            'getStatus' => 2,
                            'setStatus' => null,
                            'getCreatedAt' => 'ducimus',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '2015-05-20',
                            'setUpdatedAt' => '1979-12-20',
                        ],
                    ],
                    'FindCommand' => [
                        'getFindCriteria' => [
                            'sameValueAs' => false,
                            'count' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'contains' => false,
                            'toNative' => [
                                0 => 'libero',
                                1 => 'id',
                                2 => 'enim',
                            ],
                            'toArray' => [
                                0 => 'libero',
                                1 => 'id',
                                2 => 'enim',
                            ],
                        ],
                        'getUuid' => [
                            'toString' => '5f45ccc9-14d6-38f0-8e84-e0edcbc0632c',
                        ],
                    ],
                ],
                1 => [
                    'QueryRepositoryInterface' => [
                        'times' => 0,
                        'findByUuid' => [
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
                                'inc' => 0,
                                'decr' => 0,
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'inc' => 0,
                                'decr' => 0,
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
                                'inc' => 0,
                                'decr' => 0,
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
                        'findByCriteria' => [
                            'times' => 1,
                            'mockTimes' => [
                                0 => [
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
                                        'inc' => 0,
                                        'decr' => 0,
                                    ],
                                    'getParentId' => [
                                        'times' => 0,
                                        'sameValueAs' => 0,
                                        'toNative' => 0,
                                        'inc' => 0,
                                        'decr' => 0,
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
                                        'inc' => 0,
                                        'decr' => 0,
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
                    ],
                    'ItemAssembler' => [
                        'times' => 0,
                        'writeDto' => [
                            'times' => 1,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                        ],
                    ],
                    'handle' => [
                        0 => [
                            'times' => 0,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                            'className' => 'Backend\\\Api\\RpcSkeleton\\Domain\\Dto\\ItemDto',
                        ],
                    ],
                    'FindCommand' => [
                        'times' => 0,
                        'getFindCriteria' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'count' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'inc' => 0,
                                'decr' => 0,
                            ],
                            'contains' => 0,
                            'toNative' => 0,
                            'toArray' => 0,
                        ],
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            1 => [
                0 => [
                    'QueryRepositoryInterface' => [
                        'findByUuid' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'c4806bc5-c89c-332b-bebc-8ca39f30c619',
                                'getUuid' => [
                                    'toString' => '4cd0d97f-7626-3038-9c97-f39edba87d2c',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getName' => [
                                'toNative' => 'Dr. Hilbert Kuvalis DVM',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 2,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://wilderman.org/non-et-nihil-facilis-aliquid-assumenda-nisi-molestiae',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '17:11:11',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '21:18:52',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '09:51:36',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '11:28:33',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '04:06:17',
                                ],
                            ],
                            'initializeState' => 'Utah',
                            'getPlayhead' => 2,
                        ],
                        'findByCriteria' => [
                            0 => [
                                'addId' => null,
                                'delete' => null,
                                'getUuid' => [
                                    'toNative' => '2e5d6b00-17d9-3fdb-9ef2-ff7f87818b81',
                                    'getUuid' => [
                                        'toString' => '6393446a-a21a-3cc0-8d93-ddd93fc641a6',
                                    ],
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 3,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getParentId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getName' => [
                                    'toNative' => 'Cleora Keebler',
                                    'sameValueAs' => false,
                                    'isEmpty' => false,
                                ],
                                'getStatus' => [
                                    'isActive' => true,
                                    'sameValueAs' => true,
                                    'toNative' => 6,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getUrl' => [
                                    'toNative' => 'http://www.von.info/fuga-recusandae-eos-qui-consequatur',
                                    'sameValueAs' => false,
                                    'isEmpty' => false,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '14:19:51',
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '12:52:22',
                                    ],
                                    'sameValueAs' => false,
                                    'getDate' => [
                                        'toNative' => [
                                            'getTimestamp' => '20:19:56',
                                        ],
                                    ],
                                    'getTime' => [
                                        'toNative' => [
                                            'getTimestamp' => '06:57:21',
                                        ],
                                    ],
                                    'toNativeDateTime' => [
                                        'getTimestamp' => '22:02:02',
                                    ],
                                ],
                                'initializeState' => 'South Dakota',
                                'getPlayhead' => 5,
                            ],
                        ],
                    ],
                    'ItemAssembler' => [
                        'writeDto' => [
                            'normalize' => [
                                0 => 'aut',
                                1 => 'modi',
                                2 => 'blanditiis',
                            ],
                            'getUuid' => '63a657b6-058a-3db6-96b7-d954a2aca074',
                            'setUuid' => '55f8126e-b104-3d32-9125-c6c37a04ddbb',
                            'getVersion' => 'veritatis',
                            'getName' => 'Heaven Schulist',
                            'setName' => 'Mertie Funk',
                            'getParentId' => 6,
                            'setParentId' => null,
                            'getUrl' => 'https://www.dicki.biz/error-odio-voluptatem-delectus-et-et',
                            'setUrl' => 'http://www.goodwin.com/doloremque-molestiae-perferendis-voluptatem-itaque-distinctio-ipsam.html',
                            'getStatus' => 6,
                            'setStatus' => null,
                            'getCreatedAt' => 'veritatis',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '2011-11-25',
                            'setUpdatedAt' => '1970-06-21',
                        ],
                    ],
                    'handle' => [
                        0 => [
                            'normalize' => [
                                0 => 'aut',
                                1 => 'modi',
                                2 => 'blanditiis',
                            ],
                            'getUuid' => '63a657b6-058a-3db6-96b7-d954a2aca074',
                            'setUuid' => '55f8126e-b104-3d32-9125-c6c37a04ddbb',
                            'getVersion' => 'veritatis',
                            'getName' => 'Heaven Schulist',
                            'setName' => 'Mertie Funk',
                            'getParentId' => 6,
                            'setParentId' => null,
                            'getUrl' => 'https://www.dicki.biz/error-odio-voluptatem-delectus-et-et',
                            'setUrl' => 'http://www.goodwin.com/doloremque-molestiae-perferendis-voluptatem-itaque-distinctio-ipsam.html',
                            'getStatus' => 6,
                            'setStatus' => null,
                            'getCreatedAt' => 'veritatis',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '2011-11-25',
                            'setUpdatedAt' => '1970-06-21',
                        ],
                    ],
                    'FindCommand' => [
                        'getFindCriteria' => [
                            'sameValueAs' => false,
                            'count' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'contains' => false,
                            'toNative' => [
                                0 => 'libero',
                                1 => 'officiis',
                                2 => 'quam',
                            ],
                            'toArray' => [
                                0 => 'libero',
                                1 => 'officiis',
                                2 => 'quam',
                            ],
                        ],
                        'getUuid' => [
                            'toString' => '0eac6961-d19d-3438-9ba2-38ea04eaa551',
                        ],
                    ],
                ],
                1 => [
                    'QueryRepositoryInterface' => [
                        'times' => 0,
                        'findByUuid' => [
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
                                'inc' => 0,
                                'decr' => 0,
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'inc' => 0,
                                'decr' => 0,
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
                                'inc' => 0,
                                'decr' => 0,
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
                        'findByCriteria' => [
                            'times' => 1,
                            'mockTimes' => [
                                0 => [
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
                                        'inc' => 0,
                                        'decr' => 0,
                                    ],
                                    'getParentId' => [
                                        'times' => 0,
                                        'sameValueAs' => 0,
                                        'toNative' => 0,
                                        'inc' => 0,
                                        'decr' => 0,
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
                                        'inc' => 0,
                                        'decr' => 0,
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
                    ],
                    'ItemAssembler' => [
                        'times' => 0,
                        'writeDto' => [
                            'times' => 1,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                        ],
                    ],
                    'handle' => [
                        0 => [
                            'times' => 0,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                            'className' => 'Backend\\\Api\\RpcSkeleton\\Domain\\Dto\\ItemDto',
                        ],
                    ],
                    'FindCommand' => [
                        'times' => 0,
                        'getFindCriteria' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'count' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'inc' => 0,
                                'decr' => 0,
                            ],
                            'contains' => 0,
                            'toNative' => 0,
                            'toArray' => 0,
                        ],
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            2 => [
                0 => [
                    'QueryRepositoryInterface' => [
                        'findByUuid' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => '93cb2d3f-a732-35f9-9cdf-3e41234ebbc2',
                                'getUuid' => [
                                    'toString' => 'b1930f02-4995-370d-81e1-ca9029f93a77',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getName' => [
                                'toNative' => 'Ms. Dovie Kuhlman I',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 9,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://www.pagac.biz/ad-itaque-tenetur-quibusdam-repellat-neque-qui-delectus-rerum',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '17:33:49',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '01:58:22',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '05:24:13',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '00:18:13',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '12:04:02',
                                ],
                            ],
                            'initializeState' => 'Ohio',
                            'getPlayhead' => 9,
                        ],
                        'findByCriteria' => [
                            0 => [
                                'addId' => null,
                                'delete' => null,
                                'getUuid' => [
                                    'toNative' => '7c443c5b-4170-3fac-b025-b4d31a7e9d4e',
                                    'getUuid' => [
                                        'toString' => 'cffd0c8b-0941-3cdd-be0e-cdf5ac813206',
                                    ],
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getId' => [
                                    'sameValueAs' => true,
                                    'toNative' => 1,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getParentId' => [
                                    'sameValueAs' => true,
                                    'toNative' => 4,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getName' => [
                                    'toNative' => 'Prof. Andy McCullough DVM',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getStatus' => [
                                    'isActive' => false,
                                    'sameValueAs' => false,
                                    'toNative' => 4,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getUrl' => [
                                    'toNative' => 'http://lehner.biz/',
                                    'sameValueAs' => false,
                                    'isEmpty' => false,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '15:24:51',
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '16:44:57',
                                    ],
                                    'sameValueAs' => false,
                                    'getDate' => [
                                        'toNative' => [
                                            'getTimestamp' => '20:15:54',
                                        ],
                                    ],
                                    'getTime' => [
                                        'toNative' => [
                                            'getTimestamp' => '13:18:02',
                                        ],
                                    ],
                                    'toNativeDateTime' => [
                                        'getTimestamp' => '21:58:13',
                                    ],
                                ],
                                'initializeState' => 'Minnesota',
                                'getPlayhead' => 2,
                            ],
                        ],
                    ],
                    'ItemAssembler' => [
                        'writeDto' => [
                            'normalize' => [
                                0 => 'consequatur',
                                1 => 'animi',
                                2 => 'neque',
                            ],
                            'getUuid' => '7906af00-f1b8-36eb-a547-3d807ac6ccee',
                            'setUuid' => '5b209dae-68a4-36c8-bb58-516b6eb8047c',
                            'getVersion' => 'illum',
                            'getName' => 'Arno Stamm',
                            'setName' => 'Jarrod Schmeler',
                            'getParentId' => 1,
                            'setParentId' => null,
                            'getUrl' => 'https://www.fahey.com/non-rerum-dolorem-perferendis-eum',
                            'setUrl' => 'http://www.bartell.net/molestiae-magni-earum-laborum-at-adipisci-suscipit-pariatur',
                            'getStatus' => 1,
                            'setStatus' => null,
                            'getCreatedAt' => 'illum',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '1998-04-07',
                            'setUpdatedAt' => '2003-07-11',
                        ],
                    ],
                    'handle' => [
                        0 => [
                            'normalize' => [
                                0 => 'consequatur',
                                1 => 'animi',
                                2 => 'neque',
                            ],
                            'getUuid' => '7906af00-f1b8-36eb-a547-3d807ac6ccee',
                            'setUuid' => '5b209dae-68a4-36c8-bb58-516b6eb8047c',
                            'getVersion' => 'illum',
                            'getName' => 'Arno Stamm',
                            'setName' => 'Jarrod Schmeler',
                            'getParentId' => 1,
                            'setParentId' => null,
                            'getUrl' => 'https://www.fahey.com/non-rerum-dolorem-perferendis-eum',
                            'setUrl' => 'http://www.bartell.net/molestiae-magni-earum-laborum-at-adipisci-suscipit-pariatur',
                            'getStatus' => 1,
                            'setStatus' => null,
                            'getCreatedAt' => 'illum',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '1998-04-07',
                            'setUpdatedAt' => '2003-07-11',
                        ],
                    ],
                    'FindCommand' => [
                        'getFindCriteria' => [
                            'sameValueAs' => false,
                            'count' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'contains' => false,
                            'toNative' => [
                                0 => 'autem',
                                1 => 'et',
                                2 => 'eligendi',
                            ],
                            'toArray' => [
                                0 => 'autem',
                                1 => 'et',
                                2 => 'eligendi',
                            ],
                        ],
                        'getUuid' => [
                            'toString' => '97419c24-4a53-3be8-9252-2d2d9ce8e225',
                        ],
                    ],
                ],
                1 => [
                    'QueryRepositoryInterface' => [
                        'times' => 0,
                        'findByUuid' => [
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
                                'inc' => 0,
                                'decr' => 0,
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'inc' => 0,
                                'decr' => 0,
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
                                'inc' => 0,
                                'decr' => 0,
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
                        'findByCriteria' => [
                            'times' => 1,
                            'mockTimes' => [
                                0 => [
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
                                        'inc' => 0,
                                        'decr' => 0,
                                    ],
                                    'getParentId' => [
                                        'times' => 0,
                                        'sameValueAs' => 0,
                                        'toNative' => 0,
                                        'inc' => 0,
                                        'decr' => 0,
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
                                        'inc' => 0,
                                        'decr' => 0,
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
                    ],
                    'ItemAssembler' => [
                        'times' => 0,
                        'writeDto' => [
                            'times' => 1,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                        ],
                    ],
                    'handle' => [
                        0 => [
                            'times' => 0,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                            'className' => 'Backend\\\Api\\RpcSkeleton\\Domain\\Dto\\ItemDto',
                        ],
                    ],
                    'FindCommand' => [
                        'times' => 0,
                        'getFindCriteria' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'count' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
                                'inc' => 0,
                                'decr' => 0,
                            ],
                            'contains' => 0,
                            'toNative' => 0,
                            'toArray' => 0,
                        ],
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }
}
