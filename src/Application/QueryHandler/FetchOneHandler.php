<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\QueryHandler;

use Backend\Api\RpcSkeleton\Application\Dto\ItemDto;
use Backend\Api\RpcSkeleton\Application\Service\ItemAssembler;
use Backend\Api\RpcSkeleton\Domain\Query\FetchOneCommand;
use Backend\Api\RpcSkeleton\Domain\Repository\QueryRepositoryInterface;
use Exception;

/**
 * Class FetchOneHandler.
 */
final class FetchOneHandler implements CommandHandlerInterface
{
    /**
     * EventSourcing repository for ItemEntity.
     *
     * @var QueryRepositoryInterface
     */
    private QueryRepositoryInterface $queryRepository;

    /**
     * Dto assembler.
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
     * Handle FetchOneCommand command.
     *
     * @param FetchOneCommand $command
     *
     * @return ItemDto|null
     *
     * @throws Exception
     */
    public function handle(FetchOneCommand $command): ?ItemDto
    {
        $itemEntity = $this->queryRepository->findByUuid($command->getItemUuid());

        if (null === $itemEntity) {
            return null;
        }

        return $this->itemAssembler->writeDto($itemEntity);
    }
}
