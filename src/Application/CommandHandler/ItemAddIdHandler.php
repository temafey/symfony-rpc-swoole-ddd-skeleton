<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand;
use Backend\Api\RpcSkeleton\Domain\Repository\ItemRepositoryInterface;
use Throwable;

/**
 * Class ItemAddIdHandler.
 */
final class ItemAddIdHandler implements CommandHandlerInterface
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
     * Handle ItemAddIdCommand command.
     *
     * @param ItemAddIdCommand $command
     *
     * @throws Throwable
     *
     * @suppress PhanTypeMismatchArgument
     */
    public function handle(ItemAddIdCommand $command): void
    {
        $item = $this->itemRepository->get($command->getItemUuid());
        $item->addId($command->getId());
        $this->itemRepository->store($item);
    }
}
