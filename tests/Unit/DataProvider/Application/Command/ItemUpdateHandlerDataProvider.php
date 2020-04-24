<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command;

/**
 * DataProvider for class {testClassName}.
 */
class ItemUpdateHandlerDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\ApplicationCommandHandler$1Handler.
     *
     * @return mixed[]
     */
    public function getDataForHandleMethod(): array
    {
        return [
            0 => [
                0 => [
                    'ItemRepositoryInterface' => [
                        'get' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'fd40cc5f-fc05-3251-ab13-794b0dc66291',
                                'getUuid' => [
                                    'toString' => '814a906b-bef4-3b68-b6f6-33c47b28c163',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'getName' => [
                                'toNative' => 'Miss Meagan Franecki DDS',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://herman.com/non-est-et-fuga-quo-saepe-excepturi',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '18:26:33',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '15:29:04',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '17:04:46',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '08:49:55',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '03:51:12',
                                ],
                            ],
                            'initializeState' => 'Utah',
                            'getPlayhead' => 8,
                        ],
                        'store' => null,
                    ],
                    'ItemUpdateCommand' => [
                        'getItemUuid' => [
                            'toNative' => 'b6b354cb-41b4-39de-9782-c515b0ba0961',
                            'getUuid' => [
                                'toString' => '92cae673-ecda-3dd1-9991-85d0c36444c3',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getItem' => [
                            'toArray' => [
                                0 => 'omnis',
                                1 => 'qui',
                                2 => 'magnam',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'omnis',
                                1 => 'qui',
                                2 => 'magnam',
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Teresa Volkman',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setName' => 'Lauretta Towne',
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://www.schultz.com/sunt-est-aut-nihil-cupiditate-qui-iste-ut-illum',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setUrl' => 'http://hudson.biz/',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '04:11:42',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '17:15:27',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '16:29:54',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '11:06:57',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '01:49:07',
                                ],
                            ],
                            'setUpdatedAt' => '2010-01-25',
                            'serialize' => [
                                0 => 'omnis',
                                1 => 'qui',
                                2 => 'magnam',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'f103a781-736a-30ee-a183-35b77141f13f',
                            'getUuid' => [
                                'toString' => '059f99df-0ea8-3a93-83ab-6c76877688cb',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => '5694dfaa-6bb0-3718-a6fb-bc1b84c3227e',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'update' => 1,
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
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
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
                        'store' => 1,
                    ],
                    'ItemUpdateCommand' => [
                        'times' => 0,
                        'getItemUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getItem' => [
                            'times' => 1,
                            'toArray' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            1 => [
                0 => [
                    'ItemRepositoryInterface' => [
                        'get' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'e7e7866d-a03e-34cc-899a-a889e4a2230b',
                                'getUuid' => [
                                    'toString' => '67b7354a-283d-370c-8b26-2a4bac347793',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                            'getName' => [
                                'toNative' => 'Samantha Rohan MD',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://www.trantow.net/incidunt-id-repudiandae-ut-saepe-minus-laborum.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '03:22:18',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '12:48:32',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '17:34:11',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '12:41:14',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '21:44:40',
                                ],
                            ],
                            'initializeState' => 'South Carolina',
                            'getPlayhead' => 3,
                        ],
                        'store' => null,
                    ],
                    'ItemUpdateCommand' => [
                        'getItemUuid' => [
                            'toNative' => 'd6658ac1-246e-3cf6-82dd-97c78b9b3dd1',
                            'getUuid' => [
                                'toString' => 'ae5262f5-20ab-3e18-ba3c-57db00953826',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getItem' => [
                            'toArray' => [
                                0 => 'et',
                                1 => 'eos',
                                2 => 'omnis',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'et',
                                1 => 'eos',
                                2 => 'omnis',
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Chelsey Kihn',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setName' => 'Gracie Goldner',
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://www.schuster.com/tempore-deserunt-sapiente-ullam-sunt-sunt-debitis-inventore.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setUrl' => 'http://www.ankunding.com/',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '23:44:30',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '12:03:14',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '03:35:12',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '13:08:21',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '03:45:42',
                                ],
                            ],
                            'setUpdatedAt' => '2020-01-13',
                            'serialize' => [
                                0 => 'et',
                                1 => 'eos',
                                2 => 'omnis',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => '8c25123d-3e49-3173-8fa9-373cfcf9726e',
                            'getUuid' => [
                                'toString' => '4397b5c1-6108-3347-8e4a-4fe1144ff607',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => 'c72fda14-a19d-38b7-926a-4ccb5fcc9671',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'update' => 1,
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
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
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
                        'store' => 1,
                    ],
                    'ItemUpdateCommand' => [
                        'times' => 0,
                        'getItemUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getItem' => [
                            'times' => 1,
                            'toArray' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            2 => [
                0 => [
                    'ItemRepositoryInterface' => [
                        'get' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'b0881e0c-934b-344f-a2fe-17e1ea3ad2f0',
                                'getUuid' => [
                                    'toString' => '6d379459-d8ef-3df3-ae73-6ceaa17b4ca6',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                            'getName' => [
                                'toNative' => 'Mr. Marley Simonis PhD',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://rowe.com/',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '16:28:23',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '19:07:52',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '19:20:25',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '14:09:51',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '10:33:51',
                                ],
                            ],
                            'initializeState' => 'Colorado',
                            'getPlayhead' => 2,
                        ],
                        'store' => null,
                    ],
                    'ItemUpdateCommand' => [
                        'getItemUuid' => [
                            'toNative' => 'dd47b6c3-5a8b-3b5f-975a-b563c08f14ed',
                            'getUuid' => [
                                'toString' => 'a1940af0-6acf-31fe-b2be-d28082b8065f',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getItem' => [
                            'toArray' => [
                                0 => 'nam',
                                1 => 'porro',
                                2 => 'sunt',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'nam',
                                1 => 'porro',
                                2 => 'sunt',
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Aniyah Moore PhD',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setName' => 'Zackary Dibbert',
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://torp.com/quam-porro-sunt-mollitia-praesentium-maiores',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setUrl' => 'http://www.pfannerstill.biz/totam-consequatur-placeat-suscipit-id-maiores-asperiores-optio.html',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '19:24:03',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '07:16:35',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '21:56:04',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '09:33:32',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '07:56:33',
                                ],
                            ],
                            'setUpdatedAt' => '2007-01-24',
                            'serialize' => [
                                0 => 'nam',
                                1 => 'porro',
                                2 => 'sunt',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => '3ab817e3-8284-3649-af43-b697c7f2f6a4',
                            'getUuid' => [
                                'toString' => 'e80ba516-3e26-3bc0-b90a-32a609f4ab4f',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '42de80da-7874-37f4-b783-892f63864285',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'update' => 1,
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
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
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
                        'store' => 1,
                    ],
                    'ItemUpdateCommand' => [
                        'times' => 0,
                        'getItemUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getItem' => [
                            'times' => 1,
                            'toArray' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            3 => [
                0 => [
                    'ItemRepositoryInterface' => [
                        'get' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => '5d43fb01-66de-3a63-8566-584926eac1d0',
                                'getUuid' => [
                                    'toString' => 'ede24b14-30de-309f-adc6-03f85f1c073d',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                            'getName' => [
                                'toNative' => 'Stephany Cremin',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 9,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://wisozk.info/voluptatem-ad-quod-ab-corporis-quia-iure-amet',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '07:13:24',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '09:35:53',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '03:29:46',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '19:09:53',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '21:25:37',
                                ],
                            ],
                            'initializeState' => 'Arizona',
                            'getPlayhead' => 8,
                        ],
                        'store' => null,
                    ],
                    'ItemUpdateCommand' => [
                        'getItemUuid' => [
                            'toNative' => '78569c93-a786-3d61-b766-769f81692e9a',
                            'getUuid' => [
                                'toString' => '1bbe0062-630c-32d9-9df5-351c25fad76a',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getItem' => [
                            'toArray' => [
                                0 => 'temporibus',
                                1 => 'impedit',
                                2 => 'ea',
                            ],
                            'sameValueAs' => true,
                            'toNative' => [
                                0 => 'temporibus',
                                1 => 'impedit',
                                2 => 'ea',
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 9,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Autumn Pouros II',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setName' => 'Agustina Moen',
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'https://moore.net/recusandae-consequuntur-quaerat-facere-commodi-distinctio-qui-maxime.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setUrl' => 'http://www.hodkiewicz.com/',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '07:14:26',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '09:48:50',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '06:17:33',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '08:59:05',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '03:01:40',
                                ],
                            ],
                            'setUpdatedAt' => '1976-09-29',
                            'serialize' => [
                                0 => 'temporibus',
                                1 => 'impedit',
                                2 => 'ea',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => '032966b2-b59d-3e30-b6a6-9a2167b90e2f',
                            'getUuid' => [
                                'toString' => '6d6c3c80-6403-3d05-81b9-ccee2cab6987',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '966ad628-ec0b-34ee-a03b-52571fd08c2d',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'update' => 1,
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
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
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
                        'store' => 1,
                    ],
                    'ItemUpdateCommand' => [
                        'times' => 0,
                        'getItemUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getItem' => [
                            'times' => 1,
                            'toArray' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            4 => [
                0 => [
                    'ItemRepositoryInterface' => [
                        'get' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'b1f58e0d-f86c-37c4-8705-d3c08142b937',
                                'getUuid' => [
                                    'toString' => 'd17ae59f-8d48-370c-bda5-9160de609eda',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                            'getName' => [
                                'toNative' => 'Lauretta Emard',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://harris.com/consequuntur-ducimus-asperiores-veritatis-sit.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '18:27:14',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '16:27:38',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '10:36:37',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '10:48:33',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '21:48:21',
                                ],
                            ],
                            'initializeState' => 'Pennsylvania',
                            'getPlayhead' => 9,
                        ],
                        'store' => null,
                    ],
                    'ItemUpdateCommand' => [
                        'getItemUuid' => [
                            'toNative' => '8b83f862-ccbd-3beb-b8e7-1dae6e9ae1f5',
                            'getUuid' => [
                                'toString' => '70ca7d1c-4ebc-3cc9-9549-a5b4c10f7e8c',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getItem' => [
                            'toArray' => [
                                0 => 'quis',
                                1 => 'harum',
                                2 => 'quo',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'quis',
                                1 => 'harum',
                                2 => 'quo',
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 9,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Mariela Ortiz',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setName' => 'Darien Schneider',
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://mckenzie.net/reiciendis-ullam-aut-aut-officia-dolorem-quibusdam-reiciendis',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setUrl' => 'http://www.auer.com/enim-et-earum-distinctio-et-repudiandae-error-corrupti',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '18:38:26',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '17:19:15',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '20:50:27',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '11:41:25',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '15:05:48',
                                ],
                            ],
                            'setUpdatedAt' => '1984-10-18',
                            'serialize' => [
                                0 => 'quis',
                                1 => 'harum',
                                2 => 'quo',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'ac280dc3-5301-3251-9d61-71699cbaa2c4',
                            'getUuid' => [
                                'toString' => '92fed9fe-58a8-3617-8058-5e78431d6afb',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => 'cce5a6fc-f767-3d10-859e-7dffbb2be158',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'update' => 1,
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
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
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
                        'store' => 1,
                    ],
                    'ItemUpdateCommand' => [
                        'times' => 0,
                        'getItemUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getItem' => [
                            'times' => 1,
                            'toArray' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
