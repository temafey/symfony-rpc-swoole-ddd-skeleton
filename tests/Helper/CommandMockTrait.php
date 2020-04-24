<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Helper;

use Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand;
use Mockery;
use Mockery\MockInterface;

/**
 * Trait CommandMockTrait.
 *
 * @category Tests\Unit\Utils
 */
trait CommandMockTrait
{
    /**
     * Create Uuid mock.
     *
     * @param string      $className
     * @param string|null $uuid
     * @param int[]       $times
     *
     * @return MockInterface|Uuid
     *
     * @SuppressWarnings(PHPMD)
     */
    protected function createAddIdCommandMock(string $className, ?string $uuid, array $times = ['toNative' => 0, 'getUuid' => 0, 'toString' => 0]): MockInterface
    {
        $mock = Mockery::mock(ItemAddIdCommand::class);
        $uuidMockedToStringMethod = $mock
            ->shouldReceive('toNative');

        if (null === $times['toNative']) {
            $uuidMockedToStringMethod->zeroOrMoreTimes();
        } else {
            $uuidMockedToStringMethod->times($times['toNative']);
        }

        return $mock;
    }
}
