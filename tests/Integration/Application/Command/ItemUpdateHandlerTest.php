<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Domain\Command;

use Exception;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasUpdatedEvent;

/**
 * Class ItemUpdateHandlerTest.
 *
 * @category Tests\Integration\Domain\Command\Program\Status
 */
class ItemUpdateHandlerTest extends CommandTestCase
{
    /**
     * @test
     *
     * @group integration
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemUpdateHandler::handle
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemUpdateHandler::__construct
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\DataProvider\ItemDataProvider::getItemUpdates()
     *
     * @param mixed[] $item
     * @param mixed[] $updatedItem
     *
     * @throws Exception
     */
    public function ItemUpdateCommandShouldFireItemIdWasAddedEventTest(
        array $item,
        array $updatedItem
    ): void {
        $processUuid = array_shift($item);
        $updatedProcessUuid = array_shift($updatedItem);
        $uuid = array_shift($item);
        $updatedUuid = array_shift($updatedItem);
        [$item, $itemTimes] = $this->buildItemValueObject(...$item);
        $itemTimes = [
            'toNative' => 0,
            'id' => ['getId' => 6, 'toNative' => 1],
            'parentId' => ['getParentId' => 6, 'toNative' => 1],
            'name' => ['getName' => 6, 'toNative' => 1],
            'url' => ['getUrl' => 6, 'toNative' => 1],
            'status' => ['getStatus' => 6, 'toNative' => 2],
            'createdAt' => ['getCreatedAt' => 6, 'toNative' => 1],
            'updatedAt' => ['getUpdatedAt' => (null === $item['updatedAt'] ? 3 : 6), 'toNative' => 1],
        ];
        $times = [
            'processUuid' => ['toNative' => 1, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 13, 'getUuid' => 0, 'toString' => 0],
            'item' => $itemTimes,
        ];
        $this->handleItemCreateCommand($processUuid, $uuid, $item, $times);

        [$updatedItem, $itemTimes] = $this->buildItemValueObject(...$updatedItem);
        $itemTimes = [
            'toNative' => 1,
            'id' => ['getId' => 4, 'toNative' => 1],
            'parentId' => ['getParentId' => 4, 'toNative' => 1],
            'name' => ['getName' => 4, 'toNative' => 1],
            'url' => ['getUrl' => 4, 'toNative' => 1],
            'status' => ['getStatus' => 4, 'toNative' => 2],
            'createdAt' => ['getCreatedAt' => 4, 'toNative' => 1],
            'updatedAt' => ['getUpdatedAt' => 4, 'toNative' => 1],
        ];
        $times = [
            'processUuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 1, 'getUuid' => 0, 'toString' => 0],
            'item' => $itemTimes,
        ];
        $this->handleItemUpdateCommand($updatedProcessUuid, $updatedUuid, $updatedItem, $times);

        $events = $this->getEvents();
        self::assertCount(3, $events);
        /** @var ItemWasUpdatedEvent $event */
        $event = $events[2]->getPayload();

        self::assertInstanceOf(ItemWasUpdatedEvent::class, $event);
        self::assertSame($processUuid, $event->getProcessUuid()->toNative());
        self::assertSame($uuid, $event->getUuid()->toNative());
        self::assertSame($updatedItem, $event->getItem()->toNative());
    }
}
