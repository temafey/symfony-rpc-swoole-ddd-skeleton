<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Query;

/**
 * DataProvider for class {testClassName}.
 */
class FindCommandDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Query\FindCommand.
     *
     * @return mixed[]
     */
    public function getDataForGetFindCriteriaMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'bdfb7449-cdb0-3ba8-84d4-0154b0dd9f4d',
                        'getUuid' => [
                            'toString' => 'f04ac9bf-f778-39ad-a16d-bc1112b7135a',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => true,
                        'count' => [
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => true,
                        'toNative' => [
                            0 => 'nihil',
                            1 => 'numquam',
                            2 => 'consequatur',
                        ],
                        'toArray' => [
                            0 => 'nihil',
                            1 => 'numquam',
                            2 => 'consequatur',
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
                        'times' => 0,
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
                        'toNative' => '5bb44ddb-4129-3f1c-9b67-b6ca5530441e',
                        'getUuid' => [
                            'toString' => '9887de75-4703-3f8d-94fd-2b7fc2ffb63f',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => true,
                        'count' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => true,
                        'toNative' => [
                            0 => 'blanditiis',
                            1 => 'molestias',
                            2 => 'earum',
                        ],
                        'toArray' => [
                            0 => 'blanditiis',
                            1 => 'molestias',
                            2 => 'earum',
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
                        'times' => 0,
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
                        'toNative' => '3f4e35dd-10b4-320c-9848-6fc5ef1b8b94',
                        'getUuid' => [
                            'toString' => 'edc34840-bc4e-307d-93e1-b438abe81eb9',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => false,
                        'count' => [
                            'sameValueAs' => false,
                            'toNative' => 1,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => false,
                        'toNative' => [
                            0 => 'excepturi',
                            1 => 'et',
                            2 => 'laborum',
                        ],
                        'toArray' => [
                            0 => 'excepturi',
                            1 => 'et',
                            2 => 'laborum',
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
                        'times' => 0,
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
     * Return test data for Backend\Api\RpcSkeleton\Domain\Query\FindCommand.
     *
     * @return mixed[]
     */
    public function getDataForGetUuidMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'bdfb7449-cdb0-3ba8-84d4-0154b0dd9f4d',
                        'getUuid' => [
                            'toString' => 'f04ac9bf-f778-39ad-a16d-bc1112b7135a',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => true,
                        'count' => [
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => true,
                        'toNative' => [
                            0 => 'nihil',
                            1 => 'numquam',
                            2 => 'consequatur',
                        ],
                        'toArray' => [
                            0 => 'nihil',
                            1 => 'numquam',
                            2 => 'consequatur',
                        ],
                    ],
                    'getUuid' => '4e7445bf-4371-3989-af9e-2b0e53971bbd',
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
                        'times' => 0,
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
                        'toNative' => '5bb44ddb-4129-3f1c-9b67-b6ca5530441e',
                        'getUuid' => [
                            'toString' => '9887de75-4703-3f8d-94fd-2b7fc2ffb63f',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => true,
                        'count' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => true,
                        'toNative' => [
                            0 => 'blanditiis',
                            1 => 'molestias',
                            2 => 'earum',
                        ],
                        'toArray' => [
                            0 => 'blanditiis',
                            1 => 'molestias',
                            2 => 'earum',
                        ],
                    ],
                    'getUuid' => '87a65e04-09c9-3115-a7d1-ffc81997d615',
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'FindCriteria' => [
                        'times' => 0,
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
                        'toNative' => '3f4e35dd-10b4-320c-9848-6fc5ef1b8b94',
                        'getUuid' => [
                            'toString' => 'edc34840-bc4e-307d-93e1-b438abe81eb9',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'FindCriteria' => [
                        'sameValueAs' => false,
                        'count' => [
                            'sameValueAs' => false,
                            'toNative' => 1,
                            'inc' => null,
                            'decr' => null,
                        ],
                        'contains' => false,
                        'toNative' => [
                            0 => 'excepturi',
                            1 => 'et',
                            2 => 'laborum',
                        ],
                        'toArray' => [
                            0 => 'excepturi',
                            1 => 'et',
                            2 => 'laborum',
                        ],
                    ],
                    'getUuid' => '498af30d-81d6-38fa-849d-e5713423b233',
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 0,
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'FindCriteria' => [
                        'times' => 0,
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
