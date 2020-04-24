<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\Storage;

/**
 * DataProvider for class {testClassName}.
 */
class DBALReadModelStoreDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore.
     *
     * @return mixed[]
     */
    public function getDataForFindOneMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Connection' => [
                        'delete' => 8,
                        'update' => '2006-12-22',
                        'insert' => 8,
                        'prepare' => [
                            'bindValue' => true,
                            'bindParam' => true,
                            'errorCode' => 'ex',
                            'errorInfo' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'execute' => true,
                            'rowCount' => 9,
                            'closeCursor' => true,
                            'columnCount' => 9,
                            'setFetchMode' => true,
                            'fetch' => [
                                'uuid' => '7aea87a8-b478-39ff-b28f-20b7c5d75aad',
                                'name' => 'Amir Wintheiser',
                                'parentId' => 2,
                                'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                                'status' => 2,
                                'createdAt' => '1992-04-21',
                                'updatedAt' => '2016-01-03',
                            ],
                            'fetchAll' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'fetchColumn' => 'vitae',
                        ],
                        'beginTransaction' => 'minima',
                        'commit' => 'minima',
                        'rollBack' => 'minima',
                    ],
                    'tableName' => 'Wilfred Schulist',
                    'primaryKey' => 'quas',
                    'findOne' => [
                        'uuid' => '7aea87a8-b478-39ff-b28f-20b7c5d75aad',
                        'name' => 'Amir Wintheiser',
                        'parentId' => 2,
                        'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                        'status' => 2,
                        'createdAt' => '1992-04-21',
                        'updatedAt' => '2016-01-03',
                    ],
                    'uuid' => '7aea87a8-b478-39ff-b28f-20b7c5d75aad',
                ],
                1 => [
                    'Connection' => [
                        'times' => 0,
                        'delete' => 0,
                        'update' => 0,
                        'insert' => 0,
                        'prepare' => [
                            'times' => 1,
                            'bindValue' => 1,
                            'bindParam' => 0,
                            'errorCode' => 0,
                            'errorInfo' => 0,
                            'execute' => 1,
                            'rowCount' => 0,
                            'closeCursor' => 0,
                            'columnCount' => 0,
                            'setFetchMode' => 0,
                            'fetch' => 1,
                            'fetchAll' => 0,
                            'fetchColumn' => 0,
                        ],
                        'beginTransaction' => 0,
                        'commit' => 0,
                        'rollBack' => 0,
                    ],
                    'findOne' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore.
     *
     * @return mixed[]
     */
    public function getDataForFindAllMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Connection' => [
                        'delete' => 8,
                        'update' => '2006-12-22',
                        'insert' => 8,
                        'prepare' => [
                            'bindValue' => true,
                            'bindParam' => true,
                            'errorCode' => 'ex',
                            'errorInfo' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'execute' => true,
                            'rowCount' => 9,
                            'closeCursor' => true,
                            'columnCount' => 9,
                            'setFetchMode' => true,
                            'fetch' => 'vitae',
                            'fetchAll' => [
                                0 => [
                                    'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                                    'name' => 'Amir Wintheiser',
                                    'parentId' => 2,
                                    'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                                    'status' => 2,
                                    'createdAt' => '1992-04-21',
                                    'updatedAt' => '2016-01-03',
                                ],
                                1 => [
                                    'uuid' => '367da075-c818-3e21-88b5-17e27d836472',
                                    'name' => 'Prof. Tristian Harber',
                                    'parentId' => 0,
                                    'url' => 'http://www.runolfsson.com/accusantium-aliquid-perspiciatis-sint-perferendis-ratione-et-beatae.html',
                                    'status' => 3,
                                    'createdAt' => '1980-03-10',
                                    'updatedAt' => '1982-10-08',
                                ],
                            ],
                            'fetchColumn' => 'vitae',
                        ],
                        'beginTransaction' => 'minima',
                        'commit' => 'minima',
                        'rollBack' => 'minima',
                    ],
                    'tableName' => 'Wilfred Schulist',
                    'primaryKey' => 'quas',
                    'findAll' => [
                        0 => [
                            'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                            'name' => 'Amir Wintheiser',
                            'parentId' => 2,
                            'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                            'status' => 2,
                            'createdAt' => '1992-04-21',
                            'updatedAt' => '2016-01-03',
                        ],
                        1 => [
                            'uuid' => '367da075-c818-3e21-88b5-17e27d836472',
                            'name' => 'Prof. Tristian Harber',
                            'parentId' => 0,
                            'url' => 'http://www.runolfsson.com/accusantium-aliquid-perspiciatis-sint-perferendis-ratione-et-beatae.html',
                            'status' => 3,
                            'createdAt' => '1980-03-10',
                            'updatedAt' => '1982-10-08',
                        ],
                    ],
                ],
                1 => [
                    'Connection' => [
                        'times' => 0,
                        'delete' => 0,
                        'update' => 0,
                        'insert' => 0,
                        'prepare' => [
                            'times' => 1,
                            'bindValue' => 0,
                            'bindParam' => 0,
                            'errorCode' => 0,
                            'errorInfo' => 0,
                            'execute' => 1,
                            'rowCount' => 0,
                            'closeCursor' => 0,
                            'columnCount' => 0,
                            'setFetchMode' => 0,
                            'fetch' => 0,
                            'fetchAll' => 1,
                            'fetchColumn' => 0,
                        ],
                        'beginTransaction' => 0,
                        'commit' => 0,
                        'rollBack' => 0,
                    ],
                    'findAll' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore.
     *
     * @return mixed[]
     */
    public function getDataForFindByMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Connection' => [
                        'delete' => 8,
                        'update' => '2006-12-22',
                        'insert' => 8,
                        'prepare' => [
                            'bindValue' => true,
                            'bindParam' => true,
                            'errorCode' => 'ex',
                            'errorInfo' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'execute' => true,
                            'rowCount' => 9,
                            'closeCursor' => true,
                            'columnCount' => 9,
                            'setFetchMode' => true,
                            'fetch' => 'vitae',
                            'fetchAll' => [
                                0 => [
                                    'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                                    'name' => 'Amir Wintheiser',
                                    'parentId' => 2,
                                    'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                                    'status' => 2,
                                    'createdAt' => '1992-04-21',
                                    'updatedAt' => '2016-01-03',
                                ],
                                1 => [
                                    'uuid' => '367da075-c818-3e21-88b5-17e27d836472',
                                    'name' => 'Prof. Tristian Harber',
                                    'parentId' => 0,
                                    'url' => 'http://www.runolfsson.com/accusantium-aliquid-perspiciatis-sint-perferendis-ratione-et-beatae.html',
                                    'status' => 3,
                                    'createdAt' => '1980-03-10',
                                    'updatedAt' => '1982-10-08',
                                ],
                            ],
                            'fetchColumn' => 'vitae',
                        ],
                        'beginTransaction' => 'minima',
                        'commit' => 'minima',
                        'rollBack' => 'minima',
                    ],
                    'tableName' => 'Wilfred Schulist',
                    'primaryKey' => 'quas',
                    'findBy' => [
                        0 => [
                            'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                            'name' => 'Amir Wintheiser',
                            'parentId' => 2,
                            'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                            'status' => 2,
                            'createdAt' => '1992-04-21',
                            'updatedAt' => '2016-01-03',
                        ],
                        1 => [
                            'uuid' => '367da075-c818-3e21-88b5-17e27d836472',
                            'name' => 'Prof. Tristian Harber',
                            'parentId' => 0,
                            'url' => 'http://www.runolfsson.com/accusantium-aliquid-perspiciatis-sint-perferendis-ratione-et-beatae.html',
                            'status' => 3,
                            'createdAt' => '1980-03-10',
                            'updatedAt' => '1982-10-08',
                        ],
                    ],
                    'criteria' => [
                        0 => 'magnam',
                        1 => 'odio',
                        2 => 'qui',
                    ],
                    'orderBy' => [
                        0 => 'minima',
                        1 => 'fugiat',
                        2 => 'aut',
                    ],
                    'limit' => [
                        0 => 'vero',
                        1 => 'suscipit',
                        2 => 'perferendis',
                    ],
                    'offset' => [
                        0 => 'ipsum',
                        1 => 'doloribus',
                        2 => 'atque',
                    ],
                ],
                1 => [
                    'Connection' => [
                        'times' => 0,
                        'delete' => 0,
                        'update' => 0,
                        'insert' => 0,
                        'prepare' => [
                            'times' => 1,
                            'bindValue' => 3,
                            'bindParam' => 0,
                            'errorCode' => 0,
                            'errorInfo' => 0,
                            'execute' => 1,
                            'rowCount' => 0,
                            'closeCursor' => 0,
                            'columnCount' => 0,
                            'setFetchMode' => 0,
                            'fetch' => 0,
                            'fetchAll' => 1,
                            'fetchColumn' => 0,
                        ],
                        'beginTransaction' => 0,
                        'commit' => 0,
                        'rollBack' => 0,
                    ],
                    'findBy' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore.
     *
     * @return mixed[]
     */
    public function getDataForFindOneByMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Connection' => [
                        'delete' => 8,
                        'update' => '2006-12-22',
                        'insert' => 8,
                        'prepare' => [
                            'bindValue' => true,
                            'bindParam' => true,
                            'errorCode' => 'ex',
                            'errorInfo' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'execute' => true,
                            'rowCount' => 9,
                            'closeCursor' => true,
                            'columnCount' => 9,
                            'setFetchMode' => true,
                            'fetch' => [
                                'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                                'name' => 'Amir Wintheiser',
                                'parentId' => 2,
                                'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                                'status' => 2,
                                'createdAt' => '1992-04-21',
                                'updatedAt' => '2016-01-03',
                            ],
                            'fetchAll' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'fetchColumn' => 'vitae',
                        ],
                        'beginTransaction' => 'minima',
                        'commit' => 'minima',
                        'rollBack' => 'minima',
                    ],
                    'tableName' => 'Wilfred Schulist',
                    'primaryKey' => 'quas',
                    'findOneBy' => [
                        'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                        'name' => 'Amir Wintheiser',
                        'parentId' => 2,
                        'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                        'status' => 2,
                        'createdAt' => '1992-04-21',
                        'updatedAt' => '2016-01-03',
                    ],
                    'criteria' => [
                        0 => 'enim',
                        1 => 'id',
                        2 => 'dicta',
                    ],
                ],
                1 => [
                    'Connection' => [
                        'times' => 0,
                        'delete' => 0,
                        'update' => 0,
                        'insert' => 0,
                        'prepare' => [
                            'times' => 1,
                            'bindValue' => 3,
                            'bindParam' => 0,
                            'errorCode' => 0,
                            'errorInfo' => 0,
                            'execute' => 1,
                            'rowCount' => 0,
                            'closeCursor' => 0,
                            'columnCount' => 0,
                            'setFetchMode' => 0,
                            'fetch' => 1,
                            'fetchAll' => 0,
                            'fetchColumn' => 0,
                        ],
                        'beginTransaction' => 0,
                        'commit' => 0,
                        'rollBack' => 0,
                    ],
                    'findOneBy' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore.
     *
     * @return mixed[]
     */
    public function getDataForInsertOneMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Connection' => [
                        'delete' => 8,
                        'update' => '2006-12-22',
                        'insert' => 8,
                        'prepare' => [
                            'bindValue' => true,
                            'bindParam' => true,
                            'errorCode' => 'ex',
                            'errorInfo' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'execute' => true,
                            'rowCount' => 9,
                            'closeCursor' => true,
                            'columnCount' => 9,
                            'setFetchMode' => true,
                            'fetch' => 'vitae',
                            'fetchAll' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'fetchColumn' => 'vitae',
                        ],
                        'beginTransaction' => 'minima',
                        'commit' => 'minima',
                        'rollBack' => 'minima',
                    ],
                    'tableName' => 'Wilfred Schulist',
                    'primaryKey' => 'quas',
                    'EntityInterface' => [
                        'getPrimaryKeyValue' => 'cum',
                        'normalize' => [
                            'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                            'name' => 'Amir Wintheiser',
                            'parentId' => 2,
                            'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                            'status' => 2,
                            'createdAt' => '1992-04-21',
                            'updatedAt' => '2016-01-03',
                        ],
                    ],
                ],
                1 => [
                    'Connection' => [
                        'times' => 0,
                        'delete' => 0,
                        'update' => 0,
                        'insert' => 1,
                        'prepare' => [
                            'times' => 0,
                            'bindValue' => 0,
                            'bindParam' => 0,
                            'errorCode' => 0,
                            'errorInfo' => 0,
                            'execute' => 0,
                            'rowCount' => 0,
                            'closeCursor' => 0,
                            'columnCount' => 0,
                            'setFetchMode' => 0,
                            'fetch' => 0,
                            'fetchAll' => 0,
                            'fetchColumn' => 0,
                        ],
                        'beginTransaction' => 1,
                        'commit' => 1,
                        'rollBack' => 0,
                    ],
                    'EntityInterface' => [
                        'times' => 0,
                        'getPrimaryKeyValue' => 1,
                        'normalize' => 1,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore.
     *
     * @return mixed[]
     */
    public function getDataForUpdateOneMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Connection' => [
                        'delete' => 8,
                        'update' => '2006-12-22',
                        'insert' => 8,
                        'prepare' => [
                            'bindValue' => true,
                            'bindParam' => true,
                            'errorCode' => 'ex',
                            'errorInfo' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'execute' => true,
                            'rowCount' => 9,
                            'closeCursor' => true,
                            'columnCount' => 9,
                            'setFetchMode' => true,
                            'fetch' => 'vitae',
                            'fetchAll' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'fetchColumn' => 'vitae',
                        ],
                        'beginTransaction' => 'minima',
                        'commit' => 'minima',
                        'rollBack' => 'minima',
                    ],
                    'tableName' => 'Wilfred Schulist',
                    'primaryKey' => 'quas',
                    'EntityInterface' => [
                        'getPrimaryKeyValue' => 'quae',
                        'normalize' => [
                            'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                            'name' => 'Amir Wintheiser',
                            'parentId' => 2,
                            'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                            'status' => 2,
                            'createdAt' => '1992-04-21',
                            'updatedAt' => '2016-01-03',
                        ],
                    ],
                ],
                1 => [
                    'Connection' => [
                        'times' => 0,
                        'delete' => 0,
                        'update' => 1,
                        'insert' => 0,
                        'prepare' => [
                            'times' => 0,
                            'bindValue' => 0,
                            'bindParam' => 0,
                            'errorCode' => 0,
                            'errorInfo' => 0,
                            'execute' => 0,
                            'rowCount' => 0,
                            'closeCursor' => 0,
                            'columnCount' => 0,
                            'setFetchMode' => 0,
                            'fetch' => 0,
                            'fetchAll' => 0,
                            'fetchColumn' => 0,
                        ],
                        'beginTransaction' => 1,
                        'commit' => 1,
                        'rollBack' => 0,
                    ],
                    'EntityInterface' => [
                        'times' => 0,
                        'getPrimaryKeyValue' => 1,
                        'normalize' => 1,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore.
     *
     * @return mixed[]
     */
    public function getDataForDeleteOneMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Connection' => [
                        'delete' => 8,
                        'update' => '2006-12-22',
                        'insert' => 8,
                        'prepare' => [
                            'bindValue' => true,
                            'bindParam' => true,
                            'errorCode' => 'ex',
                            'errorInfo' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'execute' => true,
                            'rowCount' => 9,
                            'closeCursor' => true,
                            'columnCount' => 9,
                            'setFetchMode' => true,
                            'fetch' => 'vitae',
                            'fetchAll' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'fetchColumn' => 'vitae',
                        ],
                        'beginTransaction' => 'minima',
                        'commit' => 'minima',
                        'rollBack' => 'minima',
                    ],
                    'tableName' => 'Wilfred Schulist',
                    'primaryKey' => 'quas',
                    'EntityInterface' => [
                        'getPrimaryKeyValue' => 'quis',
                        'normalize' => [
                            0 => 'ea',
                            1 => 'aspernatur',
                            2 => 'quasi',
                        ],
                    ],
                ],
                1 => [
                    'Connection' => [
                        'times' => 0,
                        'delete' => 1,
                        'update' => 0,
                        'insert' => 0,
                        'prepare' => [
                            'times' => 0,
                            'bindValue' => 0,
                            'bindParam' => 0,
                            'errorCode' => 0,
                            'errorInfo' => 0,
                            'execute' => 0,
                            'rowCount' => 0,
                            'closeCursor' => 0,
                            'columnCount' => 0,
                            'setFetchMode' => 0,
                            'fetch' => 0,
                            'fetchAll' => 0,
                            'fetchColumn' => 0,
                        ],
                        'beginTransaction' => 1,
                        'commit' => 1,
                        'rollBack' => 0,
                    ],
                    'EntityInterface' => [
                        'times' => 0,
                        'getPrimaryKeyValue' => 1,
                        'normalize' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore.
     *
     * @return mixed[]
     */
    public function getDataForConfigureSchemaMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Connection' => [
                        'delete' => 8,
                        'update' => '2006-12-22',
                        'insert' => 8,
                        'prepare' => [
                            'bindValue' => true,
                            'bindParam' => true,
                            'errorCode' => 'ex',
                            'errorInfo' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'execute' => true,
                            'rowCount' => 9,
                            'closeCursor' => true,
                            'columnCount' => 9,
                            'setFetchMode' => true,
                            'fetch' => 'vitae',
                            'fetchAll' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'fetchColumn' => 'vitae',
                        ],
                        'beginTransaction' => 'minima',
                        'commit' => 'minima',
                        'rollBack' => 'minima',
                    ],
                    'tableName' => 'Wilfred Schulist',
                    'primaryKey' => 'quas',
                    'configureSchema' => null,
                    'Schema' => [
                    ],
                ],
                1 => [
                    'Connection' => [
                        'times' => 0,
                        'delete' => 0,
                        'update' => 0,
                        'insert' => 0,
                        'prepare' => [
                            'times' => 0,
                            'bindValue' => 0,
                            'bindParam' => 0,
                            'errorCode' => 0,
                            'errorInfo' => 0,
                            'execute' => 0,
                            'rowCount' => 0,
                            'closeCursor' => 0,
                            'columnCount' => 0,
                            'setFetchMode' => 0,
                            'fetch' => 0,
                            'fetchAll' => 0,
                            'fetchColumn' => 0,
                        ],
                        'beginTransaction' => 0,
                        'commit' => 0,
                        'rollBack' => 0,
                    ],
                    'configureSchema' => 0,
                    'Schema' => [
                        'times' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore.
     *
     * @return mixed[]
     */
    public function getDataForConfigureTableMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Connection' => [
                        'delete' => 8,
                        'update' => '2006-12-22',
                        'insert' => 8,
                        'prepare' => [
                            'bindValue' => true,
                            'bindParam' => true,
                            'errorCode' => 'ex',
                            'errorInfo' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'execute' => true,
                            'rowCount' => 9,
                            'closeCursor' => true,
                            'columnCount' => 9,
                            'setFetchMode' => true,
                            'fetch' => 'vitae',
                            'fetchAll' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'fetchColumn' => 'vitae',
                        ],
                        'beginTransaction' => 'minima',
                        'commit' => 'minima',
                        'rollBack' => 'minima',
                    ],
                    'tableName' => 'Wilfred Schulist',
                    'primaryKey' => 'quas',
                    'configureTable' => null,
                    'Schema' => [
                    ],
                ],
                1 => [
                    'Connection' => [
                        'times' => 0,
                        'delete' => 0,
                        'update' => 0,
                        'insert' => 0,
                        'prepare' => [
                            'times' => 0,
                            'bindValue' => 0,
                            'bindParam' => 0,
                            'errorCode' => 0,
                            'errorInfo' => 0,
                            'execute' => 0,
                            'rowCount' => 0,
                            'closeCursor' => 0,
                            'columnCount' => 0,
                            'setFetchMode' => 0,
                            'fetch' => 0,
                            'fetchAll' => 0,
                            'fetchColumn' => 0,
                        ],
                        'beginTransaction' => 0,
                        'commit' => 0,
                        'rollBack' => 0,
                    ],
                    'configureTable' => 0,
                    'Schema' => [
                        'times' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore.
     *
     * @return mixed[]
     */
    public function getDataForToSnakeCaseMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Connection' => [
                        'delete' => 8,
                        'update' => '2006-12-22',
                        'insert' => 8,
                        'prepare' => [
                            'bindValue' => true,
                            'bindParam' => true,
                            'errorCode' => 'ex',
                            'errorInfo' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'execute' => true,
                            'rowCount' => 9,
                            'closeCursor' => true,
                            'columnCount' => 9,
                            'setFetchMode' => true,
                            'fetch' => 'vitae',
                            'fetchAll' => [
                                0 => 'labore',
                                1 => 'officia',
                                2 => 'fuga',
                            ],
                            'fetchColumn' => 'vitae',
                        ],
                        'beginTransaction' => 'minima',
                        'commit' => 'minima',
                        'rollBack' => 'minima',
                    ],
                    'tableName' => 'Wilfred Schulist',
                    'primaryKey' => 'quas',
                    'toSnakeCase' => 'atque',
                    'str' => 'quae',
                    'glue' => 'doloribus',
                ],
                1 => [
                    'Connection' => [
                        'times' => 0,
                        'delete' => 0,
                        'update' => 0,
                        'insert' => 0,
                        'prepare' => [
                            'times' => 0,
                            'bindValue' => 0,
                            'bindParam' => 0,
                            'errorCode' => 0,
                            'errorInfo' => 0,
                            'execute' => 0,
                            'rowCount' => 0,
                            'closeCursor' => 0,
                            'columnCount' => 0,
                            'setFetchMode' => 0,
                            'fetch' => 0,
                            'fetchAll' => 0,
                            'fetchColumn' => 0,
                        ],
                        'beginTransaction' => 0,
                        'commit' => 0,
                        'rollBack' => 0,
                    ],
                    'toSnakeCase' => 0,
                ],
            ],
        ];
    }
}
