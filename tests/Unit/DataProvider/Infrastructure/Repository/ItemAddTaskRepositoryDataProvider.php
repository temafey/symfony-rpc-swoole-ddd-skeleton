<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository;

/**
 * DataProvider for class {testClassName}.
 */
class ItemAddTaskRepositoryDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemAddTaskRepository.
     *
     * @return mixed[]
     */
    public function getDataForAddCreateTaskMethod(): array
    {
        return [
            0 => [
                0 => [
                    'ProducerInterface' => [
                        'sendEvent' => null,
                        'sendCommand' => [
                            'receive' => [
                                'getBody' => 'nulla',
                                'setBody' => null,
                                'setProperties' => null,
                                'getProperties' => 'tempore',
                                'setProperty' => null,
                                'getProperty' => 'tempore',
                                'setHeaders' => null,
                                'getHeaders' => 'tempore',
                                'setHeader' => null,
                                'getHeader' => 'tempore',
                                'setRedelivered' => null,
                                'isRedelivered' => true,
                                'setCorrelationId' => null,
                                'getCorrelationId' => 'nulla',
                                'setMessageId' => null,
                                'getMessageId' => 'nulla',
                                'getTimestamp' => '12:55:26',
                                'setTimestamp' => '08:08:59',
                                'setReplyTo' => null,
                                'getReplyTo' => 'nulla',
                            ],
                            'receiveNoWait' => [
                                'getBody' => 'quasi',
                                'setBody' => null,
                                'setProperties' => null,
                                'getProperties' => 'sunt',
                                'setProperty' => null,
                                'getProperty' => 'sunt',
                                'setHeaders' => null,
                                'getHeaders' => 'sunt',
                                'setHeader' => null,
                                'getHeader' => 'sunt',
                                'setRedelivered' => null,
                                'isRedelivered' => false,
                                'setCorrelationId' => null,
                                'getCorrelationId' => 'quasi',
                                'setMessageId' => null,
                                'getMessageId' => 'quasi',
                                'getTimestamp' => '09:38:37',
                                'setTimestamp' => '07:09:29',
                                'setReplyTo' => null,
                                'getReplyTo' => 'quasi',
                            ],
                            'setDeleteReplyQueue' => 'quae',
                            'isDeleteReplyQueue' => false,
                        ],
                    ],
                    'UUID' => [
                        'toNative' => '0c8b6dd1-83dd-357f-8e01-48b3f3239982',
                        'getUuid' => [
                            'toString' => 'e4c2c2b5-1e40-3159-92e6-a89ed428b557',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'tempora',
                            1 => 'qui',
                            2 => 'et',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'tempora',
                            1 => 'qui',
                            2 => 'et',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 2,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Frederique Schroeder',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://barrows.com/doloribus-quia-vero-nisi-labore',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '19:27:25',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '07:28:08',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '03:26:29',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '13:36:04',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '02:47:08',
                            ],
                        ],
                        'serialize' => [
                            0 => 'tempora',
                            1 => 'qui',
                            2 => 'et',
                        ],
                    ],
                ],
                1 => [
                    'ProducerInterface' => [
                        'times' => 0,
                        'sendEvent' => 0,
                        'sendCommand' => [
                            'times' => 1,
                            'receive' => [
                                'times' => 0,
                                'getBody' => 0,
                                'setBody' => 0,
                                'setProperties' => 0,
                                'getProperties' => 0,
                                'setProperty' => 0,
                                'getProperty' => 0,
                                'setHeaders' => 0,
                                'getHeaders' => 0,
                                'setHeader' => 0,
                                'getHeader' => 0,
                                'setRedelivered' => 0,
                                'isRedelivered' => 0,
                                'setCorrelationId' => 0,
                                'getCorrelationId' => 0,
                                'setMessageId' => 0,
                                'getMessageId' => 0,
                                'getTimestamp' => 0,
                                'setTimestamp' => 0,
                                'setReplyTo' => 0,
                                'getReplyTo' => 0,
                            ],
                            'receiveNoWait' => [
                                'times' => 0,
                                'getBody' => 0,
                                'setBody' => 0,
                                'setProperties' => 0,
                                'getProperties' => 0,
                                'setProperty' => 0,
                                'getProperty' => 0,
                                'setHeaders' => 0,
                                'getHeaders' => 0,
                                'setHeader' => 0,
                                'getHeader' => 0,
                                'setRedelivered' => 0,
                                'isRedelivered' => 0,
                                'setCorrelationId' => 0,
                                'getCorrelationId' => 0,
                                'setMessageId' => 0,
                                'getMessageId' => 0,
                                'getTimestamp' => 0,
                                'setTimestamp' => 0,
                                'setReplyTo' => 0,
                                'getReplyTo' => 0,
                            ],
                            'setDeleteReplyQueue' => 0,
                            'isDeleteReplyQueue' => 0,
                        ],
                    ],
                    'UUID' => [
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
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemAddTaskRepository.
     *
     * @return mixed[]
     */
    public function getDataForAddUpdateTaskMethod(): array
    {
        return [
            0 => [
                0 => [
                    'ProducerInterface' => [
                        'sendEvent' => null,
                        'sendCommand' => [
                            'receive' => [
                                'getBody' => 'nulla',
                                'setBody' => null,
                                'setProperties' => null,
                                'getProperties' => 'tempore',
                                'setProperty' => null,
                                'getProperty' => 'tempore',
                                'setHeaders' => null,
                                'getHeaders' => 'tempore',
                                'setHeader' => null,
                                'getHeader' => 'tempore',
                                'setRedelivered' => null,
                                'isRedelivered' => true,
                                'setCorrelationId' => null,
                                'getCorrelationId' => 'nulla',
                                'setMessageId' => null,
                                'getMessageId' => 'nulla',
                                'getTimestamp' => '12:55:26',
                                'setTimestamp' => '08:08:59',
                                'setReplyTo' => null,
                                'getReplyTo' => 'nulla',
                            ],
                            'receiveNoWait' => [
                                'getBody' => 'quasi',
                                'setBody' => null,
                                'setProperties' => null,
                                'getProperties' => 'sunt',
                                'setProperty' => null,
                                'getProperty' => 'sunt',
                                'setHeaders' => null,
                                'getHeaders' => 'sunt',
                                'setHeader' => null,
                                'getHeader' => 'sunt',
                                'setRedelivered' => null,
                                'isRedelivered' => false,
                                'setCorrelationId' => null,
                                'getCorrelationId' => 'quasi',
                                'setMessageId' => null,
                                'getMessageId' => 'quasi',
                                'getTimestamp' => '09:38:37',
                                'setTimestamp' => '07:09:29',
                                'setReplyTo' => null,
                                'getReplyTo' => 'quasi',
                            ],
                            'setDeleteReplyQueue' => 'quae',
                            'isDeleteReplyQueue' => false,
                        ],
                    ],
                    'UUID' => [
                        'toNative' => 'a84a0981-43bf-3b76-aa57-c987743c0bbe',
                        'getUuid' => [
                            'toString' => '59a70e47-286b-384f-b0dd-efea558ba4ee',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '69fc181b-b2d9-3984-a2e1-a949a9066ba8',
                        'getUuid' => [
                            'toString' => '15bf5e66-116d-32db-9290-0e10c5abe83a',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'deserunt',
                            1 => 'similique',
                            2 => 'ducimus',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'deserunt',
                            1 => 'similique',
                            2 => 'ducimus',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 4,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 9,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Dillon Lakin',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 6,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://www.reynolds.com/sit-eum-debitis-laborum-minus',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '00:44:14',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '15:30:03',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '15:31:07',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '20:52:52',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '15:37:52',
                            ],
                        ],
                        'serialize' => [
                            0 => 'deserunt',
                            1 => 'similique',
                            2 => 'ducimus',
                        ],
                    ],
                ],
                1 => [
                    'ProducerInterface' => [
                        'times' => 0,
                        'sendEvent' => 0,
                        'sendCommand' => [
                            'times' => 1,
                        ],
                    ],
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
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
                        'toNative' => 1,
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
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemAddTaskRepository.
     *
     * @return mixed[]
     */
    public function getDataForAddDeleteTaskMethod(): array
    {
        return [
            0 => [
                0 => [
                    'ProducerInterface' => [
                        'sendEvent' => null,
                        'sendCommand' => [
                            'receive' => [
                                'getBody' => 'nulla',
                                'setBody' => null,
                                'setProperties' => null,
                                'getProperties' => 'tempore',
                                'setProperty' => null,
                                'getProperty' => 'tempore',
                                'setHeaders' => null,
                                'getHeaders' => 'tempore',
                                'setHeader' => null,
                                'getHeader' => 'tempore',
                                'setRedelivered' => null,
                                'isRedelivered' => true,
                                'setCorrelationId' => null,
                                'getCorrelationId' => 'nulla',
                                'setMessageId' => null,
                                'getMessageId' => 'nulla',
                                'getTimestamp' => '12:55:26',
                                'setTimestamp' => '08:08:59',
                                'setReplyTo' => null,
                                'getReplyTo' => 'nulla',
                            ],
                            'receiveNoWait' => [
                                'getBody' => 'quasi',
                                'setBody' => null,
                                'setProperties' => null,
                                'getProperties' => 'sunt',
                                'setProperty' => null,
                                'getProperty' => 'sunt',
                                'setHeaders' => null,
                                'getHeaders' => 'sunt',
                                'setHeader' => null,
                                'getHeader' => 'sunt',
                                'setRedelivered' => null,
                                'isRedelivered' => false,
                                'setCorrelationId' => null,
                                'getCorrelationId' => 'quasi',
                                'setMessageId' => null,
                                'getMessageId' => 'quasi',
                                'getTimestamp' => '09:38:37',
                                'setTimestamp' => '07:09:29',
                                'setReplyTo' => null,
                                'getReplyTo' => 'quasi',
                            ],
                            'setDeleteReplyQueue' => 'quae',
                            'isDeleteReplyQueue' => false,
                        ],
                    ],
                    'UUID' => [
                        'toNative' => '0bedd6b0-48f1-3651-9e7c-ae193ce3d098',
                        'getUuid' => [
                            'toString' => 'eab0b4c0-4a7f-3812-ab91-6bc69d274d05',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Uuid' => [
                        'toNative' => '9b51e355-7119-3de9-9830-9a5f7aafea8a',
                        'getUuid' => [
                            'toString' => 'ec2c6db9-4ff7-309e-9d46-27435f670b96',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                ],
                1 => [
                    'ProducerInterface' => [
                        'times' => 0,
                        'sendEvent' => 0,
                        'sendCommand' => [
                            'times' => 1,
                        ],
                    ],
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
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
                ],
            ],
        ];
    }
}
