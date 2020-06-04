<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\Saga;

use Backend\Api\RpcSkeleton\Application\Factory\CommandFactory;
use Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent;
use Broadway\Saga\Metadata\StaticallyConfiguredSagaInterface;
use Broadway\Saga\State;
use Closure;
use League\Tactician\CommandBus;
use MicroModule\Base\Domain\Factory\CommandFactoryInterface;
use MicroModule\Saga\AbstractSaga;

/**
 * Class ItemSaga.
 *
 * @SuppressWarnings(PHPMD)
 */
class ItemSaga extends AbstractSaga implements StaticallyConfiguredSagaInterface
{
    private const STATE_CRITERIA_KEY = 'processId';

    /**
     * Checks whether exception is caught.
     *
     * @var bool
     */
    protected $exceptionCaught = true;

    /**
     * CommandBus object.
     *
     * @var CommandBus
     */
    private CommandBus $commandBus;

    /**
     * Application Command factory.
     *
     * @var CommandFactoryInterface
     */
    private CommandFactoryInterface $commandFactory;

    /**
     * ProgramSaga constructor.
     *
     * @param CommandBus              $programBus
     * @param CommandFactoryInterface $commandFactory
     */
    public function __construct(CommandBus $programBus, CommandFactoryInterface $commandFactory)
    {
        $this->commandBus = $programBus;
        $this->commandFactory = $commandFactory;
    }

    /**
     * @return Closure[]
     */
    public static function configuration(): array
    {
        return [/* @phan-suppress-next-line PhanUnusedClosureParameter */
            'ItemIdWasCreatedEvent' => static function (ItemIdWasCreatedEvent $event) {
                return null; // no criteria, start of a new saga
            },
        ];
    }

    /**
     * Handle ItemIdWasCreatedEvent event, initialize and handle ProgramDtoWasImportedEvent.
     *
     * @param State                 $state
     * @param ItemIdWasCreatedEvent $event
     *
     * @return State
     */
    public function handleItemIdWasCreatedEvent(State $state, ItemIdWasCreatedEvent $event): State
    {
        $state->set(self::STATE_CRITERIA_KEY, (string) $event->getProcessUuid());
        $command = $this->commandFactory->makeCommandInstanceByType(
            CommandFactory::PROGRAM_READ_MODEL_ADD_ID_COMMAND,
            $event->getProcessUuid(),
            $event->getUuid(),
            $event->getId()
        );

        $this->commandBus->handle($command);
        $state->setDone();

        return $state;
    }
}
