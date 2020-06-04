<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\Service;

use Backend\Api\RpcSkeleton\Application\Dto\ItemDto;
use Backend\Api\RpcSkeleton\Application\Service\ItemAssembler;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Exception;

/**
 * Test for class ItemAssembler.
 *
 * @class ItemAssemblerTest
 */
class ItemAssemblerTest extends UnitTestCase
{
    use ValueObjectMockHelper, EntityMockHelper;

    /**
     * Test for "Assemble ItemDto object from ItemEntity.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Service\ItemAssembler::writeDto
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Service\ItemAssemblerDataProvider::getDataForWriteDtoMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function writeDtoShouldReturnItemDtoTest(array $mockArgs, array $mockTimes): void
    {
        $test = new ItemAssembler();
        $domainEntityItemEntityMock = $this->createDomainEntityItemEntityMock($mockArgs['ItemEntity'], $mockTimes['ItemEntity']);
        $result = $test->writeDto($domainEntityItemEntityMock);
        self::assertInstanceOf(ItemDto::class, $result);
        self::assertEquals($mockArgs['ItemEntity']['getUuid']['toNative'], $result->getUuid());
        self::assertEquals($mockArgs['ItemEntity']['getParentId']['toNative'], $result->getParentId());
        self::assertEquals($mockArgs['ItemEntity']['getName']['toNative'], $result->getName());
        self::assertEquals($mockArgs['ItemEntity']['getStatus']['toNative'], $result->getStatus());
        self::assertEquals($mockArgs['ItemEntity']['getUrl']['toNative'], $result->getUrl());
    }
}
