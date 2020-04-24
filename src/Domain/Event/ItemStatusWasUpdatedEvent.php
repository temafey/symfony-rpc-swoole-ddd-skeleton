<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Event;

use MicroModule\ValueObject\Identity\UUID as ProcessUuid;
use Assert\Assertion;
use Assert\AssertionFailedException;
use Exception;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Status;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;

/**
 * Class ItemStatusWasUpdatedEvent.
 *
 * @category Domain\Event
 * @sub-package Item
 */
class ItemStatusWasUpdatedEvent extends ItemEvent
{
    /**
     * Status ValueObject.
     *
     * @var Status
     */
    private Status $status;

    /**
     * ItemEvent constructor.
     *
     * @param ProcessUuid $processUuid
     * @param Uuid        $uuid
     * @param Status      $status
     */
    public function __construct(ProcessUuid $processUuid, Uuid $uuid, Status $status)
    {
        parent::__construct($processUuid, $uuid);
        $this->status = $status;
    }

    /**
     * Initialize event from data array.
     *
     * @param mixed[] $data
     *
     * @return ItemStatusWasUpdatedEvent
     *
     * @throws AssertionFailedException
     * @throws Exception
     *
     * @suppress PhanTypeMismatchArgument, PhanTypeInvalidThrowsIsInterface
     * @psalm-suppress ArgumentTypeCoercion
     */
    public static function deserialize(array $data): ItemEvent
    {
        Assertion::keyExists($data, 'process_uuid');
        Assertion::keyExists($data, 'uuid');
        Assertion::keyExists($data, 'status');

        return new self(
            ProcessUuid::fromNative($data['process_uuid']),
            Uuid::fromNative($data['uuid']),
            Status::fromNative($data['status'])
        );
    }

    /**
     * Convert event object to array.
     *
     * @return mixed[]
     */
    public function serialize(): array
    {
        return [
            'process_uuid' => $this->getProcessUuid()->toNative(),
            'uuid' => $this->getUuid()->toNative(),
            'status' => $this->getStatus()->toNative(),
        ];
    }

    /**
     * Return item ne internal status.
     *
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }
}
