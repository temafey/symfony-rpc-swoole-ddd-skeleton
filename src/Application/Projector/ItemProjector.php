<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\Projector;

use Backend\Api\RpcSkeleton\Domain\Event\ItemEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasDeletedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasUpdatedEvent;
use Backend\Api\RpcSkeleton\Domain\Exception\ItemNotFoundException;
use Backend\Api\RpcSkeleton\Domain\Exception\ValueObjectInvalidException;
use Backend\Api\RpcSkeleton\Domain\Factory\EventFactory;
use Backend\Api\RpcSkeleton\Domain\Factory\ItemFactory;
use Backend\Api\RpcSkeleton\Domain\Repository\CommandRepositoryInterface;
use Backend\Api\RpcSkeleton\Domain\Repository\QueryRepositoryInterface;
use Broadway\EventHandling\EventBus;
use Broadway\ReadModel\Projector;

/**
 * Class ItemProjector.
 *
 * @SuppressWarnings(PHPMD)
 */
class ItemProjector extends Projector
{
    /**
     * CQRS command repository.
     *
     * @var CommandRepositoryInterface
     */
    private CommandRepositoryInterface $commandRepository;

    /**
     * CQRS query repository.
     *
     * @var QueryRepositoryInterface
     */
    private QueryRepositoryInterface $queryRepository;

    /**
     * EventBus.
     *
     * @var EventBus
     */
    private EventBus $eventBus;

    /**
     * EventFactory.
     *
     * @var EventFactory
     */
    private EventFactory $eventFactory;

    /**
     * Item entity factory.
     *
     * @var ItemFactory
     */
    private ItemFactory $itemFactory;

    /**
     * ItemProjector constructor.
     *
     * @param CommandRepositoryInterface $commandRepository
     * @param QueryRepositoryInterface   $queryRepository
     * @param ItemFactory                $itemFactory
     * @param EventBus                   $eventBus
     * @param EventFactory               $eventFactory
     */
    public function __construct(
        CommandRepositoryInterface $commandRepository,
        QueryRepositoryInterface $queryRepository,
        ItemFactory $itemFactory,
        EventBus $eventBus,
        EventFactory $eventFactory
    ) {
        $this->commandRepository = $commandRepository;
        $this->queryRepository = $queryRepository;
        $this->itemFactory = $itemFactory;
        $this->eventBus = $eventBus;
        $this->eventFactory = $eventFactory;
    }

    /**
     * Apply ItemWasCreatedEvent event.
     *
     * @param ItemWasCreatedEvent $event
     *
     * @throws ValueObjectInvalidException
     */
    public function applyItemWasCreatedEvent(ItemWasCreatedEvent $event): void
    {
        $itemEntity = $this->itemFactory->makeActualInstance($event->getUuid(), $event->getItem());
        $this->commandRepository->add($itemEntity);
        $itemEntity = $this->queryRepository->findByUuid($event->getUuid());

        if (null === $itemEntity) {
            throw new ItemNotFoundException(sprintf('ItemEntity not found with uuid \'%s\'.', $event->getUuid()->toNative()));
        }
        $event = $this->eventFactory->makeItemIdWasCreatedEvent($event->getProcessUuid(), $event->getUuid(), $itemEntity->getId());
        $this->apply($event);
    }

    /**
     * Apply ItemWasCreatedEvent event.
     *
     * @param ItemWasUpdatedEvent $event
     *
     * @throws ValueObjectInvalidException
     */
    public function applyItemWasUpdatedEvent(ItemWasUpdatedEvent $event): void
    {
        $itemEntity = $this->itemFactory->makeActualInstance($event->getUuid(), $event->getItem());
        $this->commandRepository->update($itemEntity);
    }

    /**
     * Apply ItemWasCreatedEvent event.
     *
     * @param ItemWasDeletedEvent $event
     */
    public function applyItemWasDeletedEvent(ItemWasDeletedEvent $event): void
    {
        $itemEntity = $this->queryRepository->findByUuid($event->getUuid());

        if (null === $itemEntity) {
            throw new ItemNotFoundException(sprintf('ItemEntity not found with uuid \'%s\'.', $event->getUuid()->toNative()));
        }
        $this->commandRepository->delete($itemEntity);
    }

    /**
     * Applies an event. The event is added to the AggregateRoot's list of uncommitted events.
     *
     * @param ItemEvent $event
     */
    public function apply(ItemEvent $event): void
    {
        $eventStream = $this->eventFactory->makeEventStream($event);
        $this->eventBus->publish($eventStream);
    }
}
