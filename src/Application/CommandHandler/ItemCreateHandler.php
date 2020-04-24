<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\CommandHandler;

use Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Factory\ItemFactory;
use Backend\Api\RpcSkeleton\Domain\Repository\ItemRepositoryInterface;

/**
 * Class ItemCreateHandler.
 */
final class ItemCreateHandler implements CommandHandlerInterface
{
    /**
     * Domain ItemFactory factory.
     *
     * @var ItemFactory
     */
    private ItemFactory $itemFactory;

    /**
     * EventSourcing repository for ItemEntity.
     *
     * @var ItemRepositoryInterface
     */
    private ItemRepositoryInterface $itemRepository;

    /**
     * ImportItemDtoHandler constructor.
     *
     * @param ItemRepositoryInterface $itemRepository
     * @param ItemFactory             $itemFactory
     */
    public function __construct(
        ItemRepositoryInterface $itemRepository,
        ItemFactory $itemFactory
    ) {
        $this->itemRepository = $itemRepository;
        $this->itemFactory = $itemFactory;
    }

    /**
     * Handle ImportItemDtoCommand command.
     *
     * @param ItemCreateCommand $command
     *
     * @throws Exception
     */
    public function handle(ItemCreateCommand $command): void
    {
        $processUuid = $command->getProcessUuid();
        $uuid = $command->getItemUuid();
        $itemValueObject = $command->getItem();
        $itemEntity = $this->itemFactory->createInstance($processUuid, $uuid, $itemValueObject);
        $this->itemRepository->store($itemEntity);
    }
}
