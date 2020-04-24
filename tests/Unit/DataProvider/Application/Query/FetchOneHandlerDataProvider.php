<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Query;

/**
 * DataProvider for class {testClassName}.
 */
class FetchOneHandlerDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Domain\Query\FetchOneHandler.
     *
     * @return mixed[]
     */
    public function getFetchOneHandlerData(): array
    {
        return [
            0 => [
                0 => [
                    'QueryRepositoryInterface' => [
                        'findByUuid' => [
                            'addId' => null,
                            'getUuid' => [
                                'toNative' => 'b278d1e7-8d36-3df9-84a0-55f842dd0c21',
                                'getUuid' => [
                                    'toString' => '2f1034b1-c063-3e9f-a4f5-45a4fcd211a7',
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
                                'toNative' => 6,
                            ],
                            'getName' => [
                                'toNative' => 'Treva King',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://glover.info/',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '02:48:35',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '10:00:23',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '19:03:34',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '05:42:26',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '07:14:44',
                                ],
                            ],
                            'initializeState' => 'New York',
                            'getPlayhead' => 3,
                        ],
                        'findByCriteria' => null,
                    ],
                    'ItemAssembler' => [
                        'writeDto' => [
                            'normalize' => null,
                            'getUuid' => 'd6ef9245-3d47-312f-b1d7-2e230f96ea00',
                            'setUuid' => 'ea5b040a-f5ac-3c54-be85-dadfd4e8c84d',
                            'getVersion' => 'fugit',
                            'getName' => 'Dr. Ottis Schinner II',
                            'setName' => 'Rogers Ruecker III',
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                            'setParentId' => null,
                            'getUrl' => 'http://www.thiel.com/',
                            'setUrl' => 'http://www.schmeler.com/quos-dolor-sunt-nisi-esse-vitae-hic.html',
                            'getStatus' => 9,
                            'setStatus' => null,
                            'getCreatedAt' => 'fugit',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '2010-08-05',
                            'setUpdatedAt' => '1983-08-18',
                        ],
                    ],
                    'FetchOneCommand' => [
                        'getItemUuid' => [
                            'toNative' => '50b2154f-1813-3a55-84b3-16041f86929c',
                            'getUuid' => [
                                'toString' => 'af8307a9-49f7-3342-9db3-a33f09797abf',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '42bf18e9-812c-3393-84db-a84cf43a04bc',
                        ],
                    ],
                ],
                1 => [
                    'QueryRepositoryInterface' => [
                        'times' => 0,
                        'findByUuid' => [
                            'times' => 1,
                            'addId' => 0,
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
                    ],
                    'ItemAssembler' => [
                        'times' => 0,
                        'writeDto' => [
                            'times' => 1,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                        ],
                    ],
                    'FetchOneCommand' => [
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
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            1 => [
                0 => [
                    'QueryRepositoryInterface' => [
                        'findByUuid' => [
                            'addId' => null,
                            'getUuid' => [
                                'toNative' => '6a671fb2-5173-3aa2-9ac7-c951324c0ac2',
                                'getUuid' => [
                                    'toString' => '957220da-823f-33a3-aef1-dbf6579bf29c',
                                ],
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 5,
                            ],
                            'getName' => [
                                'toNative' => 'Everette Rogahn',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 3,
                            ],
                            'getUrl' => [
                                'toNative' => 'https://sipes.info/laborum-accusantium-nostrum-id-provident-voluptatem.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '23:47:26',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '09:34:56',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '11:26:21',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '14:25:42',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '04:17:43',
                                ],
                            ],
                            'initializeState' => 'California',
                            'getPlayhead' => 7,
                        ],
                        'findByCriteria' => null,
                    ],
                    'ItemAssembler' => [
                        'writeDto' => [
                            'normalize' => null,
                            'getUuid' => 'b9e3978a-2c18-368d-a2b2-aed61842e826',
                            'setUuid' => '6cb84052-8dfb-3bd3-8810-6fe5cb89d01a',
                            'getVersion' => 'tenetur',
                            'getName' => 'Mikayla Gaylord',
                            'setName' => 'Dr. Sherwood Kuphal II',
                            'getParentId' => 4,
                            'setParentId' => null,
                            'getUrl' => 'http://www.prosacco.com/quis-qui-quas-impedit-reprehenderit-maiores',
                            'setUrl' => 'http://www.macejkovic.info/tempore-voluptatum-ut-aut-in-delectus-ab-sed',
                            'getStatus' => 4,
                            'setStatus' => null,
                            'getCreatedAt' => 'tenetur',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '1983-01-04',
                            'setUpdatedAt' => '2008-12-26',
                        ],
                    ],
                    'FetchOneCommand' => [
                        'getItemUuid' => [
                            'toNative' => 'bba91298-72ec-3758-8d8a-8e5c9a36ad6a',
                            'getUuid' => [
                                'toString' => '64e4502a-0304-3103-8790-0873346e109a',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => 'c08786c6-04b1-302a-8c63-51c91c8a67d1',
                        ],
                    ],
                ],
                1 => [
                    'QueryRepositoryInterface' => [
                        'times' => 0,
                        'findByUuid' => [
                            'times' => 1,
                            'addId' => 0,
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
                    ],
                    'ItemAssembler' => [
                        'times' => 0,
                        'writeDto' => [
                            'times' => 1,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                        ],
                    ],
                    'FetchOneCommand' => [
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
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            2 => [
                0 => [
                    'QueryRepositoryInterface' => [
                        'findByUuid' => [
                            'addId' => null,
                            'getUuid' => [
                                'toNative' => 'ba7499a6-6d7d-3ce4-a5a2-034e723f6870',
                                'getUuid' => [
                                    'toString' => 'd7b2a641-6290-3d4c-9bf2-fead723100a5',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 6,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'getName' => [
                                'toNative' => 'Larue Hagenes',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => false,
                                'sameValueAs' => false,
                                'toNative' => 8,
                            ],
                            'getUrl' => [
                                'toNative' => 'https://padberg.info/vero-tempore-ut-consequatur-laboriosam-ut-laboriosam-et.html',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '13:30:19',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '22:46:29',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '15:21:05',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '17:42:28',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '10:40:46',
                                ],
                            ],
                            'initializeState' => 'South Dakota',
                            'getPlayhead' => 1,
                        ],
                        'findByCriteria' => null,
                    ],
                    'ItemAssembler' => [
                        'writeDto' => [
                            'normalize' => null,
                            'getUuid' => 'dabd3b8c-1774-3f94-926a-da4bb05d562b',
                            'setUuid' => '694db18c-31de-3984-a473-004e9f9d878d',
                            'getVersion' => 'nemo',
                            'getName' => 'Eugene Franecki',
                            'setName' => 'Mr. Francis Kirlin',
                            'getParentId' => [
                                'sameValueAs' => true,
                                'toNative' => 9,
                            ],
                            'setParentId' => null,
                            'getUrl' => 'http://moore.com/perspiciatis-aliquam-rerum-ut',
                            'setUrl' => 'http://www.barton.com/expedita-assumenda-nulla-nihil-aut-accusamus-ut-asperiores-qui.html',
                            'getStatus' => 4,
                            'setStatus' => null,
                            'getCreatedAt' => 'nemo',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '1979-03-02',
                            'setUpdatedAt' => '2007-12-26',
                        ],
                    ],
                    'FetchOneCommand' => [
                        'getItemUuid' => [
                            'toNative' => '9024a962-f8ee-39ff-94e9-0682165b4103',
                            'getUuid' => [
                                'toString' => '82b3c237-26cb-354f-acf7-9cfa03053d12',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => 'bcfee89f-8513-3f02-a27b-4a4e9739edfd',
                        ],
                    ],
                ],
                1 => [
                    'QueryRepositoryInterface' => [
                        'times' => 0,
                        'findByUuid' => [
                            'times' => 1,
                            'addId' => 0,
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
                    ],
                    'ItemAssembler' => [
                        'times' => 0,
                        'writeDto' => [
                            'times' => 1,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                        ],
                    ],
                    'FetchOneCommand' => [
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
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            3 => [
                0 => [
                    'QueryRepositoryInterface' => [
                        'findByUuid' => [
                            'addId' => null,
                            'getUuid' => [
                                'toNative' => '440d9453-c38b-391a-947f-89e994ef2b58',
                                'getUuid' => [
                                    'toString' => '71fad55e-305b-36fb-9535-8c2ec0be6fdc',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => true,
                                'toNative' => 6,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'getName' => [
                                'toNative' => 'Rose Bergstrom',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 3,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://www.crist.info/mollitia-illum-soluta-molestiae-eius-quo-eos.html',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '09:32:38',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '14:52:08',
                                ],
                                'sameValueAs' => true,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '16:07:39',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '18:06:28',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '14:14:45',
                                ],
                            ],
                            'initializeState' => 'Washington',
                            'getPlayhead' => 7,
                        ],
                        'findByCriteria' => null,
                    ],
                    'ItemAssembler' => [
                        'writeDto' => [
                            'normalize' => null,
                            'getUuid' => 'a83c4892-0391-364f-a6e2-9aec085fb88d',
                            'setUuid' => 'c392c3a2-ff91-3687-bb8c-39705181f947',
                            'getVersion' => 'porro',
                            'getName' => 'Jana Dach',
                            'setName' => 'Elvie Smitham',
                            'getParentId' => 7,
                            'setParentId' => null,
                            'getUrl' => 'http://nitzsche.com/',
                            'setUrl' => 'http://nader.com/quis-similique-illum-nobis-quod',
                            'getStatus' => 7,
                            'setStatus' => null,
                            'getCreatedAt' => 'porro',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '1970-09-18',
                            'setUpdatedAt' => '2013-10-28',
                        ],
                    ],
                    'FetchOneCommand' => [
                        'getItemUuid' => [
                            'toNative' => '78ab54ec-420c-32f5-bc48-e3dd862e5f53',
                            'getUuid' => [
                                'toString' => '115878d5-f1dc-34da-bdd3-615ec6263843',
                            ],
                            'sameValueAs' => true,
                            'isEmpty' => true,
                        ],
                        'getUuid' => [
                            'toString' => '359385ae-073f-398b-86c5-0671ebedcca6',
                        ],
                    ],
                ],
                1 => [
                    'QueryRepositoryInterface' => [
                        'times' => 0,
                        'findByUuid' => [
                            'times' => 1,
                            'addId' => 0,
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
                    ],
                    'ItemAssembler' => [
                        'times' => 0,
                        'writeDto' => [
                            'times' => 1,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                        ],
                    ],
                    'FetchOneCommand' => [
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
                        'getUuid' => [
                            'times' => 0,
                            'toString' => 0,
                        ],
                    ],
                ],
            ],
            4 => [
                0 => [
                    'QueryRepositoryInterface' => [
                        'findByUuid' => [
                            'addId' => null,
                            'getUuid' => [
                                'toNative' => '3dc0eac5-bcb9-339c-a67f-a13087affc35',
                                'getUuid' => [
                                    'toString' => '5a207da5-1a16-391d-b087-78c5528844e6',
                                ],
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getId' => [
                                'sameValueAs' => false,
                                'toNative' => 1,
                            ],
                            'getParentId' => [
                                'sameValueAs' => false,
                                'toNative' => 2,
                            ],
                            'getName' => [
                                'toNative' => 'Zoey Johnson',
                                'sameValueAs' => false,
                                'isEmpty' => false,
                            ],
                            'getStatus' => [
                                'isActive' => true,
                                'sameValueAs' => true,
                                'toNative' => 7,
                            ],
                            'getUrl' => [
                                'toNative' => 'http://smith.biz/',
                                'sameValueAs' => true,
                                'isEmpty' => true,
                            ],
                            'getCreatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '19:18:35',
                                ],
                            ],
                            'getUpdatedAt' => [
                                'toNative' => [
                                    'getTimestamp' => '20:47:50',
                                ],
                                'sameValueAs' => false,
                                'getDate' => [
                                    'toNative' => [
                                        'getTimestamp' => '01:07:35',
                                    ],
                                ],
                                'getTime' => [
                                    'toNative' => [
                                        'getTimestamp' => '12:49:12',
                                    ],
                                ],
                                'toNativeDateTime' => [
                                    'getTimestamp' => '11:50:26',
                                ],
                            ],
                            'initializeState' => 'New Mexico',
                            'getPlayhead' => 2,
                        ],
                        'findByCriteria' => null,
                    ],
                    'ItemAssembler' => [
                        'writeDto' => [
                            'normalize' => null,
                            'getUuid' => '145dabbe-59c9-3b34-8029-18f032b951ed',
                            'setUuid' => '65e5a8ff-861c-34b4-9b39-94c314198f80',
                            'getVersion' => 'ea',
                            'getName' => 'Shemar Stanton',
                            'setName' => 'Felicita Davis',
                            'getParentId' => 7,
                            'setParentId' => null,
                            'getUrl' => 'http://hyatt.com/',
                            'setUrl' => 'http://wintheiser.com/omnis-qui-eligendi-odio-autem',
                            'getStatus' => 7,
                            'setStatus' => null,
                            'getCreatedAt' => 'ea',
                            'setCreatedAt' => null,
                            'getUpdatedAt' => '2003-08-07',
                            'setUpdatedAt' => '1984-02-26',
                        ],
                    ],
                    'FetchOneCommand' => [
                        'getItemUuid' => [
                            'toNative' => 'b80575e2-cf58-34b3-b795-cd7885a40de6',
                            'getUuid' => [
                                'toString' => 'b4b927a2-3c68-3afa-bad0-9effa320da2d',
                            ],
                            'sameValueAs' => false,
                            'isEmpty' => false,
                        ],
                        'getUuid' => [
                            'toString' => 'a35facfa-64be-341e-8aa7-10788beff939',
                        ],
                    ],
                ],
                1 => [
                    'QueryRepositoryInterface' => [
                        'times' => 0,
                        'findByUuid' => [
                            'times' => 1,
                            'addId' => 0,
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
                    ],
                    'ItemAssembler' => [
                        'times' => 0,
                        'writeDto' => [
                            'times' => 1,
                            'normalize' => 0,
                            'getUuid' => 0,
                            'setUuid' => 0,
                            'getVersion' => 0,
                            'getName' => 0,
                            'setName' => 0,
                            'getParentId' => 0,
                            'setParentId' => 0,
                            'getUrl' => 0,
                            'setUrl' => 0,
                            'getStatus' => 0,
                            'setStatus' => 0,
                            'getCreatedAt' => 0,
                            'setCreatedAt' => 0,
                            'getUpdatedAt' => 0,
                            'setUpdatedAt' => 0,
                        ],
                    ],
                    'FetchOneCommand' => [
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
