<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\QueryHandler;

use Backend\Api\RpcSkeleton\Domain\Query\FindLiteCommand;
use Backend\Api\RpcSkeleton\Domain\Repository\QueryLiteRepositoryInterface;
use Exception;

/**
 * Class FindLiteHandler.
 */
final class FindLiteHandler implements CommandHandlerInterface
{
    /**
     * EventSourcing repository for ItemEntity.
     *
     * @var QueryLiteRepositoryInterface
     */
    private QueryLiteRepositoryInterface $queryRepository;

    /**
     * FetchOneHandler constructor.
     *
     * @param QueryLiteRepositoryInterface $queryRepository
     */
    public function __construct(
        QueryLiteRepositoryInterface $queryRepository
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
