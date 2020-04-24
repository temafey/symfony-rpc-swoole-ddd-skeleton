<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command;

/**
 * DataProvider for class {testClassName}.
 */
class ItemCreateTaskCommandDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Command\ItemCreateTaskCommand.
     *
     * @return mixed[]
     */
    public function getDataForGetItemMethod(): array
    {
        return [
            0 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'e03fec62-c5b8-332d-a07b-0e127f0983e6',
                        'getUuid' => [
                            'toString' => 'b4097486-9580-38d0-a8de-0c7edd3ff455',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'ut',
                            1 => 'dolore',
                            2 => 'ut',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'ut',
                            1 => 'dolore',
                            2 => 'ut',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 7,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Mr. Constantin Emard',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Mrs. Brenna Fadel',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://russel.com/deleniti-aut-neque-rerum',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setUrl' => 'http://www.schumm.info/ipsa-delectus-laudantium-reiciendis-non-voluptatem-quas-laborum',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '02:22:53',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '09:32:25',
                            ],
                            'sameValueAs' => false,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '05:01:22',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '02:49:10',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '08:20:56',
                            ],
                        ],
                        'setUpdatedAt' => '1998-01-31',
                        'serialize' => [
                            0 => 'ut',
                            1 => 'dolore',
                            2 => 'ut',
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Item' => [
                        'times' => 0,
                        'toArray' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
                        'getId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setParentId' => 0,
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setName' => 0,
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setStatus' => 0,
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setUrl' => 0,
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'setCreatedAt' => 0,
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
                        'setUpdatedAt' => 0,
                        'serialize' => 0,
                    ],
                ],
            ],
            1 => [
                0 => [
                    'UUID' => [
                        'toNative' => '8fe5d07c-19dc-3273-bc57-1a7295d32243',
                        'getUuid' => [
                            'toString' => '0966c65d-42a4-323d-94be-43a496878288',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'autem',
                            1 => 'voluptatem',
                            2 => 'et',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'autem',
                            1 => 'voluptatem',
                            2 => 'et',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 5,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 5,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Cole Windler',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Garret Homenick',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 5,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'https://mraz.info/est-perferendis-deleniti-delectus-impedit.html',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://effertz.com/voluptatem-officia-accusantium-nulla-officia-et',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '03:52:34',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '18:52:35',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '23:39:16',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '03:50:14',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '14:00:12',
                            ],
                        ],
                        'setUpdatedAt' => '1987-11-27',
                        'serialize' => [
                            0 => 'autem',
                            1 => 'voluptatem',
                            2 => 'et',
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Item' => [
                        'times' => 0,
                        'toArray' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
                        'getId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setParentId' => 0,
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setName' => 0,
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setStatus' => 0,
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setUrl' => 0,
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'setCreatedAt' => 0,
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
                        'setUpdatedAt' => 0,
                        'serialize' => 0,
                    ],
                ],
            ],
            2 => [
                0 => [
                    'UUID' => [
                        'toNative' => '80040195-87fe-3169-898b-f0b70a4e6f40',
                        'getUuid' => [
                            'toString' => '4b00da56-caf3-3b6b-bc88-87c13868d82a',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'et',
                            1 => 'non',
                            2 => 'quo',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'et',
                            1 => 'non',
                            2 => 'quo',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 4,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 6,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Hiram Roberts',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Ms. Betsy Brekke',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://hegmann.info/',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setUrl' => 'https://www.murphy.com/rerum-expedita-id-voluptates',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '05:24:08',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '21:45:17',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '22:17:31',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '01:48:07',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '05:43:34',
                            ],
                        ],
                        'setUpdatedAt' => '1985-04-19',
                        'serialize' => [
                            0 => 'et',
                            1 => 'non',
                            2 => 'quo',
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Item' => [
                        'times' => 0,
                        'toArray' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
                        'getId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setParentId' => 0,
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setName' => 0,
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setStatus' => 0,
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setUrl' => 0,
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'setCreatedAt' => 0,
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
                        'setUpdatedAt' => 0,
                        'serialize' => 0,
                    ],
                ],
            ],
            3 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'cd5fd517-89bc-319f-a714-5165dee2f362',
                        'getUuid' => [
                            'toString' => '766e33a5-62a6-33c2-a742-732519dfe836',
                        ],
                        'sameValueAs' => true,
                        'isEmpty' => true,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'id',
                            1 => 'quis',
                            2 => 'ducimus',
                        ],
                        'sameValueAs' => true,
                        'toNative' => [
                            0 => 'id',
                            1 => 'quis',
                            2 => 'ducimus',
                        ],
                        'getId' => [
                            'sameValueAs' => true,
                            'toNative' => 2,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 2,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Marcel Trantow',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setName' => 'Prof. Maggie Wolf IV',
                        'getStatus' => [
                            'isActive' => true,
                            'sameValueAs' => true,
                            'toNative' => 1,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'https://www.spencer.com/quis-veritatis-eligendi-cupiditate-ut-eaque-necessitatibus',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setUrl' => 'http://www.nader.com/et-debitis-quam-minus-voluptatum-pariatur-mollitia',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '05:34:00',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '00:15:47',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '01:52:15',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '12:47:28',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '08:04:25',
                            ],
                        ],
                        'setUpdatedAt' => '2003-08-21',
                        'serialize' => [
                            0 => 'id',
                            1 => 'quis',
                            2 => 'ducimus',
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Item' => [
                        'times' => 0,
                        'toArray' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
                        'getId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setParentId' => 0,
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setName' => 0,
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setStatus' => 0,
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setUrl' => 0,
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'setCreatedAt' => 0,
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
                        'setUpdatedAt' => 0,
                        'serialize' => 0,
                    ],
                ],
            ],
            4 => [
                0 => [
                    'UUID' => [
                        'toNative' => 'cc3d27cf-da72-3c37-b11b-de8c6736b222',
                        'getUuid' => [
                            'toString' => '5735816f-fd15-3ab0-9bac-73df80f0072f',
                        ],
                        'sameValueAs' => false,
                        'isEmpty' => false,
                    ],
                    'Item' => [
                        'toArray' => [
                            0 => 'quasi',
                            1 => 'eaque',
                            2 => 'laudantium',
                        ],
                        'sameValueAs' => false,
                        'toNative' => [
                            0 => 'quasi',
                            1 => 'eaque',
                            2 => 'laudantium',
                        ],
                        'getId' => [
                            'sameValueAs' => false,
                            'toNative' => 1,
                        ],
                        'setId' => null,
                        'getParentId' => [
                            'sameValueAs' => false,
                            'toNative' => 9,
                        ],
                        'setParentId' => null,
                        'getName' => [
                            'toNative' => 'Mollie Gulgowski',
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'setName' => 'Vivian Steuber',
                        'getStatus' => [
                            'isActive' => false,
                            'sameValueAs' => false,
                            'toNative' => 6,
                        ],
                        'setStatus' => null,
                        'getUrl' => [
                            'toNative' => 'http://www.thiel.com/',
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'setUrl' => 'http://www.vandervort.com/et-eaque-omnis-aut-laboriosam-dolor-exercitationem',
                        'getCreatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '00:39:26',
                            ],
                        ],
                        'setCreatedAt' => null,
                        'getUpdatedAt' => [
                            'toNative' => [
                                'getTimestamp' => '04:20:15',
                            ],
                            'sameValueAs' => true,
                            'getDate' => [
                                'toNative' => [
                                    'getTimestamp' => '07:32:20',
                                ],
                            ],
                            'getTime' => [
                                'toNative' => [
                                    'getTimestamp' => '16:30:04',
                                ],
                            ],
                            'toNativeDateTime' => [
                                'getTimestamp' => '14:12:03',
                            ],
                        ],
                        'setUpdatedAt' => '2011-10-25',
                        'serialize' => [
                            0 => 'quasi',
                            1 => 'eaque',
                            2 => 'laudantium',
                        ],
                    ],
                ],
                1 => [
                    'UUID' => [
                        'times' => 0,
                        'toNative' => 1,
                        'getUuid' => [
                            'times' => 1,
                            'toString' => 1,
                        ],
                        'sameValueAs' => 0,
                        'isEmpty' => 0,
                    ],
                    'Item' => [
                        'times' => 0,
                        'toArray' => 0,
                        'sameValueAs' => 0,
                        'toNative' => 1,
                        'getId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setId' => 0,
                        'getParentId' => [
                            'times' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setParentId' => 0,
                        'getName' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setName' => 0,
                        'getStatus' => [
                            'times' => 0,
                            'isActive' => 0,
                            'sameValueAs' => 0,
                            'toNative' => 0,
                        ],
                        'setStatus' => 0,
                        'getUrl' => [
                            'times' => 0,
                            'toNative' => 0,
                            'sameValueAs' => 0,
                            'isEmpty' => 0,
                        ],
                        'setUrl' => 0,
                        'getCreatedAt' => [
                            'times' => 0,
                            'toNative' => [
                                'times' => 0,
                                'getTimestamp' => 0,
                            ],
                        ],
                        'setCreatedAt' => 0,
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
                        'setUpdatedAt' => 0,
                        'serialize' => 0,
                    ],
                ],
            ],
        ];
    }
}
