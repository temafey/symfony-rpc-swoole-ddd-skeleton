<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Presentation\Rpc;

use Backend\Api\RpcSkeleton\Application\Factory\CommandFactory;
use Exception;
use League\Tactician\CommandBus;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Optional;
use Symfony\Component\Validator\Constraints\Positive;
use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;
use Yoanm\JsonRpcServerDoc\Domain\Model\ErrorDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\NumberDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\ObjectDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\StringDoc;
use Yoanm\JsonRpcServerDoc\Domain\Model\Type\TypeDoc;

/**
 * Class FindMethod.
 *
 * @SuppressWarnings(PHPMD)
 */
class FindMethod implements JsonRpcMethodInterface
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
            $paramList = [];
        }

        return $this->commandBus->handle($this->commandFactory->makeFindLiteCommand($paramList));
    }

    /**
     * Return constraint rules for rpc method.
     *
     * @return Constraint
     */
    public function getParamsConstraint(): Constraint
    {
        return new Collection(['fields' => [
            'id' => new Optional([
                new Positive(),
            ]),
            'parentId' => new Optional([
                new Positive(),
            ]),
            'name' => new Optional([
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
        return 'Find items by criteria';
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
            (new NumberDoc())
                ->setNullable(false)
                ->setDescription('Id item')
                ->setName('id')
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
