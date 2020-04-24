<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\Dto;

use Backend\Api\RpcSkeleton\Application\Dto\ItemDto;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemDto.
 *
 * @class ItemDtoTest
 */
class ItemDtoTest extends UnitTestCase
{
    /**
     * Test for "Convert array to dto object.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Dto\ItemDto::denormalize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Dto\ItemDtoDataProvider::getData()
     *
     * @param mixed[] $mockArgs
     */
    public function denormalizeShouldReturnItemDtoTest(array $mockArgs): void
    {
        $data = $mockArgs['data'];
        $test = ItemDto::denormalize($data);

        self::assertInstanceOf(ItemDto::class, $test);
        self::assertEquals($data['version'], $test->getVersion());
        self::assertEquals($data['uuid'], $test->getUuid());
        self::assertEquals($data['name'], $test->getName());
        self::assertEquals($data['parentId'], $test->getParentId());
        self::assertEquals($data['url'], $test->getUrl());
        self::assertEquals($data['status'], $test->getStatus());
        self::assertEquals($data['createdAt'], $test->getCreatedAt());
        self::assertEquals($data['updatedAt'], $test->getUpdatedAt());
    }

    /**
     * Test for "Convert object dto to array.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Dto\ItemDto::normalize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Dto\ItemDtoDataProvider::getData()
     *
     * @param mixed[] $mockArgs
     */
    public function normalizeShouldReturnArrayTest(array $mockArgs): void
    {
        $data = $mockArgs['data'];
        $parentId = $mockArgs['parentId'];
        $name = $mockArgs['name'];
        $test = new ItemDto($parentId, $name);
        $test->setUuid($data['uuid']);
        $test->setName($data['name']);
        $test->setParentId($data['parentId']);
        $test->setUrl($data['url']);
        $test->setStatus($data['status']);
        $test->setCreatedAt($data['createdAt']);
        $test->setUpdatedAt($data['updatedAt']);
        $data['version'] = $test->getVersion();

        $result = $test->normalize();
        self::assertEquals($data, $result);
    }
}
