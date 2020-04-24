<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Event;

use MicroModule\ValueObject\Identity\UUID as ProcessUuid;
use Assert\Assertion;
use Assert\AssertionFailedException;
use Exception;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;

/**
 * Class ItemWasUpdatedEvent.
 *
 * @category Domain\Event
 * @sub-package Item
 */
class ItemWasUpdatedEvent extends ItemEvent
{
    /**
     * Item ValueObject.
     *
     * @var Item
     */
    private Item $item;

    /**
     * ItemWasInit constructor.
     *
     * @param ProcessUuid $processUuid
     * @param Uuid        $itemUuid
     * @param Item        $item
     */
    public function __construct(ProcessUuid $processUuid, Uuid $itemUuid, Item $item)
    {
        parent::__construct($processUuid, $itemUuid);

        $this->item = $item;
    }

    /**
     * Return Item.
     *
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->item;
    }

    /**
     * Initialize event from data array.
     *
     * @param mixed[] $data
     *
     * @return ItemEvent
     *
     * @throws AssertionFailedException
     * @throws Exception
     * @throws Exception
     * @throws Exception
     *
     * @suppress PhanTypeMismatchArgument, PhanTypeInvalidThrowsIsInterface
     * @psalm-suppress ArgumentTypeCoercion
     */
    public static function deserialize(array $data): ItemEvent
    {
        Assertion::keyExists($data, 'process_uuid');
        Assertion::keyExists($data, 'uuid');
        Assertion::keyExists($data, 'item');

        return new self(
            ProcessUuid::fromNative($data['process_uuid']),
            Uuid::fromNative($data['uuid']),
            Item::fromNative($data['item'])
        );
    }

    /**
     * Convert event object to array.
     *
     * @return mixed[]
     *
     * @throws Exception
     */
    public function serialize(): array
    {
        return [
            'process_uuid' => $this->getProcessUuid()->toNative(),
            'uuid' => $this->getUuid()->toNative(),
            'item' => $this->getItem()->toNative(),
        ];
    }
}
