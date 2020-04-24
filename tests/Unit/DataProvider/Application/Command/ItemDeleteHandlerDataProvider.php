<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command;

/**
 * DataProvider for class {testClassName}.
 */
class ItemDeleteHandlerDataProvider
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
                    'ItemRepositoryInterface' => [
                        'get' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => '96241498-2a37-3e85-a150-18d8f6475b23',
                                'getUuid' => [
                                    'toString' => '0321a5ea-79cb-39fd-a22c-244e7b94a91a',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                            'getName' => [
                                'toNative' => 'Lillian Cronin',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://gottlieb.net/',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '06:25:31',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '18:07:31',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '18:19:27',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '02:56:52',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '11:45:09',
                                ],
                            ],
                            'initializeState' => 'Michigan',
                            'getPlayhead' => 9,
                        ],
                        'store' => null,
                    ],
                    'ItemDeleteCommand' => [
                        'getItemUuid' => [
                            'toNative' => '02d13e2d-c736-3417-8c7c-89c9aeddddf8',
                            'getUuid' => [
                                'toString' => '76243581-5267-311f-afb3-8dd7efc88674',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'c25d819a-a45e-3db5-af25-0c6a75061911',
                            'getUuid' => [
                                'toString' => '49af9fbe-ec89-3ba3-8cdb-a93a2f9cbab7',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => 'd6adedbb-25bd-3be2-a563-3aeee6c712d8',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'addId' => 0,
                            'delete' => 1,
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
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
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
                            'initializeState' => 0,
                            'getPlayhead' => 0,
                        ],
                        'store' => 1,
                    ],
                    'ItemDeleteCommand' => [
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
                            'times' => 0,
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
                    'ItemRepositoryInterface' => [
                        'get' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => '0884f581-c0c1-31e6-8262-554138e1da2f',
                                'getUuid' => [
                                    'toString' => '55c09116-c2cc-3505-9af9-3449e67bb5e5',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                            'getName' => [
                                'toNative' => 'Guiseppe Lehner',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://www.howe.org/asperiores-aut-quam-enim-sunt-totam-quos-velit-optio.html',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '01:05:16',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '18:15:15',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '01:18:31',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '22:38:49',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '10:39:58',
                                ],
                            ],
                            'initializeState' => 'Michigan',
                            'getPlayhead' => 9,
                        ],
                        'store' => null,
                    ],
                    'ItemDeleteCommand' => [
                        'getItemUuid' => [
                            'toNative' => 'a91442de-9b5e-3908-be39-1ec657e4af5b',
                            'getUuid' => [
                                'toString' => '6fab91cf-c8ea-3ef3-b822-775456fd3248',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getProcessUuid' => [
                            'toNative' => '229d1658-6c3f-3ba3-b030-661ef755ef28',
                            'getUuid' => [
                                'toString' => '1d6cada8-6e71-3f05-97d2-44249eda9bc8',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => 'efc40532-4323-3fdc-b577-fdc787bd944c',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'addId' => 0,
                            'delete' => 1,
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
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
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
                            'initializeState' => 0,
                            'getPlayhead' => 0,
                        ],
                        'store' => 1,
                    ],
                    'ItemDeleteCommand' => [
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
                            'times' => 0,
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
                    'ItemRepositoryInterface' => [
                        'get' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => 'e3ad518e-3d1e-3eed-b942-249e752aa874',
                                'getUuid' => [
                                    'toString' => '00e5df31-b418-321b-9fd9-9af1d0bd3c2b',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 5,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                            'getName' => [
                                'toNative' => 'Presley Mitchell II',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://www.donnelly.net/',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '08:57:40',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '00:53:05',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '04:11:56',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '08:35:48',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '01:47:11',
                                ],
                            ],
                            'initializeState' => 'Maine',
                            'getPlayhead' => 2,
                        ],
                        'store' => null,
                    ],
                    'ItemDeleteCommand' => [
                        'getItemUuid' => [
                            'toNative' => '4ff2ff28-30d2-3302-96e4-5b6c6275d8b9',
                            'getUuid' => [
                                'toString' => '5b7e6dff-a1fc-389e-b1b4-f514f6141e9b',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getProcessUuid' => [
                            'toNative' => '54f5dd71-6426-39a1-ab99-029f626c271f',
                            'getUuid' => [
                                'toString' => '604fc7f4-9590-3cfa-88fb-44ba44fd91b0',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '9517e273-eef3-370e-8266-3dec570b4b37',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'addId' => 0,
                            'delete' => 1,
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
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
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
                            'initializeState' => 0,
                            'getPlayhead' => 0,
                        ],
                        'store' => 1,
                    ],
                    'ItemDeleteCommand' => [
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
                            'times' => 0,
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
                    'ItemRepositoryInterface' => [
                        'get' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => '3b64c6ff-5d31-3a36-a264-47f7c5968779',
                                'getUuid' => [
                                    'toString' => '1669db84-0265-338e-b03f-6b9c09039a01',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'getName' => [
                                'toNative' => 'Annie Batz Jr.',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                            'getUrl' => [
                                'toNative' => 'https://www.wilkinson.com/pariatur-accusantium-dolorum-ipsa-quidem-voluptatem',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '04:25:28',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '15:07:55',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '19:21:56',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '13:32:33',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '13:25:04',
                                ],
                            ],
                            'initializeState' => 'New Hampshire',
                            'getPlayhead' => 5,
                        ],
                        'store' => null,
                    ],
                    'ItemDeleteCommand' => [
                        'getItemUuid' => [
                            'toNative' => 'fbe66ac4-f3c3-3778-8e1c-2e8f044619d1',
                            'getUuid' => [
                                'toString' => '723c5b46-503f-3b81-b401-193ac2cb9d10',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'f69a7ba6-31e7-3f67-b3c2-46c815951ee7',
                            'getUuid' => [
                                'toString' => '8c311f06-e021-3ea2-8894-c45ad2e09317',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => 'c0034bf1-a20a-354e-bdab-c69d941a2fee',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'addId' => 0,
                            'delete' => 1,
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
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
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
                            'initializeState' => 0,
                            'getPlayhead' => 0,
                        ],
                        'store' => 1,
                    ],
                    'ItemDeleteCommand' => [
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
                            'times' => 0,
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
                    'ItemRepositoryInterface' => [
                        'get' => [
                            'addId' => null,
                            'delete' => null,
                            'getUuid' => [
                                'toNative' => '10831da8-645f-30a8-a2ff-395efea96898',
                                'getUuid' => [
                                    'toString' => '5e1453a9-0e2c-3698-b1a8-2caecef355fc',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 2,
                            ],
                            'getName' => [
                                'toNative' => 'Veda Barton',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                            'getUrl' => [
                                'toNative' => 'https://www.parker.org/placeat-et-saepe-perferendis-repellat',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '00:36:48',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '05:30:10',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '11:02:58',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '05:54:40',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '03:38:09',
                                ],
                            ],
                            'initializeState' => 'Washington',
                            'getPlayhead' => 7,
                        ],
                        'store' => null,
                    ],
                    'ItemDeleteCommand' => [
                        'getItemUuid' => [
                            'toNative' => '9fa4a41c-85fb-354d-ac3f-f36f3167b081',
                            'getUuid' => [
                                'toString' => 'a2c145f7-ddc8-319d-b0b2-b6f2f0d3dccc',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getProcessUuid' => [
                            'toNative' => '2c18f043-a2ad-3cdb-90ea-e0ae5567838a',
                            'getUuid' => [
                                'toString' => 'a5dba9c9-96d0-3481-88ca-566d1cba822c',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '431422ad-c867-3262-ac11-1f85710cda0f',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'addId' => 0,
                            'delete' => 1,
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
                            ],
                            'getParentId' => [
                                'times' => 0,
                                'sameValueAs' => 0,
                                'toNative' => 0,
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
                            'initializeState' => 0,
                            'getPlayhead' => 0,
                        ],
                        'store' => 1,
                    ],
                    'ItemDeleteCommand' => [
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
                            'times' => 0,
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
