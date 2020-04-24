<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Presentation\Rpc;

use Exception;
use League\Tactician\CommandBus;
use Backend\Api\RpcSkeleton\Domain\Factory\CommandFactory;
use Backend\Api\RpcSkeleton\Application\Dto\ItemDto;
use Backend\Api\RpcSkeleton\Domain\Service\JsonRpcMethodWithDocInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Optional;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Required;
use Yoanm\JsonRpcParamsSymfonyValidator\Domain\MethodWithValidatedParamsInterface;
use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;
use Yoanm\JsonRpcServerDoc\Domain\Model\ErrorDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\NumberDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\ObjectDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\StringDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\TypeDoc;

/**
 * Class AddMethod.
 *
 * @SuppressWarnings(PHPMD)
 */
class AddMethod implements JsonRpcMethodInterface, MethodWithValidatedParamsInterface, JsonRpcMethodWithDocInterface
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
     * RPC api method add new item.
     *
     * @param mixed[]|null $paramList
     *
     * @return mixed[]|null
     *
     * @throws Exception
     */
    public function apply(?array $paramList = null)
    {
        if (null === $paramList) {
            return null;
        }
        $itemDto = ItemDto::denormalize($paramList);

        return $this->commandBus->handle($this->commandFactory->makeItemCreateTaskCommand($itemDto));
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
            'parentId' => new Required([
                new Positive(),
            ]),
            'name' => new Required([
                new Length(['min' => 1, 'max' => 32]),
            ]),
            'url' => new Optional([
                new Length(['min' => 1, 'max' => 100]),
            ]),
            'status' => new Optional([
                new Choice([0, 1]),
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
        return 'Add item method';
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
            (new NumberDoc())
                ->setNullable(false)
                ->setDescription('Parent id item')
                ->setName('parentId')
        );

        $response->addSibling(
            (new StringDoc())
                ->setNullable(false)
                ->setDescription('Name of item')
                ->setName('name')
        );

        $response->addSibling(
            (new StringDoc())
                ->setNullable(true)
                ->setDescription('Url item')
                ->setName('url')
        );

        $response->addSibling(
            (new NumberDoc())
                ->setNullable(false)
                ->setDescription('Item status')
                ->setName('status')
        );

        return $response;
    }
}
