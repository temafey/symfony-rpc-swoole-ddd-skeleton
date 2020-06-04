<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Factory;

use Backend\Api\RpcSkeleton\Domain\Event\ItemEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasAddedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasDeletedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasUpdatedEvent;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Id;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;
use Broadway\Domain\DomainEventStream;
use Broadway\Domain\DomainMessage;
use Broadway\Domain\Metadata;
use MicroModule\ValueObject\Identity\UUID as ProcessUuid;

/**
 * Class EventFactory.
 *
 * @category Domain\Factory
 * @SuppressWarnings(PHPMD)
 */
class EventFactory
{
    /**
     * Factory method for initialize new ItemEvent object.
     *
     * @param ProcessUuid $processUuid
     * @param Uuid        $uuid
     * @param Item        $item
     *
     * @return ItemWasCreatedEvent
     */
    public function makeItemWasCreatedEvent(ProcessUuid $processUuid, Uuid $uuid, Item $item): ItemWasCreatedEvent
    {
        return new ItemWasCreatedEvent($processUuid, $uuid, $item);
    }

    /**
     * Factory method for initialize new ItemEvent object.
     *
     * @param ProcessUuid $processUuid
     * @param Uuid        $uuid
     * @param Item        $item
     *
     * @return ItemWasUpdatedEvent
     */
    public function makeItemWasUpdatedEvent(ProcessUuid $processUuid, Uuid $uuid, Item $item): ItemWasUpdatedEvent
    {
        return new ItemWasUpdatedEvent($processUuid, $uuid, $item);
    }

    /**
     * Factory method for initialize new ItemEvent object.
     *
     * @param ProcessUuid $processUuid
     * @param Uuid        $uuid
     *
     * @return ItemWasDeletedEvent
     */
    public function makeItemWasDeletedEvent(ProcessUuid $processUuid, Uuid $uuid): ItemWasDeletedEvent
    {
        return new ItemWasDeletedEvent($processUuid, $uuid);
    }

    /**
     * Factory method for initialize new ItemEvent object.
     *
     * @param ProcessUuid $processUuid
     * @param Uuid        $uuid
     * @param Id          $id
     *
     * @return ItemIdWasCreatedEvent
     */
    public function makeItemIdWasCreatedEvent(ProcessUuid $processUuid, Uuid $uuid, Id $id): ItemIdWasCreatedEvent
    {
        return new ItemIdWasCreatedEvent($processUuid, $uuid, $id);
    }

    /**
     * Factory method for initialize new ItemEvent object.
     *
     * @param ProcessUuid $processUuid
     * @param Uuid        $uuid
     * @param Id          $id
     *
     * @return ItemIdWasAddedEvent
     */
    public function makeItemIdWasAddedEvent(ProcessUuid $processUuid, Uuid $uuid, Id $id): ItemIdWasAddedEvent
    {
        return new ItemIdWasAddedEvent($processUuid, $uuid, $id);
    }

    /**
     * Make and return event stream aggregator.
     *
     * @param ItemEvent $event
     *
     * @return DomainEventStream
     */
    public function makeEventStream(ItemEvent $event): DomainEventStream
    {
        $domainMessage = DomainMessage::recordNow($event->getUuid()->toNative(), 1, new Metadata([]), $event);

        return new DomainEventStream([$domainMessage]);
    }
}
