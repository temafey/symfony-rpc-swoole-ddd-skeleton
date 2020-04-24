<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Helper;

use MicroModule\ValueObject\Identity\UUID;
use Broadway\Domain\DomainEventStream;
use Broadway\Domain\DomainMessage;
use Broadway\Domain\Metadata;
use Backend\Api\RpcSkeleton\Domain\Event\ItemEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent;
use Backend\Api\RpcSkeleton\Domain\Factory\EventFactory;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Id;
use Mockery;
use Mockery\MockInterface;

/**
 * Trait EventMockTrait.
 *
 * @category Tests\Unit\Utils
 */
trait EventMockTrait
{
    /**
     * Create EventFactory mock.
     *
     * @param mixed[] $events
     * @param mixed[] $times
     *
     * @return MockInterface
     */
    protected function createEventFactoryMock(array $events, array $times): MockInterface
    {
        $mock = Mockery::mock(EventFactory::class);

        if (isset($events['ItemWasCreatedEvent'])) {
            $makeEventMethod = $mock
                ->shouldReceive('makeItemWasCreatedEvent');

            if (null === $times['ItemWasCreatedEvent']['make']) {
                $makeEventMethod->zeroOrMoreTimes();
            } else {
                $makeEventMethod->times($times['ItemWasCreatedEvent']['make']);
            }
            $eventMock = $this->createItemWasCreatedEventMock($events['ItemWasCreatedEvent'], $times['ItemWasCreatedEvent']['mock']);
            $makeEventMethod->andReturn($eventMock);
        }

        if (isset($events['makeEventStream'])) {
            $makeEventMethod = $mock
                ->shouldReceive('makeEventStream');

            if (null === $times['makeEventStream']) {
                $makeEventMethod->zeroOrMoreTimes();
            } else {
                $makeEventMethod->times($times['makeEventStream']);
            }
            $makeEventMethod->withArgs(static function ($arg) {
                if ($arg instanceof ItemEvent) {
                    return true;
                }

                return false;
            });

            $makeEventMethod->andReturnUsing(static function (ItemEvent $event) {
                $domainMessage = DomainMessage::recordNow($event->getId()->toNative(), 1, new Metadata([]), $event);

                return new DomainEventStream([$domainMessage]);
            }, $events['makeEventStream']);
        }

        return $mock;
    }

    /**
     * Create ItemWasCreatedEvent mock.
     *
     * @param mixed[] $event
     * @param mixed[] $times
     *
     * @return MockInterface
     */
    protected function createItemWasCreatedEventMock(array $event, array $times): MockInterface
    {
        return $this->createItemEventMock(
            ItemWasCreatedEvent::class,
            $event['uuid'],
            $event['id'],
            $event['item'],
            $times
        );
    }

    /**
     * Create ItemEvent mock.
     *
     * @param string  $eventClassName
     * @param string  $uuid
     * @param string  $id
     * @param mixed[] $times
     * @param mixed[] $serialize
     *
     * @return MockInterface
     */
    protected function createItemEventMock(string $eventClassName, string $uuid, string $id, array $times, array $serialize = []): MockInterface
    {
        $mock = Mockery::namedMock('Mock\\' . $eventClassName, $eventClassName);
        $eventMethod = $mock
            ->shouldReceive('getUuid');

        if (null === $times['getUuid']) {
            $eventMethod->zeroOrMoreTimes();
        } else {
            $eventMethod->times($times['getUuid']);
        }
        $eventMethod->andReturn($this->createUuidValueObjectMock(UUID::class, $uuid, $times['getUuidMock']));

        $eventMethod = $mock
            ->shouldReceive('getId');

        if (null === $times['getId']) {
            $eventMethod->zeroOrMoreTimes();
        } else {
            $eventMethod->times($times['getId']);
        }
        $eventMethod->andReturn($this->createUuidValueObjectMock(Id::class, $id, $times['getIdMock']));

        $eventMethod = $mock
            ->shouldReceive('serialize');

        if (null === $times['serialize']) {
            $eventMethod->zeroOrMoreTimes();
        } else {
            $eventMethod->times($times['serialize']);
        }
        $eventMethod->andReturn(array_merge_recursive(['uuid' => $uuid, 'id' => $id], $serialize));

        return $mock;
    }
}
