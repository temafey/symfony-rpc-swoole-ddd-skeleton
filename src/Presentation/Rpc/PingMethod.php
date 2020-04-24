<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Presentation\Rpc;

use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;

/**
 * Class PingMethod.
 */
class PingMethod implements JsonRpcMethodInterface
{
    /**
     * RPC api method health check ping.
     *
     * @param mixed[]|null $paramList
     *
     * @return mixed|string
     *
     * @suppress PhanUnusedPublicMethodParameter
     */
    public function apply(?array $paramList = null)
    {
        return 'pong';
    }
}
