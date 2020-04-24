<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Application;

use MicroModule\Base\Domain\Factory\CommandFactoryInterface;
use MicroModule\Base\Domain\Exception\InvalidDataException;
use League\Tactician\CommandBus;
use Backend\Api\RpcSkeleton\Tests\Helper\EntityMockTrait;
use Backend\Api\RpcSkeleton\Tests\Helper\EventMockTrait;
use Backend\Api\RpcSkeleton\Tests\Helper\ValueObjectMockTrait;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

/**
 * Class ApplicationTestCase.
 *
 * @category Tests\Unit\Application
 */
abstract class ApplicationTestCase extends AbstractApplicationTestCase
{
    use ValueObjectMockTrait, EntityMockTrait, EventMockTrait, MockeryPHPUnitIntegration;

    /**
     * Command factory service.
     *
     * @var string
     */
    protected $commandFactoryName;

    /**
     * CommandFactory object.
     *
     * @var CommandFactoryInterface
     */
    protected $commandFactory;

    /**
     * Name for testing command bus.
     *
     * @var string
     */
    protected $commandBusName;

    /**
     * CommandBus object.
     *
     * @var CommandBus
     */
    protected $commandBus;

    /**
     * {@inheritdoc}
     *
     * @throws InvalidDataException
     * @throws InvalidDataException
     */
    protected function setUp(): void
    {
        parent::setUp();
        $commandFactory = $this->service($this->commandFactoryName);

        if (!$commandFactory instanceof CommandFactoryInterface) {
            throw new InvalidDataException('$commandFactory  not instance of MicroModule\Base\Domain\Factory\CommandFactoryInterface');
        }
        $this->setCommandFactory($commandFactory);
        $commandBus = $this->service($this->commandBusName);

        if (!$commandBus instanceof CommandBus) {
            throw new InvalidDataException('$commandBus not instance of League\Tactician\CommandBus');
        }
        $this->setCommandBus($commandBus);
    }

    /**
     * Set CommandBus object.
     *
     * @param CommandFactoryInterface $commandFactory
     *
     * @return $this
     */
    protected function setCommandFactory(CommandFactoryInterface $commandFactory): self
    {
        $this->commandFactory = $commandFactory;

        return $this;
    }

    /**
     * Set CommandBus object.
     *
     * @param CommandBus $commandBus
     *
     * @return $this
     */
    protected function setCommandBus(CommandBus $commandBus): self
    {
        $this->commandBus = $commandBus;

        return $this;
    }

    /**
     * Executes the given command and optionally returns a value.
     *
     * @param object $command
     */
    protected function handle(object $command): void
    {
        $this->commandBus->handle($command);
    }
}
