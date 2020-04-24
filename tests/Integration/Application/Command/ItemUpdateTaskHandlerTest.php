<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Domain\Command;

use MicroModule\Task\Application\Processor\JobCommandBusProcessor;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Factory\CommandFactory;

/**
 * Class ItemUpdateTaskHandlerTest.
 *
 * @category Tests\Integration\Domain\Command\Program\Status
 */
class ItemUpdateTaskHandlerTest extends CommandTestCase
{
    /**
     * @test
     *
     * @group integration
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemUpdateTaskHandler::handle
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemUpdateTaskHandler::__construct
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\DataProvider\ItemDataProvider::getUpdateItems()
     *
     * @param string      $processUuid
     * @param string      $uuid
     * @param int         $id
     * @param int         $parentId
     * @param string      $name
     * @param string      $url
     * @param int         $status
     * @param string|null $createdAt
     * @param string|null $updatedAt
     *
     * @throws Exception
     */
    public function ItemUpdateTaskCommandShouldFireUpdateItemJobToRepositoryTest(
        string $processUuid,
        string $uuid,
        int $id,
        int $parentId,
        string $name,
        string $url,
        int $status,
        ?string $createdAt,
        ?string $updatedAt
    ): void {
        [$item, $itemTimes] = $this->buildItemValueObject($id, $parentId, $name, $url, $status, $createdAt, $updatedAt);
        $itemTimes = [
            'toNative' => 1,
            'id' => ['getId' => 0, 'toNative' => 0],
            'parentId' => ['getParentId' => 0, 'toNative' => 0],
            'name' => ['getName' => 0, 'toNative' => 0],
            'url' => ['getUrl' => 0, 'toNative' => 0],
            'status' => ['getStatus' => 0, 'toNative' => 0],
            'createdAt' => ['getCreatedAt' => 0, 'toNative' => 0],
            'updatedAt' => ['getUpdatedAt' => 0, 'toNative' => 0],
        ];
        $times = [
            'processUuid' => ['toNative' => 1, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 1, 'getUuid' => 0, 'toString' => 0],
            'item' => $itemTimes,
        ];
        $this->handleItemUpdateTaskCommand($processUuid, $uuid, $item, $times);

        $queueTraces = $this->getProducer()->getCommandTraces(JobCommandBusProcessor::getRoute());
        self::assertCount(1, $queueTraces);
        self::assertEquals(CommandFactory::PROGRAM_READ_MODEL_UPDATE_COMMAND, $queueTraces[0]['body']['type']);
        self::assertEquals($processUuid, $queueTraces[0]['body']['args'][0]);
        self::assertEquals($uuid, $queueTraces[0]['body']['args'][1]);
        self::assertEquals($item, $queueTraces[0]['body']['args'][2]);
    }
}
