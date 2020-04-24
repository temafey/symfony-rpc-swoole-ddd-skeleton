<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command;

/**
 * DataProvider for class {testClassName}.
 */
class ItemDeleteTaskHandlerDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\ApplicationCommandHandler$1Handler.
     *
     * @return mixed[]
     */
    public function getDataForHandleMethod(): array
    {
        return [
            0 => [
                0 => [
                    'ItemTaskRepositoryInterface' => [
                        'addCreateTask' => null,
                        'addUpdateTask' => '2012-12-21',
                        'addDeleteTask' => null,
                    ],
                    'ItemDeleteTaskCommand' => [
                        'getItemUuid' => [
                            'toNative' => '98454450-680b-32cd-a53b-e71e0fb072bd',
                            'getUuid' => [
                                'toString' => '0a0803ae-6fe7-36f4-9782-01f7572ed071',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getProcessUuid' => [
                            'toNative' => '13d84971-55d4-3e3e-9188-76831ecfb219',
                            'getUuid' => [
                                'toString' => 'ce85a99e-e986-3f5f-8160-50249e029444',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '72ee4c80-ef6d-33ba-b42a-4fbabc7c0a11',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 0,
                        'addUpdateTask' => 0,
                        'addDeleteTask' => 1,
                    ],
                    'ItemDeleteTaskCommand' => [
                        'times' => 0,
                        'getItemUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getProcessUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            1 => [
                0 => [
                    'ItemTaskRepositoryInterface' => [
                        'addCreateTask' => null,
                        'addUpdateTask' => '2018-09-04',
                        'addDeleteTask' => null,
                    ],
                    'ItemDeleteTaskCommand' => [
                        'getItemUuid' => [
                            'toNative' => '09fd99fe-9085-3eec-8732-e237e61f5cce',
                            'getUuid' => [
                                'toString' => '25b9cbf2-6c66-3cb6-8253-e037fa500751',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'a92d083c-9a5f-3e62-9df1-e7e700a42c19',
                            'getUuid' => [
                                'toString' => '79b5e0ed-3c83-3c22-926b-299866803336',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => 'c53ba3aa-46d4-3fdd-a650-4f90a6887368',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 0,
                        'addUpdateTask' => 0,
                        'addDeleteTask' => 1,
                    ],
                    'ItemDeleteTaskCommand' => [
                        'times' => 0,
                        'getItemUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getProcessUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            2 => [
                0 => [
                    'ItemTaskRepositoryInterface' => [
                        'addCreateTask' => null,
                        'addUpdateTask' => '1987-09-16',
                        'addDeleteTask' => null,
                    ],
                    'ItemDeleteTaskCommand' => [
                        'getItemUuid' => [
                            'toNative' => '7c0a6807-011a-3ebc-b2d9-642f29f4ac37',
                            'getUuid' => [
                                'toString' => '8e4a6cd8-06b9-362f-9fd0-fe9f88c1ff5d',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getProcessUuid' => [
                            'toNative' => '9b667ecd-4ede-330d-b388-1bb6f5a91079',
                            'getUuid' => [
                                'toString' => '8ad3581c-1ae7-3750-b8a5-65f1d5560004',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => 'd08f4374-1902-3458-b8a4-fecd5b203a8e',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 0,
                        'addUpdateTask' => 0,
                        'addDeleteTask' => 1,
                    ],
                    'ItemDeleteTaskCommand' => [
                        'times' => 0,
                        'getItemUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getProcessUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            3 => [
                0 => [
                    'ItemTaskRepositoryInterface' => [
                        'addCreateTask' => null,
                        'addUpdateTask' => '1972-08-31',
                        'addDeleteTask' => null,
                    ],
                    'ItemDeleteTaskCommand' => [
                        'getItemUuid' => [
                            'toNative' => '395d2276-a1e8-3343-8e1f-8f2723abb316',
                            'getUuid' => [
                                'toString' => '34927ef2-fb69-3d19-a41d-14d3fa1e1ad7',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'e7ed67f0-300a-30f9-b225-1cd153af915e',
                            'getUuid' => [
                                'toString' => 'd2eb9246-9132-3d5c-a03f-18453c24569a',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => 'e079dea5-25fe-3836-84ba-aa8f780f9916',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 0,
                        'addUpdateTask' => 0,
                        'addDeleteTask' => 1,
                    ],
                    'ItemDeleteTaskCommand' => [
                        'times' => 0,
                        'getItemUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getProcessUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            4 => [
                0 => [
                    'ItemTaskRepositoryInterface' => [
                        'addCreateTask' => null,
                        'addUpdateTask' => '1975-02-26',
                        'addDeleteTask' => null,
                    ],
                    'ItemDeleteTaskCommand' => [
                        'getItemUuid' => [
                            'toNative' => '0f93f6c7-3881-302f-9d75-5338b094aee8',
                            'getUuid' => [
                                'toString' => '3663a061-bab2-3d9d-b76c-3d0aabd5f9b9',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'b436f35e-87d3-35eb-94d3-064de6015a5f',
                            'getUuid' => [
                                'toString' => '204d1697-2e38-310d-b68c-e20e28bd3359',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '0177ae03-604b-35c8-bddd-f9e161b44ef1',
                        ],
                    ],
                ],
                1 => [
                    'ItemTaskRepositoryInterface' => [
                        'times' => 0,
                        'addCreateTask' => 0,
                        'addUpdateTask' => 0,
                        'addDeleteTask' => 1,
                    ],
                    'ItemDeleteTaskCommand' => [
                        'times' => 0,
                        'getItemUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getProcessUuid' => [
                            'times' => 1,
                            'toNative' => 0,
                            'getUuid' => [
                                'times' => 0,
                                'toString' => 0,
                            ],
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
        ];
    }
}
