<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Infrastructure\Repository;

use Backend\Api\RpcSkeleton\Tests\Integration\ApplicationTestCase;
use Broadway\EventHandling\SimpleEventBus;
use Broadway\EventHandling\TraceableEventBus;
use Broadway\EventStore\InMemoryEventStore;
use Broadway\EventStore\TraceableEventStore;

/**
 * Class RepositoryTestCase.
 *
 * @category \Tests\Unit\Infrastructure\Repository
 */
class RepositoryTestCase extends ApplicationTestCase
{
    /**
     * @var TraceableEventBus
     */
    protected $eventBus;

    /**
     * @var TraceableEventStore
     */
    protected $eventStore;

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->eventBus = new TraceableEventBus(new SimpleEventBus());
        $this->eventBus->trace();

        $this->eventStore = new TraceableEventStore(new InMemoryEventStore());
        $this->eventStore->trace();
    }
}
