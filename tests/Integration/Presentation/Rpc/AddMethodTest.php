<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Presentation\Rpc;

use MicroModule\Task\Application\Processor\JobCommandBusProcessor;
use Backend\Api\RpcSkeleton\Domain\Factory\CommandFactory;

/**
 * Class AddMethodTest.
 */
class AddMethodTest extends AbstractRpcTestCase
{
    /**
     * Test for "AddMethod rpc request.".
     *
     * @test
     *
     * @group functional
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\DataProvider\RpcMethodDataProvider::getAddMethodParams()
     *
     * @covers       \Backend\Api\RpcSkeleton\Presentation\Rpc\AddMethod::apply
     *
     * @param string $method
     * @param string $uri
     * @param array $server
     * @param array $params
     * @param array $expected
     * @param array $expectedCommandParams
     */
    public function requestToAddMethodShouldReturnTrueInResponse(
        string $method,
        string $uri,
        array $server,
        array $params,
        array $expected,
        array $expectedCommandParams
    ): void {
        $client = static::createClient();
        $client->request($method, $uri, [], [], $server, json_encode($params, JSON_THROW_ON_ERROR));
        $response = $client->getResponse();

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals($expected, json_decode($response->getContent(), true, JSON_THROW_ON_ERROR));

        $taskProducer = $this->service('enqueue.client.task.traceable_producer');
        $traces = $taskProducer->getCommandTraces(JobCommandBusProcessor::getRoute());

        foreach ($traces as $message) {
            self::assertArrayHasKey('type', $message['body']);
            self::assertEquals(CommandFactory::PROGRAM_READ_MODEL_CREATE_COMMAND, $message['body']['type']);
            self::assertEquals($expectedCommandParams, $message['body']['args'][1]);
        }
    }
}
