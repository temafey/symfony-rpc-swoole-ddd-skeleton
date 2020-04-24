<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\QueryHandler;

use Backend\Api\RpcSkeleton\Domain\Query\FindLiteCommand;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Repository\QueryRepositoryInterface;

/**
 * Class FindLiteHandler.
 */
final class FindLiteHandler implements CommandHandlerInterface
{
    /**
     * EventSourcing repository for ItemEntity.
     *
     * @var QueryRepositoryInterface
     */
    private QueryRepositoryInterface $queryRepository;

    /**
     * FetchOneHandler constructor.
     *
     * @param QueryRepositoryInterface $queryRepository
     */
    public function __construct(
        QueryRepositoryInterface $queryRepository
    ) {
        $this->queryRepository = $queryRepository;
    }

    /**
     * Handle FindLiteCommand command.
     *
     * @param FindLiteCommand $command
     *
     * @return mixed[]|null
     *
     * @throws Exception
     */
    public function handle(FindLiteCommand $command): ?array
    {
        return $this->queryRepository->findByCriteria($command->getFindCriteria());
    }
}
