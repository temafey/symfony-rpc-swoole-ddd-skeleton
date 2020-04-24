<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository;

/**
 * DataProvider for class {testClassName}.
 */
class QueryRepositoryDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\QueryRepository.
     *
     * @return mixed[]
     */
    public function getDataForFindByUuidMethod(): array
    {
        return [
            0 => [
                0 => [
                    'ReadModelStoreInterface' => [
                        'findOne' => [
                            'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                            'name' => 'Amir Wintheiser',
                            'parentId' => 2,
                            'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                            'status' => 2,
                            'createdAt' => '1992-04-21',
                            'updatedAt' => '2016-01-03',
                        ],
                        'findAll' => [
                            [
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
                                    'version' => '1',
                                    'name' => 'Prof. Tristian Harber',
                                    'parentId' => 0,
                                    'url' => 'http://www.runolfsson.com/accusantium-aliquid-perspiciatis-sint-perferendis-ratione-et-beatae.html',
                                    'status' => 3,
                                    'createdAt' => '1980-03-10',
                                    'updatedAt' => '1982-10-08',
                                ],
                            ],
                        ],
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
                        'findOneBy' => [
                            'uuid' => '367da075-c818-3e21-88b5-17e27d836472',
                            'name' => 'Prof. Tristian Harber',
                            'parentId' => 0,
                            'url' => 'http://www.runolfsson.com/accusantium-aliquid-perspiciatis-sint-perferendis-ratione-et-beatae.html',
                            'status' => 3,
                            'createdAt' => '1980-03-10',
                            'updatedAt' => '1982-10-08',
                        ],
                        'insertOne' => null,
                        'updateOne' => '1973-07-03',
                        'deleteOne' => null,
                    ],
                    'ValueObjectFactory' => [
                        'makeItem' => [
                            'toArray' => [
                                0 => 'nam',
                                1 => 'debitis',
                                2 => 'voluptatum',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'nam',
                                1 => 'debitis',
                                2 => 'voluptatum',
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                                'inc' => [
                                    'sameValueAs' => true,
                                    'toNative' => 9,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 1,
                                ],
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                                'inc' => [
                                    'sameValueAs' => true,
                                    'toNative' => 6,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 7,
                                ],
                            ],
                            'getName' => [
                                'toNative' => 'Elaina Bernhard',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 9,
                                'inc' => [
                                    'sameValueAs' => true,
                                    'toNative' => 7,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 2,
                                ],
                            ],
                            'getUrl' => [
                                'toNative' => 'http://www.wyman.com/ut-dolores-esse-ut-impedit',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '15:37:36',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '01:25:47',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '17:22:12',
                                ],
                            ],
                            'serialize' => [
                                0 => 'nam',
                                1 => 'debitis',
                                2 => 'voluptatum',
                            ],
                        ],
                        'makeId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                        ],
                        'makeUuid' => [
                            'toNative' => '059d276d-4588-375c-b7d7-99bb7405475e',
                            'getUuid' => [
                                'toString' => '8be62b78-63a6-332f-acad-4a14e873c987',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'makeParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 6,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'makeName' => [
                            'toNative' => 'Mr. Harold Wolf V',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'makeUrl' => [
                            'toNative' => 'http://www.labadie.info/',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'makeStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                            ],
                        ],
                        'makeCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '09:16:18',
                            ],
                        ],
                        'makeUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '01:26:00',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '12:37:43',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '20:55:05',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '13:42:03',
                            ],
                        ],
                    ],
                    'ItemFactory' => [
                        'createInstance' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'd9364810-459f-30b8-81bd-213ff66a77f4',
                                'getUuid' => [
                                    'toString' => '0c213aa9-c162-3c54-bca1-2f7fc6a5e1b8',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                ],
                                'decr' => [
                                    'sameValueAs' => false,
                                    'toNative' => 4,
                                ],
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 7,
                                ],
                                'decr' => [
                                    'sameValueAs' => false,
                                    'toNative' => 3,
                                ],
                            ],
                            'getName' => [
                                'toNative' => 'Ms. Carissa Becker',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 5,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 5,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 3,
                                ],
                            ],
                            'getUrl' => [
                                'toNative' => 'http://douglas.org/non-reprehenderit-in-earum',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '16:12:48',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '22:20:02',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '22:26:57',
                                ],
                            ],
                            'initializeState' => 'Pennsylvania',
                            'getPlayhead' => 8,
                        ],
                        'makeActualInstance' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'b1877018-0553-35ac-b46a-73a38e28318f',
                                'getUuid' => [
                                    'toString' => '11e5d80c-4e0e-3774-b0b5-3878fcf827fd',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 7,
                                ],
                                'decr' => [
                                    'sameValueAs' => false,
                                    'toNative' => 9,
                                ],
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 4,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 8,
                                ],
                            ],
                            'getName' => [
                                'toNative' => 'Ms. Mariane Balistreri DDS',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 2,
                                'inc' => [
                                    'sameValueAs' => true,
                                    'toNative' => 8,
                                ],
                                'decr' => [
                                    'sameValueAs' => false,
                                    'toNative' => 9,
                                ],
                            ],
                            'getUrl' => [
                                'toNative' => 'http://gaylord.org/',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '22:18:10',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '05:44:35',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '21:32:29',
                                ],
                            ],
                            'initializeState' => 'Wyoming',
                            'getPlayhead' => 6,
                        ],
                    ],
                    'findByUuid' => 'f4fe3c22-9fc8-38b0-bf0e-1fca3f8a9604',
                    'Uuid' => [
                        'toNative' => '1162671e-920a-331d-bdda-bc1ba92331d1',
                        'getUuid' => [
                            'toString' => '18996c3e-6419-322c-8573-2624be8fa3f4',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                ],
                1 => [
                    'ReadModelStoreInterface' => [
                        'times' => 0,
                        'findOne' => 1,
                        'findAll' => 0,
                        'findBy' => 0,
                        'findOneBy' => 0,
                        'insertOne' => 0,
                        'updateOne' => 0,
                        'deleteOne' => 0,
                    ],
                    'ValueObjectFactory' => [
                        'times' => 0,
                        'makeItem' => [
                            'times' => 1,
                            'toArray' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                                    ],
                                ],
                                'getTime' => [
                                    'times' => 0,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'times' => 0,
                                    'getTimestamp' => 0,
                                ],
                            ],
                            'serialize' => 0,
                        ],
                        'makeId' => [
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
                        'makeUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'makeParentId' => [
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
                        'makeName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'makeUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'makeStatus' => [
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
                        'makeCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'makeUpdatedAt' => [
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
                    ],
                    'ItemFactory' => [
                        'times' => 0,
                        'createInstance' => [
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
                                    ],
                                ],
                                'getTime' => [
                                    'times' => 0,
                                    'toNative' => [
                                        'times' => 0,
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
                        'makeActualInstance' => [
                            'times' => 1,
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
                                    ],
                                ],
                                'getTime' => [
                                    'times' => 0,
                                    'toNative' => [
                                        'times' => 0,
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
                    'findByUuid' => 0,
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

    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\QueryRepository.
     *
     * @return mixed[]
     */
    public function getDataForFindByCriteriaMethod(): array
    {
        return [
            0 => [
                0 => [
                    'ReadModelStoreInterface' => [
                        'findOne' => [
                            'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                            'name' => 'Amir Wintheiser',
                            'parentId' => 2,
                            'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                            'status' => 2,
                            'createdAt' => '1992-04-21',
                            'updatedAt' => '2016-01-03',
                        ],
                        'findAll' => [
                            [
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
                                    'version' => '1',
                                    'name' => 'Prof. Tristian Harber',
                                    'parentId' => 0,
                                    'url' => 'http://www.runolfsson.com/accusantium-aliquid-perspiciatis-sint-perferendis-ratione-et-beatae.html',
                                    'status' => 3,
                                    'createdAt' => '1980-03-10',
                                    'updatedAt' => '1982-10-08',
                                ],
                            ],
                        ],
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
                        ],
                        'findOneBy' => [
                            'uuid' => '367da075-c818-3e21-88b5-17e27d836472',
                            'name' => 'Prof. Tristian Harber',
                            'parentId' => 0,
                            'url' => 'http://www.runolfsson.com/accusantium-aliquid-perspiciatis-sint-perferendis-ratione-et-beatae.html',
                            'status' => 3,
                            'createdAt' => '1980-03-10',
                            'updatedAt' => '1982-10-08',
                        ],
                        'insertOne' => null,
                        'updateOne' => '1973-07-03',
                        'deleteOne' => null,
                    ],
                    'ValueObjectFactory' => [
                        'makeItem' => [
                            'toArray' => [
                                0 => 'nam',
                                1 => 'debitis',
                                2 => 'voluptatum',
                            ],
                            'sameValueAs' => false,
                            'toNative' => [
                                0 => 'nam',
                                1 => 'debitis',
                                2 => 'voluptatum',
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                                'inc' => [
                                    'sameValueAs' => true,
                                    'toNative' => 9,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 1,
                                ],
                            ],
                            'setId' => null,
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                                'inc' => [
                                    'sameValueAs' => true,
                                    'toNative' => 6,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 7,
                                ],
                            ],
                            'getName' => [
                                'toNative' => 'Elaina Bernhard',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 9,
                                'inc' => [
                                    'sameValueAs' => true,
                                    'toNative' => 7,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 2,
                                ],
                            ],
                            'getUrl' => [
                                'toNative' => 'http://www.wyman.com/ut-dolores-esse-ut-impedit',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '15:37:36',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '01:25:47',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '17:22:12',
                                ],
                            ],
                            'serialize' => [
                                0 => 'nam',
                                1 => 'debitis',
                                2 => 'voluptatum',
                            ],
                        ],
                        'makeId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                        ],
                        'makeUuid' => [
                            'toNative' => '059d276d-4588-375c-b7d7-99bb7405475e',
                            'getUuid' => [
                                'toString' => '8be62b78-63a6-332f-acad-4a14e873c987',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'makeParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 6,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                        ],
                        'makeName' => [
                            'toNative' => 'Mr. Harold Wolf V',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'makeUrl' => [
                            'toNative' => 'http://www.labadie.info/',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'makeStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                            ],
                        ],
                        'makeCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '09:16:18',
                            ],
                        ],
                        'makeUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '01:26:00',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '12:37:43',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '20:55:05',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '13:42:03',
                            ],
                        ],
                    ],
                    'ItemFactory' => [
                        'createInstance' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'd9364810-459f-30b8-81bd-213ff66a77f4',
                                'getUuid' => [
                                    'toString' => '0c213aa9-c162-3c54-bca1-2f7fc6a5e1b8',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 8,
                                ],
                                'decr' => [
                                    'sameValueAs' => false,
                                    'toNative' => 4,
                                ],
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 7,
                                ],
                                'decr' => [
                                    'sameValueAs' => false,
                                    'toNative' => 3,
                                ],
                            ],
                            'getName' => [
                                'toNative' => 'Ms. Carissa Becker',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 5,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 5,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 3,
                                ],
                            ],
                            'getUrl' => [
                                'toNative' => 'http://douglas.org/non-reprehenderit-in-earum',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '16:12:48',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '22:20:02',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '22:26:57',
                                ],
                            ],
                            'initializeState' => 'Pennsylvania',
                            'getPlayhead' => 8,
                        ],
                        'makeActualInstance' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'b1877018-0553-35ac-b46a-73a38e28318f',
                                'getUuid' => [
                                    'toString' => '11e5d80c-4e0e-3774-b0b5-3878fcf827fd',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 7,
                                ],
                                'decr' => [
                                    'sameValueAs' => false,
                                    'toNative' => 9,
                                ],
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 4,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 8,
                                ],
                            ],
                            'getName' => [
                                'toNative' => 'Ms. Mariane Balistreri DDS',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 2,
                                'inc' => [
                                    'sameValueAs' => true,
                                    'toNative' => 8,
                                ],
                                'decr' => [
                                    'sameValueAs' => false,
                                    'toNative' => 9,
                                ],
                            ],
                            'getUrl' => [
                                'toNative' => 'http://gaylord.org/',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '22:18:10',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '05:44:35',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '21:32:29',
                                ],
                            ],
                            'initializeState' => 'Wyoming',
                            'getPlayhead' => 6,
                        ],
                    ],
                    'findByCriteria' => [
                        0 => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'b1877018-0553-35ac-b46a-73a38e28318f',
                                'getUuid' => [
                                    'toString' => '11e5d80c-4e0e-3774-b0b5-3878fcf827fd',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 7,
                                ],
                                'decr' => [
                                    'sameValueAs' => false,
                                    'toNative' => 9,
                                ],
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                                'inc' => [
                                    'sameValueAs' => false,
                                    'toNative' => 4,
                                ],
                                'decr' => [
                                    'sameValueAs' => true,
                                    'toNative' => 8,
                                ],
                            ],
                            'getName' => [
                                'toNative' => 'Ms. Mariane Balistreri DDS',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 2,
                                'inc' => [
                                    'sameValueAs' => true,
                                    'toNative' => 8,
                                ],
                                'decr' => [
                                    'sameValueAs' => false,
                                    'toNative' => 9,
                                ],
                            ],
                            'getUrl' => [
                                'toNative' => 'http://gaylord.org/',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '22:18:10',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '05:44:35',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '21:32:29',
                                ],
                            ],
                            'initializeState' => 'Wyoming',
                            'getPlayhead' => 6,
                        ],
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => false,
                        'count' => [
                            'sameValueAs' => true,
                            'toNative' => 3,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                            ],
                        ],
                        'contains' => false,
                        'toNative' => [
                            0 => 'laboriosam',
                            1 => 'nemo',
                            2 => 'quia',
                        ],
                        'toArray' => [
                            0 => 'laboriosam',
                            1 => 'nemo',
                            2 => 'quia',
                        ],
                    ],
                ],
                1 => [
                    'ReadModelStoreInterface' => [
                        'times' => 0,
                        'findOne' => 0,
                        'findAll' => 0,
                        'findBy' => 1,
                        'findOneBy' => 0,
                        'insertOne' => 0,
                        'updateOne' => 0,
                        'deleteOne' => 0,
                    ],
                    'ValueObjectFactory' => [
                        'times' => 0,
                        'makeItem' => [
                            'times' => 1,
                            'toArray' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                                    ],
                                ],
                                'getTime' => [
                                    'times' => 0,
                                    'toNative' => [
                                        'times' => 0,
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'times' => 0,
                                    'getTimestamp' => 0,
                                ],
                            ],
                            'serialize' => 0,
                        ],
                        'makeId' => [
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
                        'makeUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'makeParentId' => [
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
                        'makeName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'makeUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'makeStatus' => [
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
                        'makeCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'makeUpdatedAt' => [
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
                    ],
                    'ItemFactory' => [
                        'times' => 0,
                        'createInstance' => [
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
                                    ],
                                ],
                                'getTime' => [
                                    'times' => 0,
                                    'toNative' => [
                                        'times' => 0,
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
                        'makeActualInstance' => [
                            'times' => 1,
                            'addId' => 0,
                            'delete' => 0,
                            'getUuid' => [
                                'times' => 1,
                                'toNative' => 1,
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
                            'getParentId' => [
                                'times' => 1,
                                'sameValueAs' => 0,
                                'toNative' => 1,
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
                                'times' => 1,
                                'toNative' => 1,
                                'sameValueAs' => 0,
                                'isEmpty' => 0,
                            ],
                            'getStatus' => [
                                'times' => 1,
                                'isActive' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 1,
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
                                    ],
                                ],
                                'getTime' => [
                                    'times' => 0,
                                    'toNative' => [
                                        'times' => 0,
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
                    'findByCriteria' => [
                        0 => [
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
                                    ],
                                ],
                                'getTime' => [
                                    'times' => 0,
                                    'toNative' => [
                                        'times' => 0,
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
                    'FindCriteria' => [
                        'times' => 0,
                        'sameValueAs' => 0,
                        'count' => [
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
                        'contains' => 0,
                        'toNative' => 1,
                        'toArray' => 0,
                    ],
                ],
            ],
        ];
    }
}
