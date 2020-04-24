<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Helper;

use InvalidArgumentException;
use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\Repository\ItemRepositoryInterface;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;
use Mockery;
use Mockery\MockInterface;

/**
 * Trait RepositoryMockTrait.
 *
 * @category Tests\Unit\Utils
 */
trait RepositoryMockTrait
{
    /**
     * @param mixed[]|null $item
     * @param mixed[]      $times
     *
     * @return MockInterface
     */
    protected function createItemRepositoryMock(?array $item, $times = ['get' => 0, 'store' => 0, 'item' => []]): MockInterface
    {
        $mock = Mockery::mock(ItemRepositoryInterface::class);

        if (array_key_exists('get', $times)) {
            $method = $mock
                ->shouldReceive('get')
                ->with(Mockery::type(Uuid::class));

            if (null === $times['get']) {
                $method->zeroOrMoreTimes();
            } else {
                $method->times($times['get']);
            }

            if (null === $item) {
                $method->andThrow(InvalidArgumentException::class);
            } else {
                $method->andReturn($this->createItemEntityMock($item, $item['item']));
            }
        }

        if (array_key_exists('store', $times)) {
            $method = $mock
                ->shouldReceive('store')
                ->with(Mockery::type(ItemEntity::class));

            if (null === $times['store']) {
                $method->zeroOrMoreTimes();
            } else {
                $method->times($times['store']);
            }
        }

        return $mock;
    }
}
