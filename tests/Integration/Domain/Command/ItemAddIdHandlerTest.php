<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Domain\Command;

use Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasAddedEvent;

/**
 * Class ItemAddIdHandlerTest.
 *
 * @category Tests\Integration\Domain\Command\Program\Status
 */
class ItemAddIdHandlerTest extends CommandTestCase
{
    /**
     * @test
     *
     * @group integration
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemAddIdHandler::handle
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemAddIdHandler::__construct
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\DataProvider\ItemDataProvider::getItems()
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
     */
    public function ItemAddIdCommandShouldFireItemIdWasAddedEventTest(
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
            'toNative' => 0,
            'id' => ['getId' => 6, 'toNative' => 1],
            'parentId' => ['getParentId' => 6, 'toNative' => 1],
            'name' => ['getName' => 6, 'toNative' => 1],
            'url' => ['getUrl' => 6, 'toNative' => 1],
            'status' => ['getStatus' => 6, 'toNative' => 2],
            'createdAt' => ['getCreatedAt' => 6, 'toNative' => 1],
            'updatedAt' => ['getUpdatedAt' => (null === $updatedAt ? 3 : 6), 'toNative' => 1],
        ];
        $times = [
            'processUuid' => ['toNative' => 1, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 11, 'getUuid' => 0, 'toString' => 0],
            'item' => $itemTimes,
        ];
        $this->handleItemCreateCommand($processUuid, $uuid, $item, $times);
        $times = [
            'processUuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 1, 'getUuid' => 0, 'toString' => 0],
            'id' => 1,
        ];
        $this->handleItemAddIdCommand($processUuid, $uuid, $id, $times);

        $events = $this->getEvents();
        self::assertCount(3, $events);
        /** @var ItemIdWasAddedEvent $event */
        $event = $events[2]->getPayload();

        self::assertInstanceOf(ItemIdWasAddedEvent::class, $event);
        self::assertSame($processUuid, $event->getProcessUuid()->toNative());
        self::assertSame($uuid, $event->getUuid()->toNative());
        self::assertSame($id, $event->getId()->toNative());
    }
}
