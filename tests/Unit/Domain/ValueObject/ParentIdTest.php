<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\ValueObject;

use MicroModule\ValueObject\Number\Integer;
use MicroModule\ValueObject\Number\Real;
use Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use TypeError;

/**
 * Test for class ParentId.
 *
 * @class ParentIdTest
 */
class ParentIdTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Tells whether two Integer are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId::sameValueAs
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ParentIdDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new ParentId($value);
        $microDomainValueObjectParentIdMock = $this->createDomainValueObjectParentIdMock($mockArgs['ValueObjectParentId'], $mockTimes['ValueObjectParentId']);
        $result = $test->sameValueAs($microDomainValueObjectParentIdMock);
        self::assertTrue($result);
    }

    /**
     * Test for "Returns the value of the integer number".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ParentIdDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function toNativeShouldReturnIntegerTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new ParentId($value);

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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ParentIdDataProvider::getInvalidData()
     *
     * @param mixed[] $mockArgs
     */
    public function invalidNativeArgumentTest(array $mockArgs): void
    {
        $this->expectException(TypeError::class);
        $value = $mockArgs['value'];
        new ParentId($value);
    }

    /**
     * Test for "Returns a Real with the value of the Integer".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId::toReal
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ParentIdDataProvider::getDataForToRealMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function toRealShouldReturnRealTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new ParentId($value);

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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId::inc
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ParentIdDataProvider::getDataForIncMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function incShouldReturnIntegerTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new ParentId($value);

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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId::decr
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ParentIdDataProvider::getDataForDecrMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function decrShouldReturnIntegerTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new ParentId($value);

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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId::fromNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ParentIdDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function fromNativeShouldReturnIntegerTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = ParentId::fromNative($value);
        self::assertInstanceOf(Integer::class, $test);
        self::assertInstanceOf(ParentId::class, $test);
    }
}
