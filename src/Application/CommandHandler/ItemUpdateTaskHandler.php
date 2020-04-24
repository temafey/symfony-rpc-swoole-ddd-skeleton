<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Repository\ItemTaskRepositoryInterface;
use Throwable;

/**
 * Class ItemUpdateTaskHandler.
 */
final class ItemUpdateTaskHandler implements CommandHandlerInterface
{
    /**
     * EventSourcing repository for ItemEntity.
     *
     * @var ItemTaskRepositoryInterface
     */
    private ItemTaskRepositoryInterface $itemTaskRepository;

    /**
     * ImportItemDtoHandler constructor.
     *
     * @param ItemTaskRepositoryInterface $itemTaskRepository
     */
    public function __construct(
        ItemTaskRepositoryInterface $itemTaskRepository
    ) {
        $this->itemTaskRepository = $itemTaskRepository;
    }

    /**
     * Handle ItemUpdateTaskCommand command.
     *
     * @param ItemUpdateTaskCommand $command
     *
     * @return bool
     *
     * @throws Throwable
     */
    public function handle(ItemUpdateTaskCommand $command): bool
    {
        $this->itemTaskRepository->addUpdateTask($command->getProcessUuid(), $command->getItemUuid(), $command->getItem());

        return true;
    }
}
