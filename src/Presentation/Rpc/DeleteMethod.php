<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Presentation\Rpc;

use Backend\Api\RpcSkeleton\Application\Factory\CommandFactory;
use Backend\Api\RpcSkeleton\Domain\Service\JsonRpcMethodWithDocInterface;
use Exception;
use League\Tactician\CommandBus;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Required;
use Yoanm\JsonRpcParamsSymfonyValidator\Domain\MethodWithValidatedParamsInterface;
use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;
use Yoanm\JsonRpcServerDoc\Domain\Model\ErrorDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\ObjectDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\StringDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\TypeDoc;

/**
 * Class DeleteMethod.
 */
class DeleteMethod implements JsonRpcMethodInterface, MethodWithValidatedParamsInterface, JsonRpcMethodWithDocInterface
{
    /**
     * CommandBus object.
     *
     * @var CommandBus
     */
    private CommandBus $commandBus;

    /**
     * Command factory.
     *
     * @var CommandFactory
     */
    private CommandFactory $commandFactory;

    /**
     * FetchMethod constructor.
     *
     * @param CommandBus     $commandBus
     * @param CommandFactory $commandFactory
     */
    public function __construct(CommandBus $commandBus, CommandFactory $commandFactory)
    {
        $this->commandBus = $commandBus;
        $this->commandFactory = $commandFactory;
    }

    /**
     * RPC api method fetch one item.
     *
     * @param mixed[]|null $paramList
     *
     * @return mixed|mixed[]|null
     *
     * @throws Exception
     */
    public function apply(?array $paramList = null)
    {
        if (null === $paramList) {
            return null;
        }

        return $this->commandBus->handle($this->commandFactory->makeItemDeleteTaskCommand($paramList['uuid']));
    }

    /**
     * Return constraint rules for rpc method.
     *
     * @return Constraint
     */
    public function getParamsConstraint(): Constraint
    {
        return new Collection(['fields' => [
            'version' => new Required([
                new Length(['min' => 5, 'max' => 7]),
            ]),
            'uuid' => new Required([
                new Length(['min' => 36, 'max' => 36]),
            ]),
        ]]);
    }

    /**
     * Return rpc method description.
     *
     * @return string
     */
    public function getDocDescription(): string
    {
        return 'Fetch one item';
    }

    /**
     * Return rpc method tag.
     *
     * @return string
     */
    public function getDocTag(): string
    {
        return 'main';
    }

    /**
     * Return rpc method error types.
     *
     * @return ErrorDoc[]
     */
    public function getDocErrors(): array
    {
        return [new ErrorDoc('Error 1', 1)];
    }

    /**
     * Return rpc method response type.
     *
     * @return TypeDoc
     */
    public function getDocResponse(): TypeDoc
    {
        $response = new ObjectDoc();
        $response->setNullable(false);

        $response->addSibling(
            (new StringDoc())
                ->setNullable(false)
                ->setDescription('Version item')
                ->setName('version')
        );

        $response->addSibling(
            (new StringDoc())
                ->setNullable(false)
                ->setDescription('Uuid of item')
                ->setName('uuid')
        );

        return $response;
    }
}
