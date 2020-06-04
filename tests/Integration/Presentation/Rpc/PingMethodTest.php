<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Presentation\Rpc;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class PingMethodTest.
 */
class PingMethodTest extends WebTestCase
{
    /**
     * Test for "PingMethod rpc request.".
     *
     * @test
     *
     * @group functional
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\DataProvider\RpcMethodDataProvider::getPingPongMethodParams()
     *
     * @covers       \Backend\Api\RpcSkeleton\Presentation\Rpc\PingMethod::apply
     *
     * @param string $method
     * @param string $uri
     * @param array  $server
     * @param array  $params
     * @param array  $expected
     */
    public function requestToPingMethodShouldReturnPongInResponse(string $method, string $uri, array $server, array $params, array $expected): void
    {
        $client = static::createClient();
        $client->request($method, $uri, [], [], $server, json_encode($params, JSON_THROW_ON_ERROR));

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals($expected, json_decode($client->getResponse()->getContent(), true, JSON_THROW_ON_ERROR));
    }
}
