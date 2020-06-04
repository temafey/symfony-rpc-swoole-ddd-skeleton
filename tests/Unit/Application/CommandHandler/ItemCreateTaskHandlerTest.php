<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Application\CommandHandler\ItemCreateTaskHandler;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\CommandMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Throwable;

/**
 * Test for class ItemCreateTaskHandler.
 *
 * @class ItemCreateTaskHandlerTest
 */
class ItemCreateTaskHandlerTest extends UnitTestCase
{
    use RepositoryMockHelper, ValueObjectMockHelper, CommandMockHelper;

    /**
     * Test for "Handle ItemCreateTaskCommand command.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemCreateTaskHandler::__construct
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemCreateTaskHandler::handle
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\CommandHandler\ItemCreateTaskHandlerDataProvider::getDataForHandleMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Throwable
     */
    public function handleShouldProcessCommandAndReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryItemTaskRepositoryInterfaceMock = $this->createDomainRepositoryItemTaskRepositoryInterfaceMock($mockTimes['ItemTaskRepositoryInterface']);
        $test = new ItemCreateTaskHandler($domainRepositoryItemTaskRepositoryInterfaceMock);
        $applicationCommandItemCreateTaskCommandMock = $this->createDomainCommandItemCreateTaskCommandMock($mockArgs['ItemCreateTaskCommand'], $mockTimes['ItemCreateTaskCommand']);
        $result = $test->handle($applicationCommandItemCreateTaskCommandMock);

        self::assertTrue($result);
    }
}
