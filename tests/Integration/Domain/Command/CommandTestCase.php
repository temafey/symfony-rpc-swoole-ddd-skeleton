<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Domain\Command;

use Backend\Api\RpcSkeleton\Application\Factory\CommandFactory;
use Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemCreateTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateCommand;
use Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateTaskCommand;
use Backend\Api\RpcSkeleton\Domain\Event\ItemEvent;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Id;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;
use Backend\Api\RpcSkeleton\Tests\Integration\ApplicationTestCase;
use Broadway\Domain\DomainMessage;
use Enqueue\Client\TraceableProducer;
use MicroModule\ValueObject\Identity\UUID as ProcessUuid;

/**
 * Class CommandTestCase.
 *
 * @category Tests\Integration\Domain\Command\Program\Validate
 */
abstract class CommandTestCase extends ApplicationTestCase
{
    /**
     * Command factory service.
     *
     * @var string
     */
    protected $commandFactoryName = CommandFactory::class;

    /**
     * Name for testing command bus.
     *
     * @var string
     */
    protected $commandBusName = 'tactician.commandbus.command.create.item';

    /**
     * Handle Api ItemCreateTaskCommand.
     *
     * @param string  $processUuid
     * @param mixed[] $item
     * @param mixed[] $times
     */
    protected function handleItemCreateTaskCommand(
        string $processUuid,
        array $item,
        array $times = [
            'processUuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'item' => ['toNative' => 0],
        ]
    ): void {
        $processUuidMock = $this->createUuidValueObjectMock(ProcessUuid::class, $processUuid, $times['processUuid']);
        $itemMock = $this->createItemValueObjectMock($item, $times['item']);
        $command = new ItemCreateTaskCommand($processUuidMock, $itemMock);
        $this->handle($command);
    }

    /**
     * Handle Api ItemDeleteTaskCommand.
     *
     * @param string  $processUuid
     * @param string  $uuid
     * @param mixed[] $times
     */
    protected function handleItemDeleteTaskCommand(
        string $processUuid,
        string $uuid,
        array $times = [
            'processUuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
        ]
    ): void {
        $processUuidMock = $this->createUuidValueObjectMock(ProcessUuid::class, $processUuid, $times['processUuid']);
        $uuidMock = $this->createUuidValueObjectMock(Uuid::class, $uuid, $times['uuid']);
        $command = new ItemDeleteTaskCommand($processUuidMock, $uuidMock);
        $this->handle($command);
    }

    /**
     * Handle Api ItemUpdateTaskCommand.
     *
     * @param string  $processUuid
     * @param string  $uuid
     * @param mixed[] $item
     * @param mixed[] $times
     */
    protected function handleItemUpdateTaskCommand(
        string $processUuid,
        string $uuid,
        array $item,
        array $times = [
            'processUuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'item' => ['toNative' => 0],
        ]
    ): void {
        $processUuidMock = $this->createUuidValueObjectMock(ProcessUuid::class, $processUuid, $times['processUuid']);
        $uuidMock = $this->createUuidValueObjectMock(Uuid::class, $uuid, $times['uuid']);
        $itemMock = $this->createItemValueObjectMock($item, $times['item']);
        $command = new ItemUpdateTaskCommand($processUuidMock, $uuidMock, $itemMock);
        $this->handle($command);
    }

    /**
     * Handle Api ItemCreateCommand.
     *
     * @param string  $processUuid
     * @param string  $uuid
     * @param mixed[] $item
     * @param mixed[] $times
     */
    protected function handleItemCreateCommand(
        string $processUuid,
        string $uuid,
        array $item,
        array $times = [
            'processUuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'item' => ['toNative' => 0],
        ]
    ): void {
        $processUuidMock = $this->createUuidValueObjectMock(ProcessUuid::class, $processUuid, $times['processUuid']);
        $uuidMock = $this->createUuidValueObjectMock(Uuid::class, $uuid, $times['uuid']);
        $itemMock = $this->createItemValueObjectMock($item, $times['item']);
        $command = new ItemCreateCommand($processUuidMock, $uuidMock, $itemMock);
        $this->handle($command);
    }

    /**
     * Handle Api ItemUpdateCommand.
     *
     * @param string  $processUuid
     * @param string  $uuid
     * @param mixed[] $item
     * @param mixed[] $times
     */
    protected function handleItemUpdateCommand(
        string $processUuid,
        string $uuid,
        array $item,
        array $times = [
            'processUuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'item' => ['toNative' => 0],
        ]
    ): void {
        $processUuidMock = $this->createUuidValueObjectMock(ProcessUuid::class, $processUuid, $times['processUuid']);
        $uuidMock = $this->createUuidValueObjectMock(Uuid::class, $uuid, $times['uuid']);
        $itemMock = $this->createItemValueObjectMock($item, $times['item']);
        $command = new ItemUpdateCommand($processUuidMock, $uuidMock, $itemMock);
        $this->handle($command);
    }

    /**
     * Handle Api ItemAddIdCommand.
     *
     * @param string  $processUuid
     * @param string  $uuid
     * @param int     $id
     * @param mixed[] $times
     */
    protected function handleItemAddIdCommand(
        string $processUuid,
        string $uuid,
        int $id,
        $times = [
            'processUuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'id' => 1,
        ]
    ): void {
        $processUuidMock = $this->createUuidValueObjectMock(ProcessUuid::class, $processUuid, $times['processUuid']);
        $uuidMock = $this->createUuidValueObjectMock(Uuid::class, $uuid, $times['uuid']);
        $idMock = $this->createIntegerValueObjectMock(Id::class, $id, $times['id']);

        $command = new ItemAddIdCommand($processUuidMock, $uuidMock, $idMock);
        $this->handle($command);
    }

    /**
     * Handle Api ItemDeleteCommand.
     *
     * @param string  $processUuid
     * @param string  $uuid
     * @param mixed[] $times
     */
    protected function handleItemDeleteCommand(
        string $processUuid,
        string $uuid,
        $times = [
            'processUuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
            'uuid' => ['toNative' => 0, 'getUuid' => 0, 'toString' => 0],
        ]
    ): void {
        $processUuidMock = $this->createUuidValueObjectMock(ProcessUuid::class, $processUuid, $times['processUuid']);
        $uuidMock = $this->createUuidValueObjectMock(Uuid::class, $uuid, $times['uuid']);

        $command = new ItemDeleteCommand($processUuidMock, $uuidMock);
        $this->handle($command);
    }

    /**
     * Events.
     *
     * @var DomainMessage[]
     */
    private $events = [];

    /**
     * Collect new and return all evaluated events.
     *
     * @return DomainMessage[]
     */
    protected function getEvents(): array
    {
        $events = parent::getEvents();

        if ($events) {
            array_push($this->events, ...$events);
        }

        return $this->events;
    }

    /**
     * Fetch and return event by event position in stack.
     *
     * @param int $eventPosition
     *
     * @return ItemEvent
     */
    protected function getEvent(int $eventPosition): ItemEvent
    {
        $events = $this->getEvents();

        return $events[$eventPosition]->getPayload();
    }

    /**
     * @return TraceableProducer
     */
    protected function getProducer(): TraceableProducer
    {
        return $this->service('enqueue.client.task.producer');
    }
}
