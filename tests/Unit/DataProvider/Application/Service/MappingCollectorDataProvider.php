<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Service;

/**
 * DataProvider for class {testClassName}.
 */
class MappingCollectorDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Service\MappingCollector.
     *
     * @return mixed[]
     */
    public function getDataForAddJsonRpcMethodMethod(): array
    {
        return [
            0 => [
                0 => [
                    'methodName' => 'Prof. Enrique Kuvalis II',
                    'JsonRpcMethodInterface' => [
                        'apply' => 'in',
                    ],
                ],
                1 => [
                    'JsonRpcMethodInterface' => [
                        'times' => 0,
                        'apply' => 0,
                    ],
                ],
            ],
            1 => [
                0 => [
                    'methodName' => 'Christian Little',
                    'JsonRpcMethodInterface' => [
                        'apply' => 'sint',
                    ],
                ],
                1 => [
                    'JsonRpcMethodInterface' => [
                        'times' => 0,
                        'apply' => 0,
                    ],
                ],
            ],
            2 => [
                0 => [
                    'methodName' => 'Rebeka Rogahn',
                    'JsonRpcMethodInterface' => [
                        'apply' => 'sunt',
                    ],
                ],
                1 => [
                    'JsonRpcMethodInterface' => [
                        'times' => 0,
                        'apply' => 0,
                    ],
                ],
            ],
        ];
    }

    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Service\MappingCollector.
     *
     * @return mixed[]
     */
    public function getDataForGetMappingListMethod(): array
    {
        return [
            0 => [
                0 => [
                    'getMappingList' => [
                        0 => [
                            'apply' => 'ut',
                            'className' => 'Yoanm\\JsonRpcServer\\Domain\\JsonRpcMethodInterface',
                        ],
                    ],
                ],
                1 => [
                    'getMappingList' => [
                        0 => [
                            'times' => 0,
                            'apply' => 0,
                            'className' => 'Yoanm\\JsonRpcServer\\Domain\\JsonRpcMethodInterface',
                        ],
                    ],
                ],
            ],
            1 => [
                0 => [
                    'getMappingList' => [
                        0 => [
                            'apply' => 'qui',
                            'className' => 'Yoanm\\JsonRpcServer\\Domain\\JsonRpcMethodInterface',
                        ],
                    ],
                ],
                1 => [
                    'getMappingList' => [
                        0 => [
                            'times' => 0,
                            'apply' => 0,
                            'className' => 'Yoanm\\JsonRpcServer\\Domain\\JsonRpcMethodInterface',
                        ],
                    ],
                ],
            ],
            2 => [
                0 => [
                    'getMappingList' => [
                        0 => [
                            'apply' => 'aperiam',
                            'className' => 'Yoanm\\JsonRpcServer\\Domain\\JsonRpcMethodInterface',
                        ],
                    ],
                ],
                1 => [
                    'getMappingList' => [
                        0 => [
                            'times' => 0,
                            'apply' => 0,
                            'className' => 'Yoanm\\JsonRpcServer\\Domain\\JsonRpcMethodInterface',
                        ],
                    ],
                ],
            ],
        ];
    }
}
