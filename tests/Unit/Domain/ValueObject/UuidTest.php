<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\ValueObject;

use MicroModule\ValueObject\Exception\InvalidNativeArgumentException;
use Exception;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use TypeError;

/**
 * Test for class Uuid.
 *
 * @class UuidTest
 */
class UuidTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Returns a StringLiteral object given a PHP native string as parameter".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid::fromNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UuidDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function fromNativeShouldReturnStringLiteralTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = Uuid::fromNative($value);

        self::assertInstanceOf(\MicroModule\ValueObject\Identity\UUID::class, $test);
        self::assertInstanceOf(Uuid::class, $test);
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
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UuidDataProvider::getInvalidTypeErrorData()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function invalidNativeArgumentTypeErrorTest(array $mockArgs): void
    {
        $this->expectException(TypeError::class);
        $value = $mockArgs['value'];
        new Uuid($value);
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
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UuidDataProvider::getInvalidNativeArgumentExceptionData()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function invalidNativeArgumentInvalidNativeArgumentExceptionTest(array $mockArgs): void
    {
        $this->expectException(InvalidNativeArgumentException::class);
        $value = $mockArgs['value'];
        new Uuid($value);
    }

    /**
     * Test for "Returns the value of the string".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UuidDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function toNativeShouldReturnStringTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Uuid($value);
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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid::sameValueAs
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UuidDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Uuid($value);
        $microValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['ValueObjectUuid'], $mockTimes['ValueObjectUuid']);
        $result = $test->sameValueAs($microValueObjectUuidMock);

        self::assertTrue($result);
    }

    /**
     * Test for "Tells whether the StringLiteral is empty".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid::isEmpty
     */
    public function isEmptyShouldAlwaysReturnFalseTest(): void
    {
        $test = new Uuid(null);
        $result = $test->isEmpty();

        self::assertFalse($result);
    }
}
