<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository;

/**
 * DataProvider for class {testClassName}.
 */
class QueryLiteRepositoryDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\QueryLiteRepository.
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
                            0 => 'findOne',
                            1 => 'voluptatem',
                            2 => 'aut',
                        ],
                        'findAll' => [
                            0 => 'findAll',
                            1 => 'voluptatem',
                            2 => 'aut',
                        ],
                        'findBy' => [
                            0 => 'findBy',
                            1 => 'voluptatem',
                            2 => 'aut',
                        ],
                        'findOneBy' => [
                            0 => 'findOneBy',
                            1 => 'voluptatem',
                            2 => 'aut',
                        ],
                        'insertOne' => null,
                        'updateOne' => '1970-05-07',
                        'deleteOne' => null,
                    ],
                    'findByUuid' => '9d5fb8fe-6080-3b3d-adcd-ccce57be40b2',
                    'Uuid' => [
                        'toNative' => '4fea362d-163d-3748-86b1-5057bd0bed08',
                        'getUuid' => [
                            'toString' => '297c6507-c85d-3023-8a86-699022184163',
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
     * Return test data for Backend\Api\RpcSkeleton\Infrastructure\Repository\QueryLiteRepository.
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
                            0 => 'findOne',
                            1 => 'voluptatem',
                            2 => 'aut',
                        ],
                        'findAll' => [
                            0 => 'findAll',
                            1 => 'voluptatem',
                            2 => 'aut',
                        ],
                        'findBy' => [
                            0 => 'findBy',
                            1 => 'voluptatem',
                            2 => 'aut',
                        ],
                        'findOneBy' => [
                            0 => 'findOneBy',
                            1 => 'voluptatem',
                            2 => 'aut',
                        ],
                        'insertOne' => null,
                        'updateOne' => '1970-05-07',
                        'deleteOne' => null,
                    ],
                    'findByCriteria' => [
                        0 => 'voluptatibus',
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => true,
                        'count' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                            ],
                        ],
                        'contains' => true,
                        'toNative' => [
                            0 => 'nam',
                            1 => 'suscipit',
                            2 => 'voluptas',
                        ],
                        'toArray' => [
                            0 => 'nam',
                            1 => 'suscipit',
                            2 => 'voluptas',
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
                    'findByCriteria' => 0,
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
