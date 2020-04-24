<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Domain\Command\ItemCreateTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Repository\ItemTaskRepositoryInterface;
use Throwable;

/**
 * Class ImportItemDtoHandler.
 */
final class ItemCreateTaskHandler implements CommandHandlerInterface
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
     * Handle ItemCreateTaskCommand command.
     *
     * @param ItemCreateTaskCommand $command
     *
     * @return bool
     *
     * @throws Throwable
     */
    public function handle(ItemCreateTaskCommand $command): bool
    {
        $this->itemTaskRepository->addCreateTask($command->getProcessUuid(), $command->getItem());

        return true;
    }
}
