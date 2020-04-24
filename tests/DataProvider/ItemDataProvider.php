<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\DataProvider;

/**
 * Class ItemDataProvider.
 *
 * @category Tests\DataProvider
 */
class ItemDataProvider
{
    /**
     * Return valid items fixtures.
     *
     * @return mixed[]
     */
    public function getItems(): array
    {
        return [
            [
                '08a5481c-5617-40be-a332-80b6be8a33a7',
                '4a1f1a18-3f14-41bb-a0b9-65664b82811f',
                1,
                0,
                'test_1',
                'http://test1.com',
                1,
                '2019-02-24 12:29:29',
                null,
                '0.0.1',
            ],
            [
                'ad763959-6abe-4e76-8acd-e6232d0870dd',
                '77c13b2d-7001-4244-8acb-e20eece3a469',
                2,
                1,
                'test_2',
                'http://test2.com',
                1,
                '2019-02-24 12:29:29',
                '2019-02-28 00:07:50',
                '0.0.1',
            ],
            [
                '29196894-8da5-4c49-8d3c-ac5513373719',
                'b9a2e24a-0649-401f-a8f6-cc2414dd2ecb',
                3,
                2,
                'test_3',
                'http://test3.com',
                0,
                '2019-02-28 00:07:50',
                '2019-04-02 23:13:18',
                '0.0.1',
            ],
            [
                '6f1530c5-d5e1-47de-8240-86d476f2f6a7',
                '3ad5eb02-6385-42cc-81d5-0cee30f98646',
                4,
                1,
                'test_4',
                'http://test4.com',
                1,
                '2019-04-02 23:13:18',
                '2019-07-02 19:49:22',
                '0.0.1',
            ],
            [
                '4a0842ae-8351-4fe2-ac1c-5ceb2461b69c',
                'b03c4972-b73d-4f9f-ba9a-1e44c3d7bde1',
                5,
                0,
                'test_5',
                'http://test5.com',
                1,
                '2019-07-02 19:49:22',
                '2019-03-19 11:10:19',
                '0.0.1',
            ],
        ];
    }

    /**
     * Return valid updated items fixtures.
     *
     * @return mixed[]
     */
    public function getUpdateItems(): array
    {
        return [
            [
                '08a5481c-5617-40be-a332-80b6be8a33a7',
                '4a1f1a18-3f14-41bb-a0b9-65664b82811f',
                1,
                0,
                'test_1_1',
                'http://test1_1.com',
                0,
                '2019-02-24 12:29:29',
                '2019-02-25 12:29:29',
                '0.0.1',
            ],
            [
                'ad763959-6abe-4e76-8acd-e6232d0870dd',
                '77c13b2d-7001-4244-8acb-e20eece3a469',
                2,
                0,
                'test_2_1',
                'http://test2_1.com',
                0,
                '2019-02-24 12:29:29',
                '2019-02-29 00:07:50',
                '0.0.1',
            ],
            [
                '29196894-8da5-4c49-8d3c-ac5513373719',
                'b9a2e24a-0649-401f-a8f6-cc2414dd2ecb',
                3,
                1,
                'test_3_1',
                'http://test3_1.com',
                0,
                '2019-02-28 00:07:50',
                '2019-04-03 23:13:18',
                '0.0.1',
            ],
            [
                '6f1530c5-d5e1-47de-8240-86d476f2f6a7',
                '3ad5eb02-6385-42cc-81d5-0cee30f98646',
                4,
                3,
                'test_4_1',
                'http://test4_1.com',
                0,
                '2019-04-02 23:13:18',
                '2019-07-02 19:49:22',
                '0.0.1',
            ],
            [
                '4a0842ae-8351-4fe2-ac1c-5ceb2461b69c',
                'b03c4972-b73d-4f9f-ba9a-1e44c3d7bde1',
                5,
                6,
                'test_5_1',
                'http://test5_1.com',
                0,
                '2019-07-02 19:49:22',
                '2019-03-20 11:10:19',
                '0.0.1',
            ],
        ];
    }

    /**
     * Return valid updated items fixtures.
     *
     * @return mixed[]
     */
    public function getItemUpdates(): array
    {
        $items = $this->getItems();
        $updatedItems = $this->getUpdateItems();
        $newItems = [];

        foreach ($items as $i => $item) {
            $newItems[] = [$item, $updatedItems[$i]];
        }

        return $newItems;
    }
}
