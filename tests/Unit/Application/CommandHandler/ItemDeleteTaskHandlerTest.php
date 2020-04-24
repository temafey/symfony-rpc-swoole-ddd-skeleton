<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Application\CommandHandler\ItemDeleteTaskHandler;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Application\CommandMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Throwable;

/**
 * Test for class ItemDeleteTaskHandler.
 *
 * @class ItemDeleteTaskHandlerTest
 */
class ItemDeleteTaskHandlerTest extends UnitTestCase
{
    use RepositoryMockHelper, ValueObjectMockHelper, CommandMockHelper;

    /**
     * Test for "Handle ItemDeleteTaskCommand command.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemDeleteTaskHandler::__construct
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemDeleteTaskHandler::handle
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\ApplicationCommandHandler$1HandlerDataProvider::getDataForHandleMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Throwable
     */
    public function handleShouldProcessCommandAndReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryItemTaskRepositoryInterfaceMock = $this->createDomainRepositoryItemTaskRepositoryInterfaceMock($mockTimes['ItemTaskRepositoryInterface']);
        $test = new ItemDeleteTaskHandler($domainRepositoryItemTaskRepositoryInterfaceMock);
        $applicationCommandItemDeleteTaskCommandMock = $this->createDomainCommandItemDeleteTaskCommandMock($mockArgs['ItemDeleteTaskCommand'], $mockTimes['ItemDeleteTaskCommand']);
        $result = $test->handle($applicationCommandItemDeleteTaskCommandMock);
        self::assertTrue($result);
    }
}
