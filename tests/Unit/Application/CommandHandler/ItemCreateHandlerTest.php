<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\CommandHandler;

use Exception;
use Backend\Api\RpcSkeleton\Application\CommandHandler\ItemCreateHandler;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Application\CommandMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\FactoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemCreateHandler.
 *
 * @class ItemCreateHandlerTest
 */
class ItemCreateHandlerTest extends UnitTestCase
{
    use ValueObjectMockHelper, EntityMockHelper, RepositoryMockHelper, FactoryMockHelper, CommandMockHelper;

    /**
     * Test for "Handle ImportItemDtoCommand command.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemCreateHandler::__construct
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemCreateHandler::handle
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\ApplicationCommandHandler$1HandlerDataProvider::getDataForHandleMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function handleShouldProcessCommandAndReturnVoidTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryItemRepositoryInterfaceMock = $this->createDomainRepositoryItemRepositoryInterfaceMock($mockArgs['ItemRepositoryInterface'], $mockTimes['ItemRepositoryInterface']);
        $domainFactoryItemFactoryMock = $this->createDomainFactoryItemFactoryMock($mockArgs['ItemFactory'], $mockTimes['ItemFactory']);
        $test = new ItemCreateHandler($domainRepositoryItemRepositoryInterfaceMock, $domainFactoryItemFactoryMock);
        $applicationCommandItemCreateCommandMock = $this->createDomainCommandItemCreateCommandMock($mockArgs['ItemCreateCommand'], $mockTimes['ItemCreateCommand']);
        $test->handle($applicationCommandItemCreateCommandMock);
    }
}
