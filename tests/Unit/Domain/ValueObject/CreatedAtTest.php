<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\ValueObject;

use MicroModule\ValueObject\DateTime\Date;
use MicroModule\ValueObject\DateTime\Exception\InvalidDateException;
use MicroModule\ValueObject\DateTime\Time;
use MicroModule\ValueObject\ValueObjectInterface;
use DateTime;
use Exception;
use Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Mockery;

/**
 * Test for class CreatedAt.
 *
 * @class CreatedAtTest
 */
class CreatedAtTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Returns a new DateTime object from native values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt::fromNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws InvalidDateException
     */
    public function fromNativeShouldReturnDateTimeTest(array $mockArgs): void
    {
        $value = $mockArgs['fromNative']['toNative'];
        $test = CreatedAt::fromNative($value);

        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\DateTime::class, $test);
        self::assertInstanceOf(CreatedAt::class, $test);
    }

    /**
     * Test for "Return native value".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForToNativeMethod()
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
        $test = new CreatedAt($microCommonValueObjectDateTimeDateMock, $microCommonValueObjectDateTimeTimeMock);
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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt::fromNativeDateTime
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForFromNativeDateTimeMethod()
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
        $test = CreatedAt::fromNativeDateTime($dateTimeMock);

        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\DateTime::class, $test);
    }

    /**
     * Test for "Returns current DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt::now
     *
     * @throws InvalidDateException
     */
    public function nowShouldReturnDateTimeTest(): void
    {
        $test = CreatedAt::now();

        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\DateTime::class, $test);
        self::assertInstanceOf(CreatedAt::class, $test);
    }

    /**
     * Test for "Tells whether two DateTime are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt::sameValueAs
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws InvalidDateException
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs): void
    {
        $value = $mockArgs['fromNative']['toNative'];
        $test = CreatedAt::fromNative($value);
        $test2 = CreatedAt::fromNative($value);
        $test3 = CreatedAt::now();

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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt::getDate
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForGetDateMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getDateShouldReturnDateTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
        $microCommonValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new CreatedAt($microCommonValueObjectDateTimeDateMock, $microCommonValueObjectDateTimeTimeMock);
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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt::getTime
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForGetTimeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getTimeShouldReturnTimeTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
        $microCommonValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new CreatedAt($microCommonValueObjectDateTimeDateMock, $microCommonValueObjectDateTimeTimeMock);
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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt::toNativeDateTime
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForToNativeDateTimeMethod()
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
        $test = new CreatedAt($microCommonValueObjectDateTimeDateMock, $microCommonValueObjectDateTimeTimeMock);
        $result = $test->toNativeDateTime();

        self::assertInstanceOf(DateTime::class, $result);
    }
}
