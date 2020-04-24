<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\ValueObject;

use MicroModule\ValueObject\DateTime\Date;
use MicroModule\ValueObject\DateTime\Exception\InvalidDateException;
use MicroModule\ValueObject\DateTime\Time;
use MicroModule\ValueObject\ValueObjectInterface;
use DateTime;
use Exception;
use Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Mockery;

/**
 * Test for class UpdatedAt.
 *
 * @class UpdatedAtTest
 */
class UpdatedAtTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Returns a new DateTime object from native values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt::fromNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UpdatedAtDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws InvalidDateException
     */
    public function fromNativeShouldReturnDateTimeTest(array $mockArgs): void
    {
        $value = $mockArgs['fromNative']['toNative'];
        $test = UpdatedAt::fromNative($value);
        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\DateTime::class, $test);
        self::assertInstanceOf(UpdatedAt::class, $test);
    }

    /**
     * Test for "Return native value".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UpdatedAtDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function toNativeShouldReturnBaseDateTimeTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
        $microCommonValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new UpdatedAt($microCommonValueObjectDateTimeDateMock, $microCommonValueObjectDateTimeTimeMock);

        $result = $test->toNative();
        self::assertInstanceOf(DateTime::class, $result);
    }

    /**
     * Test for "Returns a new DateTime from a native PHP DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt::fromNativeDateTime
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UpdatedAtDataProvider::getDataForFromNativeDateTimeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws InvalidDateException
     * @throws Exception
     */
    public function fromNativeDateTimeShouldReturnDateTimeTest(array $mockArgs): void
    {
        $value = $mockArgs['fromNative']['toNative'];
        $dateTimeMock = new DateTime($value);
        $test = UpdatedAt::fromNativeDateTime($dateTimeMock);
        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\DateTime::class, $test);
    }

    /**
     * Test for "Returns current DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt::now
     *
     * @throws InvalidDateException
     */
    public function nowShouldReturnDateTimeTest(): void
    {
        $test = UpdatedAt::now();
        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\DateTime::class, $test);
        self::assertInstanceOf(UpdatedAt::class, $test);
    }

    /**
     * Test for "Tells whether two DateTime are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt::sameValueAs
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UpdatedAtDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws InvalidDateException
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs): void
    {
        $value = $mockArgs['fromNative']['toNative'];
        $test = UpdatedAt::fromNative($value);
        $test2 = UpdatedAt::fromNative($value);
        $test3 = UpdatedAt::now();
        self::assertTrue($test->sameValueAs($test2));
        self::assertFalse($test->sameValueAs($test3));

        $mock = Mockery::mock(ValueObjectInterface::class);
        $this->assertFalse($test->sameValueAs($mock));
    }

    /**
     * Test for "Returns date from current DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt::getDate
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UpdatedAtDataProvider::getDataForGetDateMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getDateShouldReturnDateTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
        $microCommonValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new UpdatedAt($microCommonValueObjectDateTimeDateMock, $microCommonValueObjectDateTimeTimeMock);

        $result = $test->getDate();
        self::assertInstanceOf(Date::class, $result);
    }

    /**
     * Test for "Returns time from current DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt::getTime
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UpdatedAtDataProvider::getDataForGetTimeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getTimeShouldReturnTimeTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
        $microCommonValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new UpdatedAt($microCommonValueObjectDateTimeDateMock, $microCommonValueObjectDateTimeTimeMock);

        $result = $test->getTime();
        self::assertInstanceOf(Time::class, $result);
    }

    /**
     * Test for "Returns a native PHP DateTime version of the current DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt::toNativeDateTime
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UpdatedAtDataProvider::getDataForToNativeDateTimeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function toNativeDateTimeShouldReturnDateTimeTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
        $microCommonValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new UpdatedAt($microCommonValueObjectDateTimeDateMock, $microCommonValueObjectDateTimeTimeMock);

        $result = $test->toNativeDateTime();
        self::assertInstanceOf(DateTime::class, $result);
    }
}
