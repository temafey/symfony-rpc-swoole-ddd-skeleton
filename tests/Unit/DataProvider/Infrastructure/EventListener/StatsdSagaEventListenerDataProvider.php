<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\EventListener;

/**
 * DataProvider for class {testClassName}.
 */
class StatsdSagaEventListenerDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\EventListener\StatsdSagaEventListener.
     *
     * @return mixed[]
     */
    public function getDataForPreHandleSagaMethod(): array
    {
        return [
            0 => [
                0 => [
                    'indexName' => 'Ronaldo Pfannerstill MD',
                    'allowedSagas' => [
                        0 => 'et',
                        1 => 'expedita',
                        2 => 'vel',
                    ],
                    'Statsd' => [
                        'decrement' => null,
                        'timing' => null,
                        'count' => null,
                        'gauge' => null,
                    ],
                    'State' => [
                        'get' => 'officiis',
                        'getId' => 'libero',
                        'getSagaId' => 'libero',
                        'isDone' => false,
                        'isFailed' => false,
                        'isDied' => null,
                        'isInProgress' => false,
                        'getStatus' => 5,
                        'isNew' => false,
                        'serialize' => 'officiis',
                    ],
                    'DomainMessage' => [
                        'getId' => 'et',
                        'getPlayhead' => 5,
                        'getMetadata' => [
                            'all' => [
                                0 => 'nobis',
                                1 => 'animi',
                                2 => 'ducimus',
                            ],
                            'get' => 'laboriosam',
                            'serialize' => 'laboriosam',
                        ],
                        'getPayload' => 'error',
                        'getRecordedOn' => [
                            'toString' => '2003-07-30T15:06:46+00:00',
                            'equals' => true,
                            'comesAfter' => true,
                            'add' => '2003-07-30T15:06:46+00:00',
                            'sub' => '2003-07-30T15:06:46+00:00',
                            'diff' => [
                                'format' => 'aut',
                            ],
                            'toBeginningOfWeek' => '2003-07-30T15:06:46+00:00',
                            'toYearWeekString' => '1979',
                            'toNative' => '2003-07-30T15:06:46+00:00',
                        ],
                        'getType' => 'et',
                    ],
                ],
                1 => [
                    'Statsd' => [
                        'times' => 0,
                        'decrement' => 0,
                        'timing' => 0,
                        'count' => 0,
                        'gauge' => 0,
                    ],
                    'State' => [
                        'times' => 0,
                        'get' => 0,
                        'getId' => 0,
                        'getSagaId' => 0,
                        'isDone' => 0,
                        'isFailed' => 0,
                        'isDied' => 0,
                        'isInProgress' => 0,
                        'getStatus' => 0,
                        'isNew' => 0,
                        'serialize' => 0,
                    ],
                    'DomainMessage' => [
                        'times' => 0,
                        'getId' => 0,
                        'getPlayhead' => 0,
                        'getMetadata' => [
                            'times' => 0,
                            'all' => 0,
                            'get' => 0,
                            'serialize' => 0,
                        ],
                        'getPayload' => 0,
                        'getRecordedOn' => [
                            'times' => 0,
                            'toString' => 0,
                            'equals' => 0,
                            'comesAfter' => 0,
                            'add' => 0,
                            'sub' => 0,
                            'diff' => [
                                'times' => 0,
                                'format' => 0,
                            ],
                            'toBeginningOfWeek' => 0,
                            'toYearWeekString' => 0,
                            'toNative' => 0,
                        ],
                        'getType' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\EventListener\StatsdSagaEventListener.
     *
     * @return mixed[]
     */
    public function getDataForPostHandleSagaMethod(): array
    {
        return [
            0 => [
                0 => [
                    'indexName' => 'Ronaldo Pfannerstill MD',
                    'allowedSagas' => [
                        0 => 'et',
                        1 => 'expedita',
                        2 => 'vel',
                    ],
                    'Statsd' => [
                        'decrement' => null,
                        'timing' => null,
                        'count' => null,
                        'gauge' => null,
                    ],
                    'State' => [
                        'get' => 'sint',
                        'getId' => 'asperiores',
                        'getSagaId' => 'asperiores',
                        'isDone' => false,
                        'isFailed' => false,
                        'isDied' => null,
                        'isInProgress' => false,
                        'getStatus' => 3,
                        'isNew' => false,
                        'serialize' => 'sint',
                    ],
                    'DomainMessage' => [
                        'getId' => 'tempora',
                        'getPlayhead' => 3,
                        'getMetadata' => [
                            'all' => [
                                0 => 'ut',
                                1 => 'est',
                                2 => 'dolore',
                            ],
                            'get' => 'optio',
                            'serialize' => 'optio',
                        ],
                        'getPayload' => 'nesciunt',
                        'getRecordedOn' => [
                            'toString' => '1999-08-03T19:54:22+00:00',
                            'equals' => false,
                            'comesAfter' => false,
                            'add' => '1999-08-03T19:54:22+00:00',
                            'sub' => '1999-08-03T19:54:22+00:00',
                            'diff' => [
                                'format' => 'fugiat',
                            ],
                            'toBeginningOfWeek' => '1999-08-03T19:54:22+00:00',
                            'toYearWeekString' => '2004',
                            'toNative' => '1999-08-03T19:54:22+00:00',
                        ],
                        'getType' => 'tempora',
                    ],
                ],
                1 => [
                    'Statsd' => [
                        'times' => 0,
                        'decrement' => 0,
                        'timing' => 0,
                        'count' => 0,
                        'gauge' => 0,
                    ],
                    'State' => [
                        'times' => 0,
                        'get' => 0,
                        'getId' => 0,
                        'getSagaId' => 0,
                        'isDone' => 0,
                        'isFailed' => 0,
                        'isDied' => 0,
                        'isInProgress' => 0,
                        'getStatus' => 0,
                        'isNew' => 0,
                        'serialize' => 0,
                    ],
                    'DomainMessage' => [
                        'times' => 0,
                        'getId' => 0,
                        'getPlayhead' => 0,
                        'getMetadata' => [
                            'times' => 0,
                            'all' => 0,
                            'get' => 0,
                            'serialize' => 0,
                        ],
                        'getPayload' => 0,
                        'getRecordedOn' => [
                            'times' => 0,
                            'toString' => 0,
                            'equals' => 0,
                            'comesAfter' => 0,
                            'add' => 0,
                            'sub' => 0,
                            'diff' => [
                                'times' => 0,
                                'format' => 0,
                            ],
                            'toBeginningOfWeek' => 0,
                            'toYearWeekString' => 0,
                            'toNative' => 0,
                        ],
                        'getType' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\EventListener\StatsdSagaEventListener.
     *
     * @return mixed[]
     */
    public function getDataForSetStatsdClientMethod(): array
    {
        return [
            0 => [
                0 => [
                    'indexName' => 'Ronaldo Pfannerstill MD',
                    'allowedSagas' => [
                        0 => 'et',
                        1 => 'expedita',
                        2 => 'vel',
                    ],
                    'Statsd' => [
                        'decrement' => null,
                        'timing' => null,
                        'count' => null,
                        'gauge' => null,
                    ],
                ],
                1 => [
                    'Statsd' => [
                        'times' => 0,
                        'decrement' => 0,
                        'timing' => 0,
                        'count' => 0,
                        'gauge' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\EventListener\StatsdSagaEventListener.
     *
     * @return mixed[]
     */
    public function getDataForSetLoggerMethod(): array
    {
        return [
            0 => [
                0 => [
                    'indexName' => 'Ronaldo Pfannerstill MD',
                    'allowedSagas' => [
                        0 => 'et',
                        1 => 'expedita',
                        2 => 'vel',
                    ],
                    'Statsd' => [
                        'decrement' => null,
                        'timing' => null,
                        'count' => null,
                        'gauge' => null,
                    ],
                    'setLogger' => [
                        'preHandleSaga' => null,
                        'postHandleSaga' => null,
                        'setStatsdClient' => null,
                        'getExceptionLevel' => 8,
                        'getExceptionMessage' => 'odio',
                        'getParentException' => [
                            'getMessage' => 'minima',
                            'getCode' => 'minima',
                            'getFile' => 'minima',
                            'getLine' => 'minima',
                            'getTrace' => 'minima',
                            'getPrevious' => 'minima',
                            'getTraceAsString' => 'minima',
                        ],
                        'getParentExceptionContext' => 'Aliquid libero aperiam laudantium nisi repellat voluptas dolores. Nihil facere optio voluptas occaecati itaque enim. Culpa corporis ut est quis delectus vel dolore.',
                        'className' => 'MasterData\\Api\\RpcSkeleton\\Infrastructure\\EventListener\\StatsdSagaEventListener',
                    ],
                    'LoggerInterface' => [
                        'emergency' => null,
                        'alert' => null,
                        'critical' => null,
                        'error' => null,
                        'warning' => null,
                        'notice' => null,
                        'info' => null,
                        'debug' => null,
                        'log' => null,
                    ],
                ],
                1 => [
                    'Statsd' => [
                        'times' => 0,
                        'decrement' => 0,
                        'timing' => 0,
                        'count' => 0,
                        'gauge' => 0,
                    ],
                    'setLogger' => [
                        'times' => 0,
                        'preHandleSaga' => 0,
                        'postHandleSaga' => 0,
                        'setStatsdClient' => 0,
                        'getExceptionLevel' => 0,
                        'getExceptionMessage' => 0,
                        'getParentException' => [
                            'times' => 0,
                            'getMessage' => 0,
                            'getCode' => 0,
                            'getFile' => 0,
                            'getLine' => 0,
                            'getTrace' => 0,
                            'getPrevious' => 0,
                            'getTraceAsString' => 0,
                        ],
                        'getParentExceptionContext' => 0,
                        'className' => 'MasterData\\Api\\RpcSkeleton\\Infrastructure\\EventListener\\StatsdSagaEventListener',
                    ],
                    'LoggerInterface' => [
                        'times' => 0,
                        'emergency' => 0,
                        'alert' => 0,
                        'critical' => 0,
                        'error' => 0,
                        'warning' => 0,
                        'notice' => 0,
                        'info' => 0,
                        'debug' => 0,
                        'log' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\EventListener\StatsdSagaEventListener.
     *
     * @return mixed[]
     */
    public function getDataForLogMessageMethod(): array
    {
        return [
            0 => [
                0 => [
                    'indexName' => 'Ronaldo Pfannerstill MD',
                    'allowedSagas' => [
                        0 => 'et',
                        1 => 'expedita',
                        2 => 'vel',
                    ],
                    'Statsd' => [
                        'decrement' => null,
                        'timing' => null,
                        'count' => null,
                        'gauge' => null,
                    ],
                    'logMessage' => [
                        'preHandleSaga' => null,
                        'postHandleSaga' => null,
                        'setStatsdClient' => null,
                        'getExceptionLevel' => 8,
                        'getExceptionMessage' => 'cumque',
                        'getParentException' => [
                            'getMessage' => 'et',
                            'getCode' => 'et',
                            'getFile' => 'et',
                            'getLine' => 'et',
                            'getTrace' => 'et',
                            'getPrevious' => 'et',
                            'getTraceAsString' => 'et',
                        ],
                        'getParentExceptionContext' => 'Aut consectetur necessitatibus voluptatem rerum. Autem qui ut beatae maiores sint commodi error. Qui quis rerum numquam dolor.',
                        'className' => 'MasterData\\Api\\RpcSkeleton\\Infrastructure\\EventListener\\StatsdSagaEventListener',
                    ],
                    'message' => 'dolorem',
                    'level' => 2,
                    'context' => 'Eum laudantium eveniet rem cumque voluptas. Dignissimos dolores provident repellat soluta. Nemo suscipit odio numquam eos.',
                ],
                1 => [
                    'Statsd' => [
                        'times' => 0,
                        'decrement' => 0,
                        'timing' => 0,
                        'count' => 0,
                        'gauge' => 0,
                    ],
                    'logMessage' => [
                        'times' => 0,
                        'preHandleSaga' => 0,
                        'postHandleSaga' => 0,
                        'setStatsdClient' => 0,
                        'getExceptionLevel' => 0,
                        'getExceptionMessage' => 0,
                        'getParentException' => [
                            'times' => 0,
                            'getMessage' => 0,
                            'getCode' => 0,
                            'getFile' => 0,
                            'getLine' => 0,
                            'getTrace' => 0,
                            'getPrevious' => 0,
                            'getTraceAsString' => 0,
                        ],
                        'getParentExceptionContext' => 0,
                        'className' => 'MasterData\\Api\\RpcSkeleton\\Infrastructure\\EventListener\\StatsdSagaEventListener',
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\EventListener\StatsdSagaEventListener.
     *
     * @return mixed[]
     */
    public function getDataForLogExceptionMethod(): array
    {
        return [
            0 => [
                0 => [
                    'indexName' => 'Ronaldo Pfannerstill MD',
                    'allowedSagas' => [
                        0 => 'et',
                        1 => 'expedita',
                        2 => 'vel',
                    ],
                    'Statsd' => [
                        'decrement' => null,
                        'timing' => null,
                        'count' => null,
                        'gauge' => null,
                    ],
                    'logException' => [
                        'preHandleSaga' => null,
                        'postHandleSaga' => null,
                        'setStatsdClient' => null,
                        'getExceptionLevel' => 8,
                        'getExceptionMessage' => 'consequatur',
                        'getParentException' => [
                            'getMessage' => 'et',
                            'getCode' => 'et',
                            'getFile' => 'et',
                            'getLine' => 'et',
                            'getTrace' => 'et',
                            'getPrevious' => 'et',
                            'getTraceAsString' => 'et',
                        ],
                        'getParentExceptionContext' => 'Nostrum quia blanditiis itaque ut voluptatem. Sit veniam ipsam nostrum hic quia. Delectus fugiat quas provident repellat culpa quae perspiciatis accusantium.',
                        'className' => 'MasterData\\Api\\RpcSkeleton\\Infrastructure\\EventListener\\StatsdSagaEventListener',
                    ],
                    'Throwable' => [
                        'getMessage' => 'voluptate',
                        'getCode' => 'voluptate',
                        'getFile' => 'voluptate',
                        'getLine' => 'voluptate',
                        'getTrace' => 'voluptate',
                        'getPrevious' => 'voluptate',
                        'getTraceAsString' => 'voluptate',
                    ],
                    'level' => 1,
                    'message' => 'officia',
                ],
                1 => [
                    'Statsd' => [
                        'times' => 0,
                        'decrement' => 0,
                        'timing' => 0,
                        'count' => 0,
                        'gauge' => 0,
                    ],
                    'logException' => [
                        'times' => 0,
                        'preHandleSaga' => 0,
                        'postHandleSaga' => 0,
                        'setStatsdClient' => 0,
                        'getExceptionLevel' => 0,
                        'getExceptionMessage' => 0,
                        'getParentException' => [
                            'times' => 0,
                            'getMessage' => 0,
                            'getCode' => 0,
                            'getFile' => 0,
                            'getLine' => 0,
                            'getTrace' => 0,
                            'getPrevious' => 0,
                            'getTraceAsString' => 0,
                        ],
                        'getParentExceptionContext' => 0,
                        'className' => 'MasterData\\Api\\RpcSkeleton\\Infrastructure\\EventListener\\StatsdSagaEventListener',
                    ],
                    'Throwable' => [
                        'times' => 0,
                        'getMessage' => 0,
                        'getCode' => 0,
                        'getFile' => 0,
                        'getLine' => 0,
                        'getTrace' => 0,
                        'getPrevious' => 0,
                        'getTraceAsString' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\EventListener\StatsdSagaEventListener.
     *
     * @return mixed[]
     */
    public function getDataForGetExceptionLevelMethod(): array
    {
        return [
            0 => [
                0 => [
                    'indexName' => 'Ronaldo Pfannerstill MD',
                    'allowedSagas' => [
                        0 => 'et',
                        1 => 'expedita',
                        2 => 'vel',
                    ],
                    'Statsd' => [
                        'decrement' => null,
                        'timing' => null,
                        'count' => null,
                        'gauge' => null,
                    ],
                    'getExceptionLevel' => 3,
                    'Throwable' => [
                        'getMessage' => 'eum',
                        'getCode' => 'eum',
                        'getFile' => 'eum',
                        'getLine' => 'eum',
                        'getTrace' => 'eum',
                        'getPrevious' => 'eum',
                        'getTraceAsString' => 'eum',
                    ],
                ],
                1 => [
                    'Statsd' => [
                        'times' => 0,
                        'decrement' => 0,
                        'timing' => 0,
                        'count' => 0,
                        'gauge' => 0,
                    ],
                    'getExceptionLevel' => 0,
                    'Throwable' => [
                        'times' => 0,
                        'getMessage' => 0,
                        'getCode' => 0,
                        'getFile' => 0,
                        'getLine' => 0,
                        'getTrace' => 0,
                        'getPrevious' => 0,
                        'getTraceAsString' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\EventListener\StatsdSagaEventListener.
     *
     * @return mixed[]
     */
    public function getDataForGetExceptionMessageMethod(): array
    {
        return [
            0 => [
                0 => [
                    'indexName' => 'Ronaldo Pfannerstill MD',
                    'allowedSagas' => [
                        0 => 'et',
                        1 => 'expedita',
                        2 => 'vel',
                    ],
                    'Statsd' => [
                        'decrement' => null,
                        'timing' => null,
                        'count' => null,
                        'gauge' => null,
                    ],
                    'getExceptionMessage' => 'aperiam',
                    'Throwable' => [
                        'getMessage' => 'et',
                        'getCode' => 'et',
                        'getFile' => 'et',
                        'getLine' => 'et',
                        'getTrace' => 'et',
                        'getPrevious' => 'et',
                        'getTraceAsString' => 'et',
                    ],
                ],
                1 => [
                    'Statsd' => [
                        'times' => 0,
                        'decrement' => 0,
                        'timing' => 0,
                        'count' => 0,
                        'gauge' => 0,
                    ],
                    'getExceptionMessage' => 0,
                    'Throwable' => [
                        'times' => 0,
                        'getMessage' => 0,
                        'getCode' => 0,
                        'getFile' => 0,
                        'getLine' => 0,
                        'getTrace' => 0,
                        'getPrevious' => 0,
                        'getTraceAsString' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\EventListener\StatsdSagaEventListener.
     *
     * @return mixed[]
     */
    public function getDataForGetParentExceptionMethod(): array
    {
        return [
            0 => [
                0 => [
                    'indexName' => 'Ronaldo Pfannerstill MD',
                    'allowedSagas' => [
                        0 => 'et',
                        1 => 'expedita',
                        2 => 'vel',
                    ],
                    'Statsd' => [
                        'decrement' => null,
                        'timing' => null,
                        'count' => null,
                        'gauge' => null,
                    ],
                    'getParentException' => [
                        'getMessage' => 'recusandae',
                        'getCode' => 'recusandae',
                        'getFile' => 'recusandae',
                        'getLine' => 'recusandae',
                        'getTrace' => 'recusandae',
                        'getPrevious' => 'recusandae',
                        'getTraceAsString' => 'recusandae',
                        'className' => 'Throwable',
                    ],
                ],
                1 => [
                    'Statsd' => [
                        'times' => 0,
                        'decrement' => 0,
                        'timing' => 0,
                        'count' => 0,
                        'gauge' => 0,
                    ],
                    'getParentException' => [
                        'times' => 0,
                        'getMessage' => 0,
                        'getCode' => 0,
                        'getFile' => 0,
                        'getLine' => 0,
                        'getTrace' => 0,
                        'getPrevious' => 0,
                        'getTraceAsString' => 0,
                        'className' => 'Throwable',
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\EventListener\StatsdSagaEventListener.
     *
     * @return mixed[]
     */
    public function getDataForGetParentExceptionContextMethod(): array
    {
        return [
            0 => [
                0 => [
                    'indexName' => 'Ronaldo Pfannerstill MD',
                    'allowedSagas' => [
                        0 => 'et',
                        1 => 'expedita',
                        2 => 'vel',
                    ],
                    'Statsd' => [
                        'decrement' => null,
                        'timing' => null,
                        'count' => null,
                        'gauge' => null,
                    ],
                    'getParentExceptionContext' => [
                        0 => 'Accusamus porro aut molestias. Hic vero dicta sint atque recusandae aut iusto. Est et similique est praesentium reiciendis tempora voluptatibus.',
                    ],
                    'context' => 'Ducimus est et doloribus magnam. Impedit qui aperiam id quo. Voluptatum blanditiis quis officia pariatur est expedita. Voluptas atque dicta corporis.',
                    'contextSerializeType' => 'Nam et ab et tempore itaque. Earum quas saepe neque iste tempore totam. Voluptatem quis aut voluptate consequatur nostrum voluptatibus id ut.',
                ],
                1 => [
                    'Statsd' => [
                        'times' => 0,
                        'decrement' => 0,
                        'timing' => 0,
                        'count' => 0,
                        'gauge' => 0,
                    ],
                    'getParentExceptionContext' => 0,
                ],
            ],
        ];
    }
}
