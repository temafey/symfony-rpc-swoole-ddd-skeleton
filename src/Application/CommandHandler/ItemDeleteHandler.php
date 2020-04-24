<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteCommand;
use Backend\Api\RpcSkeleton\Domain\Repository\ItemRepositoryInterface;
use Throwable;

/**
 * Class ItemDeleteHandler.
 */
final class ItemDeleteHandler implements CommandHandlerInterface
{
    /**
     * EventSourcing repository for ItemEntity.
     *
     * @var ItemRepositoryInterface
     */
    private ItemRepositoryInterface $itemRepository;

    /**
     * RequestHandler constructor.
     *
     * @param ItemRepositoryInterface $itemRepository
     */
    public function __construct(
        ItemRepositoryInterface $itemRepository
    ) {
        $this->itemRepository = $itemRepository;
    }

    /**
     * Handle ItemDeleteCommand command.
     *
     * @param ItemDeleteCommand $command
     *
     * @throws Throwable
     *
     * @suppress PhanTypeMismatchArgument
     */
    public function handle(ItemDeleteCommand $command): void
    {
        $item = $this->itemRepository->get($command->getItemUuid());
        $item->delete();
        $this->itemRepository->store($item);
    }
}
