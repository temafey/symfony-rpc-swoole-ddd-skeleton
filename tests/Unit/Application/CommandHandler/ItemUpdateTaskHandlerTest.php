<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Application\CommandHandler\ItemUpdateTaskHandler;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\CommandMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Throwable;

/**
 * Test for class ItemUpdateTaskHandler.
 *
 * @class ItemUpdateTaskHandlerTest
 */
class ItemUpdateTaskHandlerTest extends UnitTestCase
{
    use RepositoryMockHelper, ValueObjectMockHelper, CommandMockHelper;

    /**
     * Test for "Handle ItemUpdateTaskCommand command.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemUpdateTaskHandler::__construct
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemUpdateTaskHandler::handle
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\CommandHandler\ItemUpdateTaskHandlerDataProvider::getDataForHandleMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Throwable
     */
    public function handleShouldProcessCommandAndReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryItemTaskRepositoryInterfaceMock = $this->createDomainRepositoryItemTaskRepositoryInterfaceMock($mockTimes['ItemTaskRepositoryInterface']);
        $test = new ItemUpdateTaskHandler($domainRepositoryItemTaskRepositoryInterfaceMock);
        $applicationCommandItemUpdateTaskCommandMock = $this->createDomainCommandItemUpdateTaskCommandMock($mockArgs['ItemUpdateTaskCommand'], $mockTimes['ItemUpdateTaskCommand']);
        $result = $test->handle($applicationCommandItemUpdateTaskCommandMock);
        self::assertTrue($result);
    }
}
