<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory;

/**
 * DataProvider for class {testClassName}.
 */
class ValueObjectFactoryDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeItemMethod(): array
    {
        return [
            0 => [
                0 => [
                    'Item' => [
                        'toArray' => [
                            'id' => 7,
                            'parentId' => 3,
                            'name' => 'Bertrand Stracke',
                            'status' => 1,
                            'url' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'createdAt' => '2020-03-16T10:44:21+00:00',
                            'updatedAt' => '2020-03-16T09:09:05+00:00',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            'id' => 7,
                            'parentId' => 3,
                            'name' => 'Bertrand Stracke',
                            'status' => 1,
                            'url' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'createdAt' => '2020-03-16T10:44:21+00:00',
                            'updatedAt' => '2020-03-16T09:09:05+00:00',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 7,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                        ],

                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 3,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                        ],
                        'getName' => [
                            'toNative' => 'Bertrand Stracke',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 5,
                            'inc' => [
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'decr' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                        ],
                        'getUrl' => [
                            'toNative' => 'http://www.pouros.com/cum-sit-reiciendis-fugiat-fugit-qui-voluptas-quisquam.html',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '2020-03-16T10:44:21+00:00',
                            ],
                        ],
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '2020-03-16T09:09:05+00:00',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '08:05:09',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '21:16:27',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '13:19:08',
                            ],
                        ],
                        'serialize' => [
                            0 => 'voluptatum',
                            1 => 'maiores',
                            2 => 'dolorum',
                        ],
                    ],
                ],
                1 => [
                    'makeItem' => 0,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeIdMethod(): array
    {
        return [
            0 => [
                0 => [
                    'itemId' => 8,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeUuidMethod(): array
    {
        return [
            0 => [
                0 => [
                    'uuid' => '6b3f2a4c-888a-3797-9a50-3ee60dde542f',
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeParentIdMethod(): array
    {
        return [
            0 => [
                0 => [
                    'parentId' => 2,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeNameMethod(): array
    {
        return [
            0 => [
                0 => [
                    'name' => 'Miss Althea Aufderhar',
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeUrlMethod(): array
    {
        return [
            0 => [
                0 => [
                    'url' => 'http://www.kris.com/sapiente-qui-quam-eos-officia-sunt-inventore-quas',
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeStatusMethod(): array
    {
        return [
            0 => [
                0 => [
                    'status' => 1,
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeCreatedAtMethod(): array
    {
        return [
            0 => [
                0 => [
                    'createdAt' => '1972-08-03',
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory.
     *
     * @return mixed[]
     */
    public function getDataForMakeUpdatedAtMethod(): array
    {
        return [
            0 => [
                0 => [
                    'updatedAt' => '1972-08-03',
                ],
            ],
        ];
    }
}
