<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\ValueObject;

use Backend\Api\RpcSkeleton\Domain\Exception\StatusInvalidException;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Status;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use MicroModule\ValueObject\Number\Integer;
use MicroModule\ValueObject\Number\Real;
use TypeError;

/**
 * Test for class Status.
 *
 * @class StatusTest
 */
class StatusTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Returns a Real object given a PHP native float as parameter".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Status::fromNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function fromNativeShouldReturnIntegerTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = Status::fromNative($value);

        self::assertInstanceOf(Integer::class, $test);
        self::assertInstanceOf(Status::class, $test);
    }

    /**
     * Test for "Tells whether two Integer are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Status::sameValueAs
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws StatusInvalidException
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        $microDomainValueObjectStatusMock = $this->createDomainValueObjectStatusMock($mockArgs['ValueObjectStatus'], $mockTimes['ValueObjectStatus']);
        $result = $test->sameValueAs($microDomainValueObjectStatusMock);

        self::assertTrue($result);
    }

    /**
     * Test for "Returns the value of the integer number".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Status::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws StatusInvalidException
     */
    public function toNativeShouldReturnIntegerTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Status::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getInvalidTypeErrorData()
     *
     * @param mixed[] $mockArgs
     *
     * @throws StatusInvalidException
     */
    public function invalidNativeArgumentTypeErrorExceptionTest(array $mockArgs): void
    {
        $this->expectException(TypeError::class);
        $value = $mockArgs['value'];
        new Status($value);
    }

    /**
     * Test for "Returns the value of the integer number".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Status::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getInvalidStatusInvalidExceptionData()
     *
     * @param mixed[] $mockArgs
     *
     * @throws StatusInvalidException
     */
    public function invalidNativeArgumentStatusInvalidExceptionTest(array $mockArgs): void
    {
        $this->expectException(StatusInvalidException::class);
        $value = $mockArgs['value'];
        new Status($value);
    }

    /**
     * Test for "Returns a Real with the value of the Integer".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Status::toReal
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForToRealMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws StatusInvalidException
     */
    public function toRealShouldReturnRealTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Status::inc
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForIncMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws StatusInvalidException
     */
    public function incShouldChangeStatusValueTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        $result = $test->inc();

        self::assertInstanceOf(Integer::class, $result);
        self::assertTrue($test->sameValueAs($result));
    }

    /**
     * Test for "Decrement value".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Status::decr
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForDecrMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws StatusInvalidException
     */
    public function decrShouldChangeStatusValueTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        $result = $test->decr();

        self::assertInstanceOf(Integer::class, $result);
        self::assertTrue($test->sameValueAs($result));
    }
}
