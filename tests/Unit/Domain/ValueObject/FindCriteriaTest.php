<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\ValueObject;

use Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use InvalidArgumentException;
use MicroModule\ValueObject\Structure\Collection;

/**
 * Test for class FindCriteria.
 *
 * @class FindCriteriaTest
 */
class FindCriteriaTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Returns a FindCriteria object given a PHP native string as parameter".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria::fromNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\FindCriteriaDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function fromNativeShouldReturnFindCriteriaTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = FindCriteria::fromNative($value);

        self::assertInstanceOf(FindCriteria::class, $test);
        self::assertInstanceOf(Collection::class, $test);
    }

    /**
     * Test for "Returns the value of the integer number".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Id::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\FindCriteriaDataProvider::getInvalidData()
     *
     * @param mixed[] $mockArgs
     */
    public function invalidNativeArgumentTest(array $mockArgs): void
    {
        $this->expectException(InvalidArgumentException::class);
        $value = $mockArgs['value'];
        FindCriteria::fromNative($value);
    }

    /**
     * Test for "Returns the value of the string".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\FindCriteriaDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function toNativeShouldReturnStringTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = FindCriteria::fromNative($value);
        $result = $test->toNative();

        self::assertEquals($mockArgs['toNative'], $result);
    }

    /**
     * Test for "Tells whether two string literals are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria::sameValueAs
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\FindCriteriaDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = FindCriteria::fromNative($value);
        $test2 = FindCriteria::fromNative($mockArgs['ValueObjectFindCriteria']);
        $test3 = FindCriteria::fromNative([]);

        self::assertTrue($test->sameValueAs($test2));
        self::assertFalse($test->sameValueAs($test3));
    }

    /**
     * Test for "Returns the value of the string".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\FindCriteria::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\FindCriteriaDataProvider::getDataForToCountMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function countShouldReturnCountOfArrayItemsTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = FindCriteria::fromNative($value);

        self::assertEquals($mockArgs['count'], $test->count()->toNative());
    }
}
