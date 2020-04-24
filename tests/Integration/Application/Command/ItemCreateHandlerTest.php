<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Domain\Command;

use Exception;
use Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent;

/**
 * Class ItemCreateHandlerTest.
 *
 * @category Tests\Integration\Domain\Command\Program\Status
 */
class ItemCreateHandlerTest extends CommandTestCase
{
    /**
     * @test
     *
     * @group integration
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemCreateHandler::handle
     * @covers       \Backend\Api\RpcSkeleton\Application\CommandHandler\ItemCreateHandler::__construct
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
     *
     * @throws Exception
     */
    public function ItemCreateCommandShouldFireItemWasCreatedEventAndItemIdWasCreatedEventTest(
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
            'id' => ['getId' => 4, 'toNative' => 1],
            'parentId' => ['getParentId' => 4, 'toNative' => 1],
            'name' => ['getName' => 4, 'toNative' => 1],
            'url' => ['getUrl' => 4, 'toNative' => 1],
            'status' => ['getStatus' => 4, 'toNative' => 2],
            'createdAt' => ['getCreatedAt' => 4, 'toNative' => 1],
            'updatedAt' => ['getUpdatedAt' => (null === $updatedAt ? 2 : 4), 'toNative' => 1],
        ];
        $times = [
            'processUuid' => ['toNative' => 2, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 9, 'getUuid' => 0, 'toString' => 0],
            'item' => $itemTimes,
        ];
        $this->handleItemCreateCommand($processUuid, $uuid, $item, $times);

        $events = $this->getEvents();
        self::assertCount(2, $events);
        /** @var ItemWasCreatedEvent $itemWasCreatedEvent */
        $itemWasCreatedEvent = $events[0]->getPayload();
        /** @var ItemIdWasCreatedEvent $iItemIdWasCreatedEvent */
        $iItemIdWasCreatedEvent = $events[1]->getPayload();

        self::assertInstanceOf(ItemWasCreatedEvent::class, $itemWasCreatedEvent);
        self::assertSame($processUuid, $itemWasCreatedEvent->getProcessUuid()->toNative());
        self::assertSame($uuid, $itemWasCreatedEvent->getUuid()->toNative());
        self::assertSame($item, $itemWasCreatedEvent->getItem()->toNative());

        self::assertInstanceOf(ItemIdWasCreatedEvent::class, $iItemIdWasCreatedEvent);
        self::assertSame($processUuid, $iItemIdWasCreatedEvent->getProcessUuid()->toNative());
        self::assertSame($uuid, $iItemIdWasCreatedEvent->getUuid()->toNative());
        self::assertSame($id, $iItemIdWasCreatedEvent->getId()->toNative());
    }
}
