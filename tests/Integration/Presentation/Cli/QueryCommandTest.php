<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Presentation\Cli;

use Enqueue\Client\TraceableProducer;
use Exception;
use League\Tactician\CommandBus;
use Backend\Api\RpcSkeleton\Domain\Factory\CommandFactory;

/**
 * Class ResultMasterData.
 */
class QueryCommandTest extends AbstractConsoleTestCase
{
    /**
     * {@inheritdoc}
     */
    public function setUp(): void
    {
        static::bootKernel();
    }

    /**
     * test
     *
     * @group        integration
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\DataProvider\DataProvider::getData()
     *
     * @param string $uuid
     * @param string $programDto
     *
     * @throws Exception
     */
    public function fetchOneCommandIntegrationTest(string $uuid, string $programDto): void
    {
        $command = $this->getCommandFactory()->makeFetchOneCommand($uuid);
        $result = $this->getCommandBus()->handle($command);
    }

    /**
     * @return CommandFactory
     */
    private function getCommandFactory(): CommandFactory
    {
        return static::$kernel->getContainer()->get(CommandFactory::class);
    }

    /**
     * @return CommandBus
     */
    private function getCommandBus(): CommandBus
    {
        return $this->service('tactician.commandbus.command.program.collection');
    }

    /**
     * @return TraceableProducer
     */
    private function getProducer(): TraceableProducer
    {
        return $this->service('enqueue.client.program.producer');
    }
}
