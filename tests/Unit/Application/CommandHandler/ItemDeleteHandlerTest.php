<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Application\CommandHandler\ItemDeleteHandler;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Application\CommandMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Throwable;

/**
 * Test for class ItemDeleteHandler.
 *
 * @class ItemDeleteHandlerTest
 */
class ItemDeleteHandlerTest extends UnitTestCase
{
    use ValueObjectMockHelper, EntityMockHelper, RepositoryMockHelper, CommandMockHelper;

    /**
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemDeleteHandler::__construct
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemDeleteHandler::handle
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemDeleteHandler::handle
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\ApplicationCommandHandler$1HandlerDataProvider::getDataForHandleMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Throwable
     */
    public function handleShouldProcessCommandAndReturnVoidTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryItemRepositoryInterfaceMock = $this->createDomainRepositoryItemRepositoryInterfaceMock($mockArgs['ItemRepositoryInterface'], $mockTimes['ItemRepositoryInterface']);
        $test = new ItemDeleteHandler($domainRepositoryItemRepositoryInterfaceMock);
        $applicationCommandItemDeleteCommandMock = $this->createDomainCommandItemDeleteCommandMock($mockArgs['ItemDeleteCommand'], $mockTimes['ItemDeleteCommand']);
        $test->handle($applicationCommandItemDeleteCommandMock);
    }
}
