<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command;

/**
 * DataProvider for class {testClassName}.
 */
class ItemCreateTaskHandlerDataProvider
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
                        'addUpdateTask' => '1980-09-07',
                        'addDeleteTask' => null,
                    ],
                    'ItemCreateTaskCommand' => [
                        'getItem' => [
                            'toArray' => [
                                0 => 'numquam',
                                1 => 'et',
                                2 => 'similique',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'numquam',
                                1 => 'et',
                                2 => 'similique',
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Sarah Rodriguez',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setName' => 'Ronaldo Considine',
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://www.cartwright.net/assumenda-rem-illo-reprehenderit-nobis-quidem-ut',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setUrl' => 'https://reinger.com/consequuntur-in-rerum-architecto.html',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '13:19:49',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '15:01:04',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '01:01:16',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '12:36:46',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '18:06:29',
                                ],
                            ],
                            'setUpdatedAt' => '1989-06-28',
                            'serialize' => [
                                0 => 'numquam',
                                1 => 'et',
                                2 => 'similique',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'da471691-521a-354e-ba26-deae3e214c47',
                            'getUuid' => [
                                'toString' => '39e907fb-69dc-3b65-b930-5357027aa9db',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '1242ccc3-dec4-3dcc-90b4-42a73ec1d9ba',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 1,
                        'addUpdateTask' => 0,
                        'addDeleteTask' => 0,
                    ],
                    'ItemCreateTaskCommand' => [
                        'times' => 0,
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
                        'addUpdateTask' => '1973-06-30',
                        'addDeleteTask' => null,
                    ],
                    'ItemCreateTaskCommand' => [
                        'getItem' => [
                            'toArray' => [
                                0 => 'eum',
                                1 => 'voluptas',
                                2 => 'sapiente',
                            ],
                            'sameValueAs' => true,
                            'toNative' => [
                                0 => 'eum',
                                1 => 'voluptas',
                                2 => 'sapiente',
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Eva Cartwright',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setName' => 'Darby Kreiger IV',
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'https://bins.org/in-architecto-aut-est.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setUrl' => 'http://johnston.com/',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '14:27:05',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '04:11:30',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '09:29:36',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '05:34:34',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '00:20:53',
                                ],
                            ],
                            'setUpdatedAt' => '1982-07-13',
                            'serialize' => [
                                0 => 'eum',
                                1 => 'voluptas',
                                2 => 'sapiente',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'ebb20eb3-05b8-39ed-aa66-35e9ecc1b6f1',
                            'getUuid' => [
                                'toString' => '54240aaf-85d9-3d95-a7f7-a43a70dc575b',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => '1b49780c-b4c4-3e59-b943-e049baf5612c',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 1,
                        'addUpdateTask' => 0,
                        'addDeleteTask' => 0,
                    ],
                    'ItemCreateTaskCommand' => [
                        'times' => 0,
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
                        'addUpdateTask' => '1985-10-18',
                        'addDeleteTask' => null,
                    ],
                    'ItemCreateTaskCommand' => [
                        'getItem' => [
                            'toArray' => [
                                0 => 'ipsum',
                                1 => 'architecto',
                                2 => 'illum',
                            ],
                            'sameValueAs' => true,
                            'toNative' => [
                                0 => 'ipsum',
                                1 => 'architecto',
                                2 => 'illum',
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Brian Dickens',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setName' => 'Fleta Marks IV',
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 9,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://batz.org/autem-non-esse-tenetur-nostrum-minima',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setUrl' => 'http://rolfson.com/delectus-architecto-rem-repellendus-qui-et-neque-est-vel',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '11:04:50',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '16:53:39',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '05:06:45',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '21:25:27',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '04:50:14',
                                ],
                            ],
                            'setUpdatedAt' => '2000-01-13',
                            'serialize' => [
                                0 => 'ipsum',
                                1 => 'architecto',
                                2 => 'illum',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => '55aa6cce-a84b-3a8f-8a9f-701a1107f85c',
                            'getUuid' => [
                                'toString' => 'a2cc7535-4885-3fb5-b214-81b529080bd8',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '96ede8f0-94e9-38b2-8ecc-4386f023e8df',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 1,
                        'addUpdateTask' => 0,
                        'addDeleteTask' => 0,
                    ],
                    'ItemCreateTaskCommand' => [
                        'times' => 0,
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
                        'addUpdateTask' => '1975-07-06',
                        'addDeleteTask' => null,
                    ],
                    'ItemCreateTaskCommand' => [
                        'getItem' => [
                            'toArray' => [
                                0 => 'et',
                                1 => 'rerum',
                                2 => 'ut',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'et',
                                1 => 'rerum',
                                2 => 'ut',
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Miss Lizzie Lindgren DDS',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setName' => 'Sonia Schiller',
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'http://white.com/perspiciatis-voluptatum-voluptatem-omnis-magni-sit',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'setUrl' => 'http://labadie.com/possimus-debitis-alias-voluptatem-assumenda',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '00:45:41',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '21:57:46',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '15:54:43',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '00:37:49',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '20:24:29',
                                ],
                            ],
                            'setUpdatedAt' => '1997-09-18',
                            'serialize' => [
                                0 => 'et',
                                1 => 'rerum',
                                2 => 'ut',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'f0c89064-aa00-382f-8b61-6f3b5ebd85a0',
                            'getUuid' => [
                                'toString' => '02170d93-6927-33b8-b953-d6247c106f75',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '6765ffb0-7372-3bef-8ea7-85f9bfedb3e8',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 1,
                        'addUpdateTask' => 0,
                        'addDeleteTask' => 0,
                    ],
                    'ItemCreateTaskCommand' => [
                        'times' => 0,
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
                        'addUpdateTask' => '2012-05-16',
                        'addDeleteTask' => null,
                    ],
                    'ItemCreateTaskCommand' => [
                        'getItem' => [
                            'toArray' => [
                                0 => 'quod',
                                1 => 'sed',
                                2 => 'eligendi',
                            ],
                            'sameValueAs' => true,
                            'toNative' => [
                                0 => 'quod',
                                1 => 'sed',
                                2 => 'eligendi',
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                            'setParentId' => null,
                            'getName' => [
                                'toNative' => 'Jarvis Pouros',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setName' => 'Miss Karina Schultz',
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'setStatus' => null,
                            'getUrl' => [
                                'toNative' => 'https://bailey.com/minima-eos-recusandae-aut-ut-facere-qui.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'setUrl' => 'http://langosh.com/',
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '17:45:23',
                                ],
                            ],
                            'setCreatedAt' => null,
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '12:15:14',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '00:07:04',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '18:11:58',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '19:36:54',
                                ],
                            ],
                            'setUpdatedAt' => '1987-04-05',
                            'serialize' => [
                                0 => 'quod',
                                1 => 'sed',
                                2 => 'eligendi',
                            ],
                        ],
                        'getProcessUuid' => [
                            'toNative' => '72455b45-fe4d-342a-a22d-66c507d6afc8',
                            'getUuid' => [
                                'toString' => '6395e4b6-1d80-3484-8901-dd5e960ee528',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => '46b40f52-ba3b-3360-be2d-91a537f8d27a',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 1,
                        'addUpdateTask' => 0,
                        'addDeleteTask' => 0,
                    ],
                    'ItemCreateTaskCommand' => [
                        'times' => 0,
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
