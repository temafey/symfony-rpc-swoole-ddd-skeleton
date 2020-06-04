<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\ValueObject;

use Backend\Api\RpcSkeleton\Domain\ValueObject\Id;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use MicroModule\ValueObject\Number\Integer;
use MicroModule\ValueObject\Number\Real;
use TypeError;

/**
 * Test for class Id.
 *
 * @class IdTest
 */
class IdTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Tells whether two Integer are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Id::sameValueAs
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\IdDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Id($value);
        $microDomainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['ValueObjectId'], $mockTimes['ValueObjectId']);
        $result = $test->sameValueAs($microDomainValueObjectIdMock);

        self::assertTrue($result);
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
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\IdDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function toNativeShouldReturnIntegerTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Id($value);
        $result = $test->toNative();

        self::assertEquals($mockArgs['toNative'], $result);
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
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\IdDataProvider::getInvalidData()
     *
     * @param mixed[] $mockArgs
     */
    public function invalidNativeArgumentTest(array $mockArgs): void
    {
        $this->expectException(TypeError::class);
        $value = $mockArgs['value'];
        new Id($value);
    }

    /**
     * Test for "Returns a Real with the value of the Integer".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Id::toReal
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\IdDataProvider::getDataForToRealMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function toRealShouldReturnRealTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Id($value);
        $result = $test->toReal();

        self::assertInstanceOf(Real::class, $result);
    }

    /**
     * Test for "Increment value".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Id::inc
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\IdDataProvider::getDataForIncMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function incShouldReturnIntegerTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Id($value);
        $result = $test->inc();

        self::assertInstanceOf(Integer::class, $result);
    }

    /**
     * Test for "Decrement value".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Id::decr
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\IdDataProvider::getDataForDecrMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function decrShouldReturnIntegerTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Id($value);
        $result = $test->decr();

        self::assertInstanceOf(Integer::class, $result);
    }

    /**
     * Test for "Returns a Real object given a PHP native float as parameter".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Id::fromNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\IdDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function fromNativeShouldReturnIntegerTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = Id::fromNative($value);

        self::assertInstanceOf(Integer::class, $test);
        self::assertInstanceOf(Id::class, $test);
    }
}
