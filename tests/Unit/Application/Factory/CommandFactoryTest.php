<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\Factory;

use Backend\Api\RpcSkeleton\Application\Factory\CommandFactory;
use Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemCreateTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Query\FetchOneCommand;
use Backend\Api\RpcSkeleton\Domain\Query\FindCommand;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Application\DtoMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Exception;
use MicroModule\Base\Domain\Command\CommandInterface;
use MicroModule\Base\Domain\Exception\FactoryException;

/**
 * Test for class CommandFactory.
 *
 * @class CommandFactoryTest
 */
class CommandFactoryTest extends UnitTestCase
{
    use DtoMockHelper, ValueObjectMockHelper;

    /**
     * Test for "Build and return FetchOneCommand object.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeCommandInstanceByType
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeFetchOneCommand
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Factory\CommandFactoryDataProvider::getDataForMakeFetchOneCommandMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws FactoryException
     */
    public function makeFetchOneCommandShouldReturnFetchOneCommandTest(array $mockArgs): void
    {
        $test = new CommandFactory();
        $uuid = $mockArgs['makeFetchOneCommand'];
        $result = $test->makeCommandInstanceByType(CommandFactory::PROGRAM_READ_MODEL_FETCH_ONE_COMMAND, $uuid);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(FetchOneCommand::class, $result);
        $result = $test->makeFetchOneCommand($uuid);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(FetchOneCommand::class, $result);
    }

    /**
     * Test for "Build and return makeFindCommand object.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeCommandInstanceByType
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeFindCommand
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Factory\CommandFactoryDataProvider::getDataForMakeFindCommandMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws FactoryException
     */
    public function makeFindCommandShouldReturnFindCommandTest(array $mockArgs): void
    {
        $test = new CommandFactory();
        $criteria = $mockArgs['makeFindCommand'];
        $result = $test->makeCommandInstanceByType(CommandFactory::PROGRAM_READ_MODEL_FIND_COMMAND, $criteria);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(FindCommand::class, $result);
        $result = $test->makeFindCommand($criteria);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(FindCommand::class, $result);
    }

    /**
     * Test for "Build and return ItemCreateTaskCommand object.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeCommandInstanceByType
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeItemCreateTaskCommand
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Factory\CommandFactoryDataProvider::getDataForMakeItemCreateTaskCommandMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function makeItemCreateTaskCommandShouldReturnItemCreateTaskCommandTest(array $mockArgs, array $mockTimes): void
    {
        $test = new CommandFactory();
        $domainDtoItemDtoMock = $this->createApplicationDtoItemDtoMock($mockArgs['ItemDto'], $mockTimes['ItemDto']);
        $result = $test->makeCommandInstanceByType(CommandFactory::PROGRAM_READ_MODEL_CREATE_TASK_COMMAND, $domainDtoItemDtoMock);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemCreateTaskCommand::class, $result);
        $result = $test->makeItemCreateTaskCommand($domainDtoItemDtoMock);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemCreateTaskCommand::class, $result);
    }

    /**
     * Test for "Build and return ItemCreateTaskCommand object.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeCommandInstanceByType
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeItemUpdateTaskCommand
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Factory\CommandFactoryDataProvider::getDataForMakeItemUpdateTaskCommandMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function makeItemUpdateTaskCommandShouldReturnItemUpdateTaskCommandTest(array $mockArgs, array $mockTimes): void
    {
        $test = new CommandFactory();
        $uuid = $mockArgs['makeItemUpdateTaskCommand'];
        $domainDtoItemDtoMock = $this->createApplicationDtoItemDtoMock($mockArgs['ItemDto'], $mockTimes['ItemDto']);
        $result = $test->makeCommandInstanceByType(CommandFactory::PROGRAM_READ_MODEL_UPDATE_TASK_COMMAND, $uuid, $domainDtoItemDtoMock);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemUpdateTaskCommand::class, $result);
        $result = $test->makeItemUpdateTaskCommand($uuid, $domainDtoItemDtoMock);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemUpdateTaskCommand::class, $result);
    }

    /**
     * Test for "Build and return ItemDeleteTaskCommand object.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeCommandInstanceByType
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeItemDeleteTaskCommand
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Factory\CommandFactoryDataProvider::getDataForMakeItemDeleteTaskCommandMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function makeItemDeleteTaskCommandShouldReturnItemDeleteTaskCommandTest(array $mockArgs): void
    {
        $test = new CommandFactory();
        $uuid = $mockArgs['makeItemDeleteTaskCommand'];
        $result = $test->makeCommandInstanceByType(CommandFactory::PROGRAM_READ_MODEL_DELETE_TASK_COMMAND, $uuid);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemDeleteTaskCommand::class, $result);
        $result = $test->makeItemDeleteTaskCommand($uuid);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemDeleteTaskCommand::class, $result);
    }

    /**
     * Test for "Build and return ImportItemStartCommand object.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeCommandInstanceByType
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeItemCreateCommand
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Factory\CommandFactoryDataProvider::getDataForMakeItemCreateCommandMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function makeItemCreateCommandShouldReturnItemCreateCommandTest(array $mockArgs): void
    {
        $test = new CommandFactory();
        $uuid = $mockArgs['makeItemCreateCommand'];
        $item = $mockArgs['item'];
        $result = $test->makeCommandInstanceByType(CommandFactory::PROGRAM_READ_MODEL_CREATE_COMMAND, $uuid, $item);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemCreateCommand::class, $result);
        $result = $test->makeItemCreateCommand($uuid, $item);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemCreateCommand::class, $result);
    }

    /**
     * Test for "Build and return UpdateItemCommand object.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeCommandInstanceByType
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeItemUpdateCommand
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Factory\CommandFactoryDataProvider::getDataForMakeItemUpdateCommandMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function makeItemUpdateCommandShouldReturnItemUpdateCommandTest(array $mockArgs): void
    {
        $test = new CommandFactory();
        $processUuid = $mockArgs['UUID']['toNative'];
        $uuid = $mockArgs['makeItemUpdateCommand'];
        $item = $mockArgs['item'];
        $result = $test->makeCommandInstanceByType(CommandFactory::PROGRAM_READ_MODEL_UPDATE_COMMAND, $processUuid, $uuid, $item);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemUpdateCommand::class, $result);
        $result = $test->makeItemUpdateCommand($processUuid, $uuid, $item);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemUpdateCommand::class, $result);
    }

    /**
     * Test for "Build and return ItemDeleteCommand object.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeCommandInstanceByType
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeItemDeleteCommand
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Factory\CommandFactoryDataProvider::getDataForMakeItemDeleteCommandMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function makeItemDeleteCommandShouldReturnItemDeleteCommandTest(array $mockArgs): void
    {
        $test = new CommandFactory();
        $processUuid = $mockArgs['UUID']['toNative'];
        $uuid = $mockArgs['makeItemDeleteCommand'];
        $result = $test->makeCommandInstanceByType(CommandFactory::PROGRAM_READ_MODEL_DELETE_COMMAND, $processUuid, $uuid);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemDeleteCommand::class, $result);
        $result = $test->makeItemDeleteCommand($processUuid, $uuid);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemDeleteCommand::class, $result);
    }

    /**
     * Test for "Build and return ItemDeleteCommand object.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Factory\CommandFactory::makeItemAddIdCommand
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Factory\CommandFactoryDataProvider::getDataForMakeItemAddIdCommandMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws FactoryException
     */
    public function makeItemAddIdCommandShouldReturnItemAddIdCommandTest(array $mockArgs, array $mockTimes): void
    {
        $test = new CommandFactory();
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
        $result = $test->makeCommandInstanceByType(CommandFactory::PROGRAM_READ_MODEL_ADD_ID_COMMAND, $microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectIdMock);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemAddIdCommand::class, $result);
        $result = $test->makeItemAddIdCommand($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectIdMock);
        self::assertInstanceOf(CommandInterface::class, $result);
        self::assertInstanceOf(ItemAddIdCommand::class, $result);
    }
}
