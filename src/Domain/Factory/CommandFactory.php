<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Factory;

use MicroModule\Base\Domain\Command\CommandInterface;
use MicroModule\Base\Domain\Factory\CommandFactoryInterface;
use MicroModule\Base\Domain\Exception\FactoryException;
use MicroModule\ValueObject\Identity\UUID as ProcessUuid;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemCreateTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Query\FetchOneCommand;
use Backend\Api\RpcSkeleton\Domain\Query\FindCommand;
use Backend\Api\RpcSkeleton\Domain\Query\FindLiteCommand;
use Backend\Api\RpcSkeleton\Application\Dto\ItemDto;
use Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Id;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;

/**
 * Class CommandFactory.
 *
 * @SuppressWarnings(PHPMD)
 */
class CommandFactory implements CommandFactoryInterface
{
    public const PROGRAM_READ_MODEL_FETCH_ONE_COMMAND = 'FetchOneCommand';
    public const PROGRAM_READ_MODEL_FIND_COMMAND = 'FindCommand';
    public const PROGRAM_READ_MODEL_FIND_LITE_COMMAND = 'FindLiteCommand';
    public const PROGRAM_READ_MODEL_CREATE_TASK_COMMAND = 'ItemCreateTaskCommand';
    public const PROGRAM_READ_MODEL_CREATE_COMMAND = 'ItemCreateCommand';
    public const PROGRAM_READ_MODEL_UPDATE_TASK_COMMAND = 'ItemUpdateTaskCommand';
    public const PROGRAM_READ_MODEL_UPDATE_COMMAND = 'ItemUpdateCommand';
    public const PROGRAM_READ_MODEL_DELETE_TASK_COMMAND = 'ItemDeleteTaskCommand';
    public const PROGRAM_READ_MODEL_DELETE_COMMAND = 'ItemDeleteCommand';
    public const PROGRAM_READ_MODEL_ADD_ID_COMMAND = 'ItemAddIdCommand';

    /**
     * Make CommandBus command instance by constant type.
     *
     * @param mixed... $args
     *
     * @return CommandInterface
     *
     * @throws FactoryException
     * @throws Exception
     */
    public function makeCommandInstanceByType(...$args): CommandInterface
    {
        $commandType = array_shift($args);

        switch ($commandType) {
            case self::PROGRAM_READ_MODEL_FETCH_ONE_COMMAND:
                return $this->makeFetchOneCommand(...$args);

            case self::PROGRAM_READ_MODEL_FIND_COMMAND:
                return $this->makeFindCommand(...$args);

            case self::PROGRAM_READ_MODEL_FIND_LITE_COMMAND:
                return $this->makeFindLiteCommand(...$args);

            case self::PROGRAM_READ_MODEL_CREATE_TASK_COMMAND:
                return $this->makeItemCreateTaskCommand(...$args);

            case self::PROGRAM_READ_MODEL_CREATE_COMMAND:
                return $this->makeItemCreateCommand(...$args);

            case self::PROGRAM_READ_MODEL_UPDATE_TASK_COMMAND:
                return $this->makeItemUpdateTaskCommand(...$args);

            case self::PROGRAM_READ_MODEL_UPDATE_COMMAND:
                return $this->makeItemUpdateCommand(...$args);

            case self::PROGRAM_READ_MODEL_DELETE_TASK_COMMAND:
                return $this->makeItemDeleteTaskCommand(...$args);

            case self::PROGRAM_READ_MODEL_DELETE_COMMAND:
                return $this->makeItemDeleteCommand(...$args);

            case self::PROGRAM_READ_MODEL_ADD_ID_COMMAND:
                return $this->makeItemAddIdCommand(...$args);

            default:
                throw new FactoryException(sprintf('Command bus for type `%s` not found!', (string) $commandType));
        }
    }

    /**
     * Build and return FetchOneCommand object.
     *
     * @param string $uuid
     *
     * @return FetchOneCommand
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function makeFetchOneCommand(string $uuid): FetchOneCommand
    {
        $processUuid = ProcessUuid::fromNative(null);
        $uuid = Uuid::fromNative($uuid);

        return new FetchOneCommand($processUuid, $uuid);
    }

    /**
     * Build and return makeFindCommand object.
     *
     * @param mixed[] $criteria
     *
     * @return FindCommand
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function makeFindCommand(array $criteria): FindCommand
    {
        $processUuid = ProcessUuid::fromNative(null);
        $findCriteria = FindCriteria::fromNative($criteria);

        return new FindCommand($processUuid, $findCriteria);
    }

    /**
     * Build and return makeFindCommand object.
     *
     * @param mixed[] $criteria
     *
     * @return FindLiteCommand
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function makeFindLiteCommand(array $criteria): FindLiteCommand
    {
        $processUuid = ProcessUuid::fromNative(null);
        $findCriteria = FindCriteria::fromNative($criteria);

        return new FindLiteCommand($processUuid, $findCriteria);
    }

    /**
     * Build and return ItemCreateTaskCommand object.
     *
     * @param ItemDto $itemDto
     *
     * @return ItemCreateTaskCommand
     *
     * @throws Exception
     */
    public function makeItemCreateTaskCommand(ItemDto $itemDto): ItemCreateTaskCommand
    {
        $uuid = ProcessUuid::fromNative(null);
        $item = Item::fromNative($itemDto->normalize());

        return new ItemCreateTaskCommand($uuid, $item);
    }

    /**
     * Build and return ItemCreateTaskCommand object.
     *
     * @param string  $uuid
     * @param ItemDto $itemDto
     *
     * @return ItemUpdateTaskCommand
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function makeItemUpdateTaskCommand(string $uuid, ItemDto $itemDto): ItemUpdateTaskCommand
    {
        $processUuid = ProcessUuid::fromNative(null);
        $uuid = Uuid::fromNative($uuid);
        $item = Item::fromNative($itemDto->normalize());

        return new ItemUpdateTaskCommand($processUuid, $uuid, $item);
    }

    /**
     * Build and return ItemDeleteTaskCommand object.
     *
     * @param string $uuid
     *
     * @return ItemDeleteTaskCommand
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function makeItemDeleteTaskCommand(string $uuid): ItemDeleteTaskCommand
    {
        $processUuid = ProcessUuid::fromNative(null);
        $uuid = Uuid::fromNative($uuid);

        return new ItemDeleteTaskCommand($processUuid, $uuid);
    }

    /**
     * Build and return ImportItemStartCommand object.
     *
     * @param string  $processUuid
     * @param mixed[] $item
     *
     * @return ItemCreateCommand
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function makeItemCreateCommand(string $processUuid, array $item): ItemCreateCommand
    {
        $processUuid = ProcessUuid::fromNative($processUuid);
        $uuid = Uuid::fromNative(null);
        $item = Item::fromNative($item);

        return new ItemCreateCommand($processUuid, $uuid, $item);
    }

    /**
     * Build and return UpdateItemCommand object.
     *
     * @param string  $processUuid
     * @param string  $uuid
     * @param mixed[] $item
     *
     * @return ItemUpdateCommand
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function makeItemUpdateCommand(string $processUuid, string $uuid, array $item): ItemUpdateCommand
    {
        $processUuid = ProcessUuid::fromNative($processUuid);
        $uuid = Uuid::fromNative($uuid);
        $item = Item::fromNative($item);

        return new ItemUpdateCommand($processUuid, $uuid, $item);
    }

    /**
     * Build and return ItemDeleteCommand object.
     *
     * @param string $processUuid
     * @param string $uuid
     *
     * @return ItemDeleteCommand
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function makeItemDeleteCommand(string $processUuid, string $uuid): ItemDeleteCommand
    {
        $processUuid = ProcessUuid::fromNative($processUuid);
        $uuid = Uuid::fromNative($uuid);

        return new ItemDeleteCommand($processUuid, $uuid);
    }

    /**
     * Build and return ItemDeleteCommand object.
     *
     * @param ProcessUuid $processUuid
     * @param Uuid        $uuid
     * @param Id          $id
     *
     * @return ItemAddIdCommand
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function makeItemAddIdCommand(ProcessUuid $processUuid, Uuid $uuid, Id $id): ItemAddIdCommand
    {
        return new ItemAddIdCommand($processUuid, $uuid, $id);
    }
}
