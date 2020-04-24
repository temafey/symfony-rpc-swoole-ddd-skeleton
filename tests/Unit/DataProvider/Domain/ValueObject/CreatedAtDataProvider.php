<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject;

/**
 * DataProvider for class {testClassName}.
 */
class CreatedAtDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt.
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Date' => [
                        'toNative' => [
                            'getTimestamp' => '2011-12-30',
                        ],
                        'getYear' => [
                            'toNative' => '2011',
                        ],
                        'getMonth' => [
                            'getNumericValue' => '12',
                        ],
                        'getDay' => [
                            'toNative' => '30',
                        ],
                    ],
                    'Time' => [
                        'toNative' => [
                            'getTimestamp' => '05:01:21',
                        ],
                        'getHour' => [
                            'toNative' => '05',
                        ],
                        'getMinute' => [
                            'toNative' => '01',
                        ],
                        'getSecond' => [
                            'toNative' => '21',
                        ],
                    ],
                    'fromNative' => [
                        'toNative' => '2011-12-30T11:16:44+00:00',
                    ],
                ],
                1 => [
                    'Date' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                            'getTimestamp' => 0,
                        ],
                        'getYear' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getMonth' => [
                            'times' => 0,
                            'getNumericValue' => 0,
                        ],
                        'getDay' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                    ],
                    'Time' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                        'getHour' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getMinute' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getSecond' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                    ],
                    'fromNative' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt.
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Date' => [
                        'toNative' => [
                            'getTimestamp' => '2011-12-30',
                        ],
                        'getYear' => [
                            'toNative' => 2011,
                        ],
                        'getMonth' => [
                            'getNumericValue' => 12,
                        ],
                        'getDay' => [
                            'toNative' => 30,
                        ],
                    ],
                    'Time' => [
                        'toNative' => [
                            'getTimestamp' => '05:01:21',
                        ],
                        'getHour' => [
                            'toNative' => 05,
                        ],
                        'getMinute' => [
                            'toNative' => 01,
                        ],
                        'getSecond' => [
                            'toNative' => 21,
                        ],
                    ],
                    'fromNative' => [
                        'toNative' => '2011-12-30T11:16:44+00:00',
                    ],
                ],
                1 => [
                    'Date' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                            'getTimestamp' => 0,
                        ],
                        'getYear' => [
                            'times' => 1,
                            'toNative' => 1,
                        ],
                        'getMonth' => [
                            'times' => 1,
                            'getNumericValue' => 1,
                        ],
                        'getDay' => [
                            'times' => 1,
                            'toNative' => 1,
                        ],
                    ],
                    'Time' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                        'getHour' => [
                            'times' => 1,
                            'toNative' => 1,
                        ],
                        'getMinute' => [
                            'times' => 1,
                            'toNative' => 1,
                        ],
                        'getSecond' => [
                            'times' => 1,
                            'toNative' => 1,
                        ],
                    ],
                    'fromNative' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt.
     *
     * @return mixed[]
     */
    public function getDataForFromNativeDateTimeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Date' => [
                        'toNative' => [
                            'getTimestamp' => '2011-12-30',
                        ],
                        'getYear' => [
                            'toNative' => 2011,
                        ],
                        'getMonth' => [
                            'getNumericValue' => 12,
                        ],
                        'getDay' => [
                            'toNative' => 30,
                        ],
                    ],
                    'Time' => [
                        'toNative' => [
                            'getTimestamp' => '05:01:21',
                        ],
                        'getHour' => [
                            'toNative' => 05,
                        ],
                        'getMinute' => [
                            'toNative' => 01,
                        ],
                        'getSecond' => [
                            'toNative' => 21,
                        ],
                    ],
                    'fromNative' => [
                        'toNative' => '2011-12-30T11:16:44+00:00',
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt.
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Date' => [
                        'toNative' => [
                            'getTimestamp' => '2011-12-30',
                        ],
                        'getYear' => [
                            'toNative' => '2011',
                        ],
                        'getMonth' => [
                            'getNumericValue' => '12',
                        ],
                        'getDay' => [
                            'toNative' => '30',
                        ],
                    ],
                    'Time' => [
                        'toNative' => [
                            'getTimestamp' => '05:01:21',
                        ],
                        'getHour' => [
                            'toNative' => '05',
                        ],
                        'getMinute' => [
                            'toNative' => '01',
                        ],
                        'getSecond' => [
                            'toNative' => '21',
                        ],
                    ],
                    'fromNative' => [
                        'toNative' => '2011-12-30T11:16:44+00:00',
                    ],
                    'CreatedAt' => [
                        'getDate' => [
                            'toNative' => [
                                'getTimestamp' => '2011-12-30',
                            ],
                            'getYear' => [
                                'toNative' => '2011',
                            ],
                            'getMonth' => [
                                'getNumericValue' => '12',
                            ],
                            'getDay' => [
                                'toNative' => '30',
                            ],
                        ],
                        'getTime' => [
                            'toNative' => [
                                'getTimestamp' => '05:01:21',
                            ],
                            'getHour' => [
                                'toNative' => '05',
                            ],
                            'getMinute' => [
                                'toNative' => '01',
                            ],
                            'getSecond' => [
                                'toNative' => '21',
                            ],
                        ],
                        'fromNative' => [
                            'toNative' => '2011-12-30T11:16:44+00:00',
                        ],
                    ],
                ],
                1 => [
                    'Date' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                            'getTimestamp' => 0,
                        ],
                        'getYear' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getMonth' => [
                            'times' => 0,
                            'getNumericValue' => 0,
                        ],
                        'getDay' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                    ],
                    'Time' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                        'getHour' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getMinute' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getSecond' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                    ],
                    'fromNative' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                    ],
                    'CreatedAt' => [
                        'getDate' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                            'getYear' => [
                                'times' => 0,
                                'toNative' => 0,
                            ],
                            'getMonth' => [
                                'times' => 0,
                                'getNumericValue' => 0,
                            ],
                            'getDay' => [
                                'times' => 0,
                                'toNative' => 0,
                            ],
                        ],
                        'getTime' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                            ],
                            'getHour' => [
                                'times' => 0,
                                'toNative' => 0,
                            ],
                            'getMinute' => [
                                'times' => 0,
                                'toNative' => 0,
                            ],
                            'getSecond' => [
                                'times' => 0,
                                'toNative' => 0,
                            ],
                        ],
                        'fromNative' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt.
     *
     * @return mixed[]
     */
    public function getDataForGetDateMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Date' => [
                        'toNative' => [
                            'getTimestamp' => '2011-12-30',
                        ],
                        'getYear' => [
                            'toNative' => '2011',
                        ],
                        'getMonth' => [
                            'getNumericValue' => '12',
                        ],
                        'getDay' => [
                            'toNative' => '30',
                        ],
                    ],
                    'Time' => [
                        'toNative' => [
                            'getTimestamp' => '05:01:21',
                        ],
                        'getHour' => [
                            'toNative' => '05',
                        ],
                        'getMinute' => [
                            'toNative' => '01',
                        ],
                        'getSecond' => [
                            'toNative' => '21',
                        ],
                    ],
                    'fromNative' => [
                        'toNative' => '2011-12-30T11:16:44+00:00',
                    ],
                ],
                1 => [
                    'Date' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                            'getTimestamp' => 0,
                        ],
                        'getYear' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getMonth' => [
                            'times' => 0,
                            'getNumericValue' => 0,
                        ],
                        'getDay' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                    ],
                    'Time' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                        'getHour' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getMinute' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getSecond' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                    ],
                    'fromNative' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt.
     *
     * @return mixed[]
     */
    public function getDataForGetTimeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Date' => [
                        'toNative' => [
                            'getTimestamp' => '2011-12-30',
                        ],
                        'getYear' => [
                            'toNative' => '2011',
                        ],
                        'getMonth' => [
                            'getNumericValue' => '12',
                        ],
                        'getDay' => [
                            'toNative' => '30',
                        ],
                    ],
                    'Time' => [
                        'toNative' => [
                            'getTimestamp' => '05:01:21',
                        ],
                        'getHour' => [
                            'toNative' => '05',
                        ],
                        'getMinute' => [
                            'toNative' => '01',
                        ],
                        'getSecond' => [
                            'toNative' => '21',
                        ],
                    ],
                    'fromNative' => [
                        'toNative' => '2011-12-30T11:16:44+00:00',
                    ],
                ],
                1 => [
                    'Date' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                            'getTimestamp' => 0,
                        ],
                        'getYear' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getMonth' => [
                            'times' => 0,
                            'getNumericValue' => 0,
                        ],
                        'getDay' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                    ],
                    'Time' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                        'getHour' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getMinute' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                        'getSecond' => [
                            'times' => 0,
                            'toNative' => 0,
                        ],
                    ],
                    'fromNative' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt.
     *
     * @return mixed[]
     */
    public function getDataForToNativeDateTimeMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Date' => [
                        'toNative' => [
                            'getTimestamp' => '2011-12-30',
                        ],
                        'getYear' => [
                            'toNative' => 2011,
                        ],
                        'getMonth' => [
                            'getNumericValue' => 12,
                        ],
                        'getDay' => [
                            'toNative' => 30,
                        ],
                    ],
                    'Time' => [
                        'toNative' => [
                            'getTimestamp' => '05:01:21',
                        ],
                        'getHour' => [
                            'toNative' => 05,
                        ],
                        'getMinute' => [
                            'toNative' => 01,
                        ],
                        'getSecond' => [
                            'toNative' => 21,
                        ],
                    ],
                    'fromNative' => [
                        'toNative' => '2011-12-30T11:16:44+00:00',
                    ],
                ],
                1 => [
                    'Date' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                            'getTimestamp' => 0,
                        ],
                        'getYear' => [
                            'times' => 1,
                            'toNative' => 1,
                        ],
                        'getMonth' => [
                            'times' => 1,
                            'getNumericValue' => 1,
                        ],
                        'getDay' => [
                            'times' => 1,
                            'toNative' => 1,
                        ],
                    ],
                    'Time' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                        'getHour' => [
                            'times' => 1,
                            'toNative' => 1,
                        ],
                        'getMinute' => [
                            'times' => 1,
                            'toNative' => 1,
                        ],
                        'getSecond' => [
                            'times' => 1,
                            'toNative' => 1,
                        ],
                    ],
                    'fromNative' => [
                        'times' => 0,
                        'toNative' => [
                            'times' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }
}
