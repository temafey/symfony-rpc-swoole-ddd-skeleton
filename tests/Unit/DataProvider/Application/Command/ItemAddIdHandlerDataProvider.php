<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command;

/**
 * DataProvider for class {testClassName}.
 */
class ItemAddIdHandlerDataProvider
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
                                'toNative' => '30b03535-a17f-3211-b556-d08573b9818c',
                                'getUuid' => [
                                    'toString' => 'e36ca27c-1f97-368c-9373-67d8dc803b0b',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 1,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 9,
                            ],
                            'getName' => [
                                'toNative' => 'Ivory D\'Amore',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://reinger.info/',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '05:54:10',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '07:08:57',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '13:10:33',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '23:23:01',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '15:14:18',
                                ],
                            ],
                            'initializeState' => 'Iowa',
                            'getPlayhead' => 1,
                        ],
                        'store' => null,
                    ],
                    'ItemAddIdCommand' => [
                        'getItemUuid' => [
                            'toNative' => '9e2866c5-13cc-30c0-b57c-5b723c239560',
                            'getUuid' => [
                                'toString' => '7a5817c9-8ed4-3b55-9b07-5a35944669fb',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
                        ],
                        'getProcessUuid' => [
                            'toNative' => '9db62e1e-68c8-3988-9eaa-f3db92442abd',
                            'getUuid' => [
                                'toString' => '7a79631e-e910-3a8c-a041-7bb1645ae353',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => 'b258b4f1-318d-3228-a4c9-301d63d5b13a',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'addId' => 1,
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
                    'ItemAddIdCommand' => [
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
                        'getId' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                                'toNative' => '8337d4c9-6f10-3653-8b4b-b8384513384c',
                                'getUuid' => [
                                    'toString' => '0001e8f8-77a4-3a3e-bfb9-c21b376ab8fd',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'getName' => [
                                'toNative' => 'Dr. Derek Donnelly III',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 8,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://www.cummings.org/necessitatibus-enim-voluptates-enim-et-at-possimus-ea-pariatur',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '19:06:32',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '19:47:35',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '08:53:19',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '09:34:15',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '14:38:40',
                                ],
                            ],
                            'initializeState' => 'North Dakota',
                            'getPlayhead' => 3,
                        ],
                        'store' => null,
                    ],
                    'ItemAddIdCommand' => [
                        'getItemUuid' => [
                            'toNative' => '3f996095-5f3d-30b2-9fc2-17b890aea806',
                            'getUuid' => [
                                'toString' => '0e5c0b7c-d0c1-33c9-bce1-5e4fbd2e3233',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 8,
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'c3c9e71c-4211-3a26-a918-f4e225b50edd',
                            'getUuid' => [
                                'toString' => 'ce5cba5b-35fa-374d-907b-c8d062f16448',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => 'c933ee6a-5acc-372c-b6fd-1f3cf393a53a',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'addId' => 1,
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
                    'ItemAddIdCommand' => [
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
                        'getId' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                                'toNative' => 'b960f8e5-0f23-3efd-8374-e2660975e91a',
                                'getUuid' => [
                                    'toString' => '3c6f9c99-c785-35d2-b189-73e773793826',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 4,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 7,
                            ],
                            'getName' => [
                                'toNative' => 'Dr. Margaretta Luettgen',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://mann.com/',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '17:48:08',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '04:45:12',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '04:07:40',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '17:53:09',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '04:25:33',
                                ],
                            ],
                            'initializeState' => 'Colorado',
                            'getPlayhead' => 2,
                        ],
                        'store' => null,
                    ],
                    'ItemAddIdCommand' => [
                        'getItemUuid' => [
                            'toNative' => '3991ab7f-2499-3122-a304-e998c1d491cf',
                            'getUuid' => [
                                'toString' => 'de15329f-1795-3a53-bdaa-f7f3c1d58dbb',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'getProcessUuid' => [
                            'toNative' => '4871b71e-6ebe-3a8e-8dbd-17ef4c7f22b3',
                            'getUuid' => [
                                'toString' => '18d88864-225d-3b9a-a0f0-1cb586fcd369',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => '318a7239-a49c-3f77-9f4e-69059fd7d3ed',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'addId' => 1,
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
                    'ItemAddIdCommand' => [
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
                        'getId' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                                'toNative' => '661a13cd-483d-302e-a6a7-890168aa7407',
                                'getUuid' => [
                                    'toString' => 'd45d874b-0efc-3fa8-9a49-8c91e6b83772',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'getName' => [
                                'toNative' => 'Glennie Hauck',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://schulist.com/debitis-debitis-nesciunt-ut-quisquam-quia-expedita-reiciendis',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '11:54:12',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '11:50:37',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '15:59:03',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '06:52:41',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '13:32:57',
                                ],
                            ],
                            'initializeState' => 'Mississippi',
                            'getPlayhead' => 8,
                        ],
                        'store' => null,
                    ],
                    'ItemAddIdCommand' => [
                        'getItemUuid' => [
                            'toNative' => '2d791604-d7e3-30b0-a1ed-e65b69781112',
                            'getUuid' => [
                                'toString' => '2085668e-ae95-3579-b73a-330555594b4a',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 9,
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'bc378450-ae26-3ac8-b468-d3b9ef22aaf6',
                            'getUuid' => [
                                'toString' => 'd742d3ab-f8f0-3a25-92e2-32ae3e505866',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '06c98fac-6bc5-3f7e-8d0f-09aeb6e845f7',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'addId' => 1,
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
                    'ItemAddIdCommand' => [
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
                        'getId' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
                                'toNative' => '86eac718-ba3e-380e-a246-ef38538ad30d',
                                'getUuid' => [
                                    'toString' => 'ead5b133-79b4-3419-b7b6-3717c0b269dd',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'getName' => [
                                'toNative' => 'Mrs. Esther Greenfelder II',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 4,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://www.franecki.info/tenetur-omnis-ex-id-et-eos-molestias-laudantium-qui.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '16:24:26',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '01:20:00',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '18:19:51',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '02:13:51',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '18:08:27',
                                ],
                            ],
                            'initializeState' => 'Georgia',
                            'getPlayhead' => 9,
                        ],
                        'store' => null,
                    ],
                    'ItemAddIdCommand' => [
                        'getItemUuid' => [
                            'toNative' => 'cd4cf1cf-3796-3aae-bdb6-fd08c252b00e',
                            'getUuid' => [
                                'toString' => '6d9beb5d-1eab-333b-87d7-c7159b6ce37f',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 9,
                        ],
                        'getProcessUuid' => [
                            'toNative' => 'e695d9e1-c9f3-3c13-8af5-3f5e59b4ca20',
                            'getUuid' => [
                                'toString' => '7b506cbc-97ed-344b-b73b-06f0b177b15c',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '115cc86d-f10e-3e6f-8b0e-70b009934ce2',
                        ],
                    ],
                ],
                1 => [
                    'ItemRepositoryInterface' => [
                        'times' => 0,
                        'get' => [
                            'times' => 1,
                            'addId' => 1,
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
                    'ItemAddIdCommand' => [
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
                        'getId' => [
                            'times' => 1,
                            'sameValueAs' => 0,
                            'toNative' => 0,
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
