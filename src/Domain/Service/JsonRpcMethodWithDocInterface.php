<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Service;

use Yoanm\JsonRpcServerDoc\Domain\Model\ErrorDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\TypeDoc;

/**
 * Interface JsonRpcMethodWithDocInterface.
 */
interface JsonRpcMethodWithDocInterface
{
    /**
     * Return TypeDoc object.
     *
     * @return TypeDoc
     */
    public function getDocResponse(): TypeDoc;

    /**
     * Return array of error ErrorDoc.
     *
     * @return ErrorDoc[]
     */
    public function getDocErrors(): array;

    /**
     * Return rpc method description.
     *
     * @return string
     */
    public function getDocDescription(): string;

    /**
     * Return rpc method tag.
     *
     * @return string
     */
    public function getDocTag(): string;
}
