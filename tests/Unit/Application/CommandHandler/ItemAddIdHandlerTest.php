<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Application\CommandHandler\ItemAddIdHandler;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\CommandMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Throwable;

/**
 * Test for class ItemAddIdHandler.
 *
 * @class ItemAddIdHandlerTest
 */
class ItemAddIdHandlerTest extends UnitTestCase
{
    use ValueObjectMockHelper, EntityMockHelper, RepositoryMockHelper, CommandMockHelper;

    /**
     * Test for "Handle ItemAddIdCommand command.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemAddIdHandler::handle
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\CommandHandler\ItemAddIdHandlerDataProvider::getDataForHandleMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Throwable
     */
    public function handleShouldProcessCommandAndReturnVoidTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryItemRepositoryInterfaceMock = $this->createDomainRepositoryItemRepositoryInterfaceMock($mockArgs['ItemRepositoryInterface'], $mockTimes['ItemRepositoryInterface']);
        $test = new ItemAddIdHandler($domainRepositoryItemRepositoryInterfaceMock);
        $applicationCommandItemAddIdCommandMock = $this->createDomainCommandItemAddIdCommandMock($mockArgs['ItemAddIdCommand'], $mockTimes['ItemAddIdCommand']);
        $test->handle($applicationCommandItemAddIdCommandMock);
    }
}
