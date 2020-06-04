<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Dto;

/**
 * DataProvider for class {testClassName}.
 */
class ItemDtoDataProvider
{
    /**
     * Return test data for Backend\Api\RpcSkeleton\Application\Dto\ItemDto.
     *
     * @return mixed[]
     */
    public function getData(): array
    {
        return [
            0 => [
                0 => [
                    'parentId' => 9,
                    'name' => 'Miss Susan Bashirian IV',
                    'data' => [
                        'uuid' => 'fde506f7-2306-309d-b53b-8a6296b4a9ab',
                        'version' => '0.1',
                        'name' => 'Miss Susan Bashirian IV',
                        'parentId' => 9,
                        'url' => 'https://www.rempel.net/sit-est-odit-qui-ex-quasi-suscipit',
                        'status' => 9,
                        'createdAt' => '2019-05-02',
                        'updatedAt' => '1971-11-19',
                    ],
                ],
                1 => [],
            ],
            1 => [
                0 => [
                    'parentId' => 222222,
                    'name' => 'Amir Wintheiser',
                    'data' => [
                        'uuid' => '73fa2a35-f929-3381-8460-f38373ad5feb',
                        'version' => 'omnis',
                        'name' => 'Amir Wintheiser',
                        'parentId' => 2,
                        'url' => 'http://www.metz.biz/quibusdam-sed-quod-consequatur-magni-praesentium-quis-voluptatem',
                        'status' => 2,
                        'createdAt' => '1992-04-21',
                        'updatedAt' => '2016-01-03',
                    ],
                ],
                1 => [],
            ],
            2 => [
                0 => [
                    'parentId' => 0,
                    'name' => 'Prof. Tristian Harber',
                    'data' => [
                        'uuid' => '367da075-c818-3e21-88b5-17e27d836472',
                        'version' => '1',
                        'name' => 'Prof. Tristian Harber',
                        'parentId' => 0,
                        'url' => 'http://www.runolfsson.com/accusantium-aliquid-perspiciatis-sint-perferendis-ratione-et-beatae.html',
                        'status' => 3,
                        'createdAt' => '1980-03-10',
                        'updatedAt' => '1982-10-08',
                    ],
                ],
                1 => [],
            ],
        ];
    }
}
