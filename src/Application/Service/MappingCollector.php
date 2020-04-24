<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\Service;

use Yoanm\JsonRpcServer\Domain\JsonRpcMethodAwareInterface;
use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;

/**
 * Class MappingCollector.
 */
class MappingCollector implements JsonRpcMethodAwareInterface
{
    /**
     * List of JsonRpcMethodInterface.
     *
     * array<JsonRpcMethodInterface>
     */
    private array $mappingList = [];

    /**
     * Add new JsonRpcMethod.
     *
     * @param string                 $methodName
     * @param JsonRpcMethodInterface $method
     */
    public function addJsonRpcMethod(string $methodName, JsonRpcMethodInterface $method): void
    {
        $this->mappingList[$methodName] = $method;
    }

    /**
     * Return list of JsonRpcMethodInterface.
     *
     * @return JsonRpcMethodInterface[]
     */
    public function getMappingList(): array
    {
        return $this->mappingList;
    }
}
