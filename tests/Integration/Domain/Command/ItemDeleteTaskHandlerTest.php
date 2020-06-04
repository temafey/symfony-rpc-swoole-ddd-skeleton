<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Domain\Command;

use Backend\Api\RpcSkeleton\Application\Factory\CommandFactory;
use Exception;
use MicroModule\Task\Application\Processor\JobCommandBusProcessor;

/**
 * Class ItemDeleteTaskHandlerTest.
 *
 * @category Tests\Integration\Domain\Command\Program\Status
 */
class ItemDeleteTaskHandlerTest extends CommandTestCase
{
    /**
     * @test
     *
     * @group integration
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemDeleteTaskHandler::handle
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemDeleteTaskHandler::__construct
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\DataProvider\ItemDataProvider::getItems()
     *
     * @param string $processUuid
     * @param string $uuid
     *
     * @throws Exception
     */
    public function ItemDeleteTaskCommandShouldFireDeleteItemJobToRepositoryTest(
        string $processUuid,
        string $uuid
    ): void {
        $times = [
            'processUuid' => ['toNative' => 1, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 1, 'getUuid' => 0, 'toString' => 0],
        ];
        $this->handleItemDeleteTaskCommand($processUuid, $uuid, $times);
        $queueTraces = $this->getProducer()->getCommandTraces(JobCommandBusProcessor::getRoute());

        self::assertCount(1, $queueTraces);
        self::assertEquals(CommandFactory::PROGRAM_READ_MODEL_DELETE_COMMAND, $queueTraces[0]['body']['type']);
        self::assertEquals($processUuid, $queueTraces[0]['body']['args'][0]);
        self::assertEquals($uuid, $queueTraces[0]['body']['args'][1]);
    }
}
