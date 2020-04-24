<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Query;

/**
 * DataProvider for class {testClassName}.
 */
class FindLiteHandlerDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Query\FindLiteHandler.
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
                                'toNative' => 'e531ddcc-eec3-38c4-97fc-0177f6a10dd0',
                                'getUuid' => [
                                    'toString' => 'd868d71f-8ba4-36ab-8b9b-9394ff631459',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getName' => [
                                'toNative' => 'Jillian Lesch',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 2,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://yost.biz/',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '05:00:03',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '06:59:20',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '20:37:20',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '13:37:44',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '10:03:56',
                                ],
                            ],
                            'initializeState' => 'California',
                            'getPlayhead' => 8,
                        ],
                        'findByCriteria' => [
                            0 => [
                                'addId' => null,
                                'delete' => null,
                                'getUuid' => [
                                    'toNative' => 'c06a91c1-0345-3c58-9b82-87fbc6523c83',
                                    'getUuid' => [
                                        'toString' => 'b6bcd7ea-0042-3a8d-b0d3-bbf085bb2672',
                                    ],
                                    'sameValueAs' => false,
                                    'isEmpty' => false,
                                ],
                                'getId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 6,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getParentId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 5,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getName' => [
                                    'toNative' => 'Mr. Reid Waelchi',
                                    'sameValueAs' => false,
                                    'isEmpty' => false,
                                ],
                                'getStatus' => [
                                    'isActive' => false,
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getUrl' => [
                                    'toNative' => 'https://www.pacocha.com/dolorem-impedit-est-nesciunt-cupiditate-aut',
                                    'sameValueAs' => false,
                                    'isEmpty' => false,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '14:42:20',
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '11:52:16',
                                    ],
                                    'sameValueAs' => true,
                                    'getDate' => [
                                        'toNative' => [
                                            'getTimestamp' => '19:40:53',
                                        ],
                                    ],
                                    'getTime' => [
                                        'toNative' => [
                                            'getTimestamp' => '01:13:07',
                                        ],
                                    ],
                                    'toNativeDateTime' => [
                                        'getTimestamp' => '04:16:04',
                                    ],
                                ],
                                'initializeState' => 'Pennsylvania',
                                'getPlayhead' => 2,
                            ],
                        ],
                    ],
                    'handle' => [
                        0 => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'c06a91c1-0345-3c58-9b82-87fbc6523c83',
                                'getUuid' => [
                                    'toString' => 'b6bcd7ea-0042-3a8d-b0d3-bbf085bb2672',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getName' => [
                                'toNative' => 'Mr. Reid Waelchi',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 8,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getUrl' => [
                                'toNative' => 'https://www.pacocha.com/dolorem-impedit-est-nesciunt-cupiditate-aut',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '14:42:20',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '11:52:16',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '19:40:53',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '01:13:07',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '04:16:04',
                                ],
                            ],
                            'initializeState' => 'Pennsylvania',
                            'getPlayhead' => 2,
                        ],
                    ],
                    'FindLiteCommand' => [
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
                                0 => 'voluptatum',
                                1 => 'explicabo',
                                2 => 'earum',
                            ],
                            'toArray' => [
                                0 => 'voluptatum',
                                1 => 'explicabo',
                                2 => 'earum',
                            ],
                        ],
                        'getUuid' => [
                            'toString' => 'a95b69d9-4bf5-3fd3-8db6-512b325c8310',
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
                                        'times' => 1,
                                        'sameValueAs' => 0,
                                        'toNative' => 1,
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
                                        'times' => 1,
                                        'toNative' => 1,
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
                                        'times' => 1,
                                        'toNative' => 1,
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
                    'handle' => [
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
                                'times' => 1,
                                'sameValueAs' => 0,
                                'toNative' => 1,
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
                                'times' => 1,
                                'toNative' => 1,
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
                                'times' => 1,
                                'toNative' => 1,
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
                    'FindLiteCommand' => [
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
                                'toNative' => '6184f1de-9750-3815-b33f-d6054cfce9e4',
                                'getUuid' => [
                                    'toString' => '9d14c065-53e3-380b-bfb0-fe00563d3cf2',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getName' => [
                                'toNative' => 'Kayley Runolfsdottir',
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
                                'toNative' => 'https://kozey.net/quae-dolores-blanditiis-ducimus-voluptas.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '11:31:11',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '03:38:36',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '21:58:21',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '11:47:26',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '00:30:21',
                                ],
                            ],
                            'initializeState' => 'Kentucky',
                            'getPlayhead' => 2,
                        ],
                        'findByCriteria' => [
                            0 => [
                                'addId' => null,
                                'delete' => null,
                                'getUuid' => [
                                    'toNative' => 'e9f659ba-c512-3df8-ba0f-0aee55cec222',
                                    'getUuid' => [
                                        'toString' => '9977d510-2d01-3c8f-b383-58c16691d8e0',
                                    ],
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 9,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getParentId' => [
                                    'sameValueAs' => false,
                                    'toNative' => 5,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getName' => [
                                    'toNative' => 'Fredrick Cummerata',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getStatus' => [
                                    'isActive' => true,
                                    'sameValueAs' => true,
                                    'toNative' => 2,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getUrl' => [
                                    'toNative' => 'https://www.ritchie.com/qui-qui-non-earum-at-dolores-occaecati-iste',
                                    'sameValueAs' => false,
                                    'isEmpty' => false,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '09:06:03',
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '14:15:52',
                                    ],
                                    'sameValueAs' => false,
                                    'getDate' => [
                                        'toNative' => [
                                            'getTimestamp' => '17:21:26',
                                        ],
                                    ],
                                    'getTime' => [
                                        'toNative' => [
                                            'getTimestamp' => '16:12:39',
                                        ],
                                    ],
                                    'toNativeDateTime' => [
                                        'getTimestamp' => '19:26:06',
                                    ],
                                ],
                                'initializeState' => 'Montana',
                                'getPlayhead' => 7,
                            ],
                        ],
                    ],
                    'handle' => [
                        0 => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'e9f659ba-c512-3df8-ba0f-0aee55cec222',
                                'getUuid' => [
                                    'toString' => '9977d510-2d01-3c8f-b383-58c16691d8e0',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 9,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getName' => [
                                'toNative' => 'Fredrick Cummerata',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 2,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getUrl' => [
                                'toNative' => 'https://www.ritchie.com/qui-qui-non-earum-at-dolores-occaecati-iste',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '09:06:03',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '14:15:52',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '17:21:26',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '16:12:39',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '19:26:06',
                                ],
                            ],
                            'initializeState' => 'Montana',
                            'getPlayhead' => 7,
                        ],
                    ],
                    'FindLiteCommand' => [
                        'getFindCriteria' => [
                            'sameValueAs' => true,
                            'count' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'contains' => true,
                            'toNative' => [
                                0 => 'consectetur',
                                1 => 'harum',
                                2 => 'aut',
                            ],
                            'toArray' => [
                                0 => 'consectetur',
                                1 => 'harum',
                                2 => 'aut',
                            ],
                        ],
                        'getUuid' => [
                            'toString' => 'ebda7ab2-d0cf-37d1-8736-4d46d54967e0',
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
                                        'times' => 1,
                                        'sameValueAs' => 0,
                                        'toNative' => 1,
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
                                        'times' => 1,
                                        'toNative' => 1,
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
                                        'times' => 1,
                                        'toNative' => 1,
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
                    'handle' => [
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
                                'times' => 1,
                                'sameValueAs' => 0,
                                'toNative' => 1,
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
                                'times' => 1,
                                'toNative' => 1,
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
                                'times' => 1,
                                'toNative' => 1,
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
                    'FindLiteCommand' => [
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
                                'toNative' => '67b2dd16-67c2-3c78-b7ef-ba7acf9238ab',
                                'getUuid' => [
                                    'toString' => '255a7f44-7cc3-3c3b-a5b1-3df95646b27b',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getName' => [
                                'toNative' => 'Mr. Juston Satterfield',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 6,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getUrl' => [
                                'toNative' => 'https://hackett.com/non-similique-voluptas-voluptatibus-repellendus-fugit.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '10:05:59',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '17:35:59',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '11:42:15',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '12:58:19',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '01:16:03',
                                ],
                            ],
                            'initializeState' => 'Texas',
                            'getPlayhead' => 2,
                        ],
                        'findByCriteria' => [
                            0 => [
                                'addId' => null,
                                'delete' => null,
                                'getUuid' => [
                                    'toNative' => '1f2fbff8-a1a8-3b24-ae8a-8850442beb56',
                                    'getUuid' => [
                                        'toString' => '57bae2dc-f89b-39d3-88cc-fb93124cdbdc',
                                    ],
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getId' => [
                                    'sameValueAs' => false,
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
                                    'toNative' => 'Kameron Mann',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getStatus' => [
                                    'isActive' => false,
                                    'sameValueAs' => false,
                                    'toNative' => 1,
                                    'inc' => null,
                                    'decr' => null,
                                ],
                                'getUrl' => [
                                    'toNative' => 'https://boyle.biz/aliquid-non-quisquam-quae-impedit.html',
                                    'sameValueAs' => true,
                                    'isEmpty' => true,
                                ],
                                'getCreatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '06:22:56',
                                    ],
                                ],
                                'getUpdatedAt' => [
                                    'toNative' => [
                                        'getTimestamp' => '09:14:55',
                                    ],
                                    'sameValueAs' => true,
                                    'getDate' => [
                                        'toNative' => [
                                            'getTimestamp' => '17:08:54',
                                        ],
                                    ],
                                    'getTime' => [
                                        'toNative' => [
                                            'getTimestamp' => '11:11:40',
                                        ],
                                    ],
                                    'toNativeDateTime' => [
                                        'getTimestamp' => '06:38:17',
                                    ],
                                ],
                                'initializeState' => 'Idaho',
                                'getPlayhead' => 8,
                            ],
                        ],
                    ],
                    'handle' => [
                        0 => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => '1f2fbff8-a1a8-3b24-ae8a-8850442beb56',
                                'getUuid' => [
                                    'toString' => '57bae2dc-f89b-39d3-88cc-fb93124cdbdc',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
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
                                'toNative' => 'Kameron Mann',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 1,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'getUrl' => [
                                'toNative' => 'https://boyle.biz/aliquid-non-quisquam-quae-impedit.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '06:22:56',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '09:14:55',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '17:08:54',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '11:11:40',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '06:38:17',
                                ],
                            ],
                            'initializeState' => 'Idaho',
                            'getPlayhead' => 8,
                        ],
                    ],
                    'FindLiteCommand' => [
                        'getFindCriteria' => [
                            'sameValueAs' => false,
                            'count' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                                'inc' => null,
                                'decr' => null,
                            ],
                            'contains' => false,
                            'toNative' => [
                                0 => 'quam',
                                1 => 'placeat',
                                2 => 'illum',
                            ],
                            'toArray' => [
                                0 => 'quam',
                                1 => 'placeat',
                                2 => 'illum',
                            ],
                        ],
                        'getUuid' => [
                            'toString' => '0a167813-09c2-3023-a163-249d47cdca28',
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
                                        'times' => 1,
                                        'sameValueAs' => 0,
                                        'toNative' => 1,
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
                                        'times' => 1,
                                        'toNative' => 1,
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
                                        'times' => 1,
                                        'toNative' => 1,
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
                    'handle' => [
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
                                'times' => 1,
                                'sameValueAs' => 0,
                                'toNative' => 1,
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
                                'times' => 1,
                                'toNative' => 1,
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
                                'times' => 1,
                                'toNative' => 1,
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
                    'FindLiteCommand' => [
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
