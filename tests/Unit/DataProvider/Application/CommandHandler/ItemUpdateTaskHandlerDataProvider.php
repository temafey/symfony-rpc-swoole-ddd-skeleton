<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\CommandHandler;

/**
 * DataProvider for class {testClassName}.
 */
class ItemUpdateTaskHandlerDataProvider
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
                    'ItemTaskRepositoryInterface' => [
                        'addCreateTask' => null,
                        'addUpdateTask' => '1991-09-27',
                        'addDeleteTask' => null,
                    ],
                    'ItemUpdateTaskCommand' => [
                        'getItemUuid' => [
                            'toNative' => 'f3be4564-2bb1-3fe3-a4a4-9c17c04b2cbb',
                            'getUuid' => [
                                'toString' => '2b180b10-cbd1-3093-bb52-badb7f82463e',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getItem' => [
                            'toArray' => [
                                0 => 'veritatis',
                                1 => 'repellendus',
                                2 => 'sit',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'veritatis',
                                1 => 'repellendus',
                                2 => 'sit',
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Maximillian Ebert',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setName' => 'Abe Yundt',
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://www.kiehn.info/ex-non-asperiores-atque-labore-ipsam.html',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setUrl' => 'http://www.casper.com/rerum-vitae-omnis-harum-distinctio-possimus',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '11:19:27',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '17:38:07',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '20:58:58',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '05:30:50',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '13:26:41',
                                ],
                            ],
                            'setUpdatedAt' => '1993-06-01',
                            'serialize' => [
                                0 => 'veritatis',
                                1 => 'repellendus',
                                2 => 'sit',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'eaa7d255-68e9-3cf8-baca-9e8af54a6538',
                            'getUuid' => [
                                'toString' => 'b8e9d959-86c0-3ca9-87bb-0c0453a4331c',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => 'c5372413-42b4-30a7-bbe4-7c4212c1d77f',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 0,
                        'addUpdateTask' => 1,
                        'addDeleteTask' => 0,
                    ],
                    'ItemUpdateTaskCommand' => [
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
                            'times' => 1,
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
                    'ItemTaskRepositoryInterface' => [
                        'addCreateTask' => null,
                        'addUpdateTask' => '1992-05-05',
                        'addDeleteTask' => null,
                    ],
                    'ItemUpdateTaskCommand' => [
                        'getItemUuid' => [
                            'toNative' => '8587a20a-b2c4-37e8-8e79-462403b15db7',
                            'getUuid' => [
                                'toString' => 'b2208a4d-c31c-33c0-9ae9-cf4e7a145579',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getItem' => [
                            'toArray' => [
                                0 => 'molestiae',
                                1 => 'ipsa',
                                2 => 'quod',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'molestiae',
                                1 => 'ipsa',
                                2 => 'quod',
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Mr. Delaney Ferry II',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setName' => 'Mrs. Pinkie Haley V',
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://www.bergstrom.biz/asperiores-sed-laboriosam-pariatur-quod-eos-et-in.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setUrl' => 'http://www.murazik.biz/dolor-libero-cum-explicabo-nam-quis.html',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '12:20:13',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '01:51:47',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '22:14:12',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '02:18:34',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '14:11:45',
                                ],
                            ],
                            'setUpdatedAt' => '1979-11-09',
                            'serialize' => [
                                0 => 'molestiae',
                                1 => 'ipsa',
                                2 => 'quod',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => '5ef0aa07-f965-3346-b612-88636b38c04f',
                            'getUuid' => [
                                'toString' => '77ed489b-6c61-376d-96b7-82e38ef92996',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => '96144fa3-7b40-39a3-bf93-a870e1677beb',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 0,
                        'addUpdateTask' => 1,
                        'addDeleteTask' => 0,
                    ],
                    'ItemUpdateTaskCommand' => [
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
                            'times' => 1,
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
                    'ItemTaskRepositoryInterface' => [
                        'addCreateTask' => null,
                        'addUpdateTask' => '1970-12-24',
                        'addDeleteTask' => null,
                    ],
                    'ItemUpdateTaskCommand' => [
                        'getItemUuid' => [
                            'toNative' => '27ee3881-986f-3f47-95c1-0ec58f4a6ee1',
                            'getUuid' => [
                                'toString' => 'd1f07e2e-7102-3af8-9313-745425f29aa1',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getItem' => [
                            'toArray' => [
                                0 => 'rerum',
                                1 => 'aliquam',
                                2 => 'dolores',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'rerum',
                                1 => 'aliquam',
                                2 => 'dolores',
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 9,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Olaf Kris MD',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setName' => 'Miss Jessica Leannon PhD',
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://www.greenholt.com/adipisci-fugiat-et-nostrum-est.html',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setUrl' => 'http://www.watsica.biz/',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '07:45:32',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '01:30:28',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '17:30:26',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '14:50:30',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '16:55:40',
                                ],
                            ],
                            'setUpdatedAt' => '1984-04-26',
                            'serialize' => [
                                0 => 'rerum',
                                1 => 'aliquam',
                                2 => 'dolores',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => '0781f191-5e66-39ac-81dc-b3376430e9c5',
                            'getUuid' => [
                                'toString' => '7000619a-324d-3f53-82b3-a5da75a5d70d',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => '192c13a7-a3e5-317f-a138-a9ea0159bbbb',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 0,
                        'addUpdateTask' => 1,
                        'addDeleteTask' => 0,
                    ],
                    'ItemUpdateTaskCommand' => [
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
                            'times' => 1,
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
                    'ItemTaskRepositoryInterface' => [
                        'addCreateTask' => null,
                        'addUpdateTask' => '2020-01-03',
                        'addDeleteTask' => null,
                    ],
                    'ItemUpdateTaskCommand' => [
                        'getItemUuid' => [
                            'toNative' => 'a475fc3f-cfaf-3c70-a6c4-7c3b893f39b3',
                            'getUuid' => [
                                'toString' => 'b7053981-ae5e-379f-bd3a-5ec4ed66d51b',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getItem' => [
                            'toArray' => [
                                0 => 'est',
                                1 => 'et',
                                2 => 'quam',
                            ],
                            'sameValueAs' => true,
                            'toNative' => [
                                0 => 'est',
                                1 => 'et',
                                2 => 'quam',
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Archibald Ruecker',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setName' => 'Syble Hodkiewicz',
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://ullrich.info/beatae-sequi-laudantium-ut-placeat-quia-amet-excepturi.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setUrl' => 'http://upton.com/',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '01:27:24',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '15:20:52',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '01:50:08',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '13:44:36',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '12:28:39',
                                ],
                            ],
                            'setUpdatedAt' => '2006-05-25',
                            'serialize' => [
                                0 => 'est',
                                1 => 'et',
                                2 => 'quam',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => '80696e7e-1869-3e4f-b57f-3d118eb2b794',
                            'getUuid' => [
                                'toString' => '612d1359-8f3e-3d93-bbbb-6420ba84492e',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '8b5b25fc-61a5-3e3a-a25a-42557a277a28',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 0,
                        'addUpdateTask' => 1,
                        'addDeleteTask' => 0,
                    ],
                    'ItemUpdateTaskCommand' => [
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
                            'times' => 1,
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
                    'ItemTaskRepositoryInterface' => [
                        'addCreateTask' => null,
                        'addUpdateTask' => '2013-06-04',
                        'addDeleteTask' => null,
                    ],
                    'ItemUpdateTaskCommand' => [
                        'getItemUuid' => [
                            'toNative' => '7722cbb8-c4fa-3f89-aa5c-e78c8785f34b',
                            'getUuid' => [
                                'toString' => 'eff91cbc-0f56-3b70-9586-1c08d75e6905',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getItem' => [
                            'toArray' => [
                                0 => 'neque',
                                1 => 'eum',
                                2 => 'omnis',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'neque',
                                1 => 'eum',
                                2 => 'omnis',
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 9,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Dannie Mosciski',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setName' => 'Fredy Pfeffer',
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://www.aufderhar.com/',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setUrl' => 'https://www.schumm.com/quaerat-optio-quaerat-et',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '13:30:33',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '10:04:20',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '21:44:33',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '18:01:03',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '08:10:08',
                                ],
                            ],
                            'setUpdatedAt' => '1984-12-26',
                            'serialize' => [
                                0 => 'neque',
                                1 => 'eum',
                                2 => 'omnis',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => '0e91af69-2f89-3076-9dd5-c68811abc51a',
                            'getUuid' => [
                                'toString' => 'd00b0ef7-c2ba-33d7-94c3-890461ac84bc',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => 'a90dd8e9-a86b-3593-b0c4-0cfc31501148',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 0,
                        'addUpdateTask' => 1,
                        'addDeleteTask' => 0,
                    ],
                    'ItemUpdateTaskCommand' => [
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
                            'times' => 1,
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
