<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Presentation\Cli;

use Backend\Api\RpcSkeleton\Application\Factory\CommandFactory;
use Enqueue\Client\TraceableProducer;
use Exception;
use League\Tactician\CommandBus;

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
     * test.
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
        return $this->service(CommandFactory::class);
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
