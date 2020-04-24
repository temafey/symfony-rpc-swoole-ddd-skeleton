<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Query;

/**
 * DataProvider for class {testClassName}.
 */
class FindLiteCommandDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Query\FindLiteCommand.
     *
     * @return mixed[]
     */
    public function getDataForGetFindCriteriaMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'f67d18bc-c102-3497-8e83-217c3cc07ac0',
                        'getUuid' => [
                            'toString' => '5d11d309-db83-3123-af03-cf7f3be5f191',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => true,
                        'count' => [
                            'sameValueAs' => true,
                            'toNative' => 8,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => true,
                        'toNative' => [
                            0 => 'quod',
                            1 => 'corrupti',
                            2 => 'unde',
                        ],
                        'toArray' => [
                            0 => 'quod',
                            1 => 'corrupti',
                            2 => 'unde',
                        ],
                    ],
                    'getFindCriteria' => null,
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'FindCriteria' => [
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
                        'toNative' => 1,
                        'toArray' => 0,
                    ],
                    'getFindCriteria' => 0,
                ],
            ],
            1 => [
                0 => [
                    'UUID' => [
                        'toNative' => '6e6154b6-906d-3d30-aa05-ffa07d09f48e',
                        'getUuid' => [
                            'toString' => 'e9549949-8afe-3a4e-8c24-326c467b9b19',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => false,
                        'count' => [
                            'sameValueAs' => true,
                            'toNative' => 9,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => false,
                        'toNative' => [
                            0 => 'est',
                            1 => 'assumenda',
                            2 => 'eos',
                        ],
                        'toArray' => [
                            0 => 'est',
                            1 => 'assumenda',
                            2 => 'eos',
                        ],
                    ],
                    'getFindCriteria' => null,
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'FindCriteria' => [
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
                        'toNative' => 1,
                        'toArray' => 0,
                    ],
                    'getFindCriteria' => 0,
                ],
            ],
            2 => [
                0 => [
                    'UUID' => [
                        'toNative' => '3ee3cf2e-64bf-382a-9dd3-c65859d71f33',
                        'getUuid' => [
                            'toString' => 'dbff1cc3-0963-369e-bb45-3686df949b70',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => true,
                        'count' => [
                            'sameValueAs' => true,
                            'toNative' => 8,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => true,
                        'toNative' => [
                            0 => 'quisquam',
                            1 => 'aliquid',
                            2 => 'et',
                        ],
                        'toArray' => [
                            0 => 'quisquam',
                            1 => 'aliquid',
                            2 => 'et',
                        ],
                    ],
                    'getFindCriteria' => null,
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'FindCriteria' => [
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
                        'toNative' => 1,
                        'toArray' => 0,
                    ],
                    'getFindCriteria' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Query\FindLiteCommand.
     *
     * @return mixed[]
     */
    public function getDataForGetUuidMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'f67d18bc-c102-3497-8e83-217c3cc07ac0',
                        'getUuid' => [
                            'toString' => '5d11d309-db83-3123-af03-cf7f3be5f191',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => true,
                        'count' => [
                            'sameValueAs' => true,
                            'toNative' => 8,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => true,
                        'toNative' => [
                            0 => 'quod',
                            1 => 'corrupti',
                            2 => 'unde',
                        ],
                        'toArray' => [
                            0 => 'quod',
                            1 => 'corrupti',
                            2 => 'unde',
                        ],
                    ],
                    'getUuid' => '383ef4ef-55f7-3152-8b10-2e56b890836c',
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'FindCriteria' => [
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
                        'toNative' => 1,
                        'toArray' => 0,
                    ],
                    'getUuid' => 0,
                ],
            ],
            1 => [
                0 => [
                    'UUID' => [
                        'toNative' => '6e6154b6-906d-3d30-aa05-ffa07d09f48e',
                        'getUuid' => [
                            'toString' => 'e9549949-8afe-3a4e-8c24-326c467b9b19',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => false,
                        'count' => [
                            'sameValueAs' => true,
                            'toNative' => 9,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => false,
                        'toNative' => [
                            0 => 'est',
                            1 => 'assumenda',
                            2 => 'eos',
                        ],
                        'toArray' => [
                            0 => 'est',
                            1 => 'assumenda',
                            2 => 'eos',
                        ],
                    ],
                    'getUuid' => 'f1b26bf4-9717-3d20-8399-e0b42d6d8657',
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'FindCriteria' => [
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
                        'toNative' => 1,
                        'toArray' => 0,
                    ],
                    'getUuid' => 0,
                ],
            ],
            2 => [
                0 => [
                    'UUID' => [
                        'toNative' => '3ee3cf2e-64bf-382a-9dd3-c65859d71f33',
                        'getUuid' => [
                            'toString' => 'dbff1cc3-0963-369e-bb45-3686df949b70',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => true,
                        'count' => [
                            'sameValueAs' => true,
                            'toNative' => 8,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => true,
                        'toNative' => [
                            0 => 'quisquam',
                            1 => 'aliquid',
                            2 => 'et',
                        ],
                        'toArray' => [
                            0 => 'quisquam',
                            1 => 'aliquid',
                            2 => 'et',
                        ],
                    ],
                    'getUuid' => '0af2e853-be0a-3269-b5db-ba8c4a5a087f',
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'FindCriteria' => [
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
                        'toNative' => 1,
                        'toArray' => 0,
                    ],
                    'getUuid' => 0,
                ],
            ],
        ];
    }
}
