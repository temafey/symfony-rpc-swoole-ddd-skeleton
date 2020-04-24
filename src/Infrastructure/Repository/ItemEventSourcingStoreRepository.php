<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Infrastructure\Repository;

use Broadway\EventHandling\EventBus;
use Broadway\EventSourcing\AggregateFactory\PublicConstructorAggregateFactory;
use Broadway\EventSourcing\EventSourcingRepository;
use Broadway\EventSourcing\EventStreamDecorator;
use Broadway\EventStore\EventStore;
use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;

/**
 * Class ItemEventSourcingStoreRepository.
 *
 * @category Infrastructure\Repository
 * @sub-package ItemCollection
 */
class ItemEventSourcingStoreRepository extends EventSourcingRepository
{
    /**
     * ItemStore constructor.
     *
     * @param EventStore             $eventStore
     * @param EventBus               $eventBus
     * @param EventStreamDecorator[] $eventStreamDecorators
     */
    public function __construct(
        EventStore $eventStore,
        EventBus $eventBus,
        array $eventStreamDecorators = []
    ) {
        parent::__construct(
            $eventStore,
            $eventBus,
            ItemEntity::class,
            new PublicConstructorAggregateFactory(),
            $eventStreamDecorators
        );
    }
}
