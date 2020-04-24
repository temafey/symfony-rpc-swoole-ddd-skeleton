<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Command;

use MicroModule\ValueObject\Identity\UUID;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item;

/**
 * Class ItemCreateTaskCommand.
 */
final class ItemCreateTaskCommand extends ItemCommand
{
    /**
     * Item ValueObject.
     *
     * @var Item
     */
    private Item $item;

    /**
     * InitItemCommand constructor.
     *
     * @param UUID $processUuid
     * @param Item $item
     */
    public function __construct(UUID $processUuid, Item $item)
    {
        parent::__construct($processUuid);
        $this->item = $item;
    }

    /**
     * Return Item value object.
     *
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->item;
    }
}
