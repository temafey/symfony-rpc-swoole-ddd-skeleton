<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Application\CommandHandler\ItemUpdateHandler;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\CommandMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Throwable;

/**
 * Test for class ItemUpdateHandler.
 *
 * @class ItemUpdateHandlerTest
 */
class ItemUpdateHandlerTest extends UnitTestCase
{
    use ValueObjectMockHelper, EntityMockHelper, RepositoryMockHelper, CommandMockHelper;

    /**
     * Test for "Handle UpdateItemCommand command.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemUpdateHandler::__construct
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemUpdateHandler::handle
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\CommandHandler\ItemUpdateHandlerDataProvider::getDataForHandleMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Throwable
     */
    public function handleShouldProcessCommandAndReturnVoidTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryItemRepositoryInterfaceMock = $this->createDomainRepositoryItemRepositoryInterfaceMock($mockArgs['ItemRepositoryInterface'], $mockTimes['ItemRepositoryInterface']);
        $test = new ItemUpdateHandler($domainRepositoryItemRepositoryInterfaceMock);
        $applicationCommandItemUpdateCommandMock = $this->createDomainCommandItemUpdateCommandMock($mockArgs['ItemUpdateCommand'], $mockTimes['ItemUpdateCommand']);
        $test->handle($applicationCommandItemUpdateCommandMock);
    }
}
