<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\QueryHandler;

use Backend\Api\RpcSkeleton\Domain\Query\FindCommand;
use Exception;
use Backend\Api\RpcSkeleton\Application\Service\ItemAssembler;
use Backend\Api\RpcSkeleton\Application\Dto\ItemDto;
use Backend\Api\RpcSkeleton\Domain\Repository\QueryRepositoryInterface;

/**
 * Class FindHandler.
 */
final class FindHandler implements CommandHandlerInterface
{
    /**
     * EventSourcing repository for ItemEntity.
     *
     * @var QueryRepositoryInterface
     */
    private QueryRepositoryInterface $queryRepository;

    /**
     * Dto Assembler.
     *
     * @var ItemAssembler
     */
    private ItemAssembler $itemAssembler;

    /**
     * FetchOneHandler constructor.
     *
     * @param QueryRepositoryInterface $queryRepository
     * @param ItemAssembler            $itemAssembler
     */
    public function __construct(
        QueryRepositoryInterface $queryRepository,
        ItemAssembler $itemAssembler
    ) {
        $this->queryRepository = $queryRepository;
        $this->itemAssembler = $itemAssembler;
    }

    /**
     * Handle FindCommand command.
     *
     * @param FindCommand $command
     *
     * @return ItemDto[]|null
     *
     * @throws Exception
     */
    public function handle(FindCommand $command): ?array
    {
        $itemEntities = $this->queryRepository->findByCriteria($command->getFindCriteria());

        if (null === $itemEntities) {
            return null;
        }
        $itemDtoCollection = [];

        foreach ($itemEntities as $itemEntity) {
            $itemDtoCollection[] = $this->itemAssembler->writeDto($itemEntity);
        }

        return $itemDtoCollection;
    }
}
