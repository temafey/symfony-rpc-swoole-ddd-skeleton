<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\DataProvider;

/**
 * Class RpcMethodDataProvider.
 *
 * @category Tests\DataProvider
 */
class RpcMethodDataProvider
{
    /**
     * Return http request params fixture.
     *
     * @return mixed[]
     */
    public function getPingPongMethodParams(): array
    {
        return [
            [
                'method' => 'post',
                'uri' => 'http://localhost:9501/json-rpc',
                'server' => [
                    'CONTENT_TYPE' => 'application/json',
                ],
                'params' => [
                    'jsonrpc' => '2.0',
                    'method' => 'ping',
                    'params' => [],
                    'id' => 1,
                ],
                'expected' => [
                    'jsonrpc' => '2.0',
                    'id' => 1,
                    'result' => 'pong',
                ]
            ],
        ];
    }

    /**
     * Return http request params fixture.
     *
     * @return mixed[]
     */
    public function getAddMethodParams(): array
    {
        return [
            [
                'method' => 'post',
                'uri' => 'http://localhost:9501/json-rpc',
                'server' => [
                    'CONTENT_TYPE' => 'application/json',
                ],
                'params' => [
                    'jsonrpc' => '2.0',
                    'method' => 'add',
                    'params' => [
                        'version' => '0.0.1',
                        'parentId' => 2,
                        'name' => 'test2',
                        'url' => 'http://test2.com',
                        'status' => 1,
                    ],
                    'id' => 2,
                ],
                'expected' => [
                    'jsonrpc' => '2.0',
                    'id' => 2,
                    'result' => true,
                ],
                'expectedCommandParams' => [
                    'parentId' => 2,
                    'name' => 'test2',
                    'url' => 'http://test2.com',
                    'status' => 1,
                ]
            ],
        ];
    }

    /**
     * Return http request params fixture.
     *
     * @return mixed[]
     */
    public function getUpdateMethodParams(): array
    {
        return [
            [
                'method' => 'post',
                'uri' => 'http://localhost:9501/json-rpc',
                'server' => [
                    'CONTENT_TYPE' => 'application/json',
                ],
                'params' => [
                    'jsonrpc' => '2.0',
                    'method' => 'update',
                    'params' => [
                        'version' => '0.0.1',
                        'uuid'=> '92feaa6f-8b42-433a-b7a4-93ec2fb4ace3',
                        'parentId' => 1,
                        'name' => 'test2',
                        'url' => 'http://test2.com',
                        'status' => 1,
                    ],
                    'id' => 2,
                ],
                'expected' => [
                    'jsonrpc' => '2.0',
                    'id' => 2,
                    'result' => true,
                ],
                'expectedCommandParams' => [
                    1 => '92feaa6f-8b42-433a-b7a4-93ec2fb4ace3',
                    2 => [
                        'parentId' => 1,
                        'name' => 'test2',
                        'url' => 'http://test2.com',
                        'status' => 1,
                    ]
                ]
            ],
        ];
    }
    /**
     * Return http request params fixture.
     *
     * @return mixed[]
     */
    public function getDeleteMethodParams(): array
    {
        return [
            [
                'method' => 'post',
                'uri' => 'http://localhost:9501/json-rpc',
                'server' => [
                    'CONTENT_TYPE' => 'application/json',
                ],
                'params' => [
                    'jsonrpc' => '2.0',
                    'method' => 'delete',
                    'params' => [
                        'version' => '0.0.1',
                        'uuid'=> '92feaa6f-8b42-433a-b7a4-93ec2fb4ace3',
                    ],
                    'id' => 2,
                ],
                'expected' => [
                    'jsonrpc' => '2.0',
                    'id' => 2,
                    'result' => true,
                ],
                'expectedCommandParams' => [
                    1 => '92feaa6f-8b42-433a-b7a4-93ec2fb4ace3'
                ]
            ],
        ];
    }
}
