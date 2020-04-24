<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\ValueObject;

use MicroModule\ValueObject\StringLiteral\StringLiteral;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Name;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use TypeError;

/**
 * Test for class Name.
 *
 * @class NameTest
 */
class NameTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Returns a StringLiteral object given a PHP native string as parameter".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Name::fromNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\NameDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function fromNativeShouldReturnStringLiteralTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = Name::fromNative($value);

        self::assertInstanceOf(StringLiteral::class, $test);
        self::assertInstanceOf(Name::class, $test);
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
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\NameDataProvider::getInvalidData()
     *
     * @param mixed[] $mockArgs
     */
    public function invalidNativeArgumentTest(array $mockArgs): void
    {
        $this->expectException(TypeError::class);
        $value = $mockArgs['value'];
        new Name($value);
    }

    /**
     * Test for "Returns the value of the string".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Name::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\NameDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function toNativeShouldReturnStringTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Name($value);
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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Name::sameValueAs
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\NameDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Name($value);
        $microValueObjectNameMock = $this->createDomainValueObjectNameMock($mockArgs['ValueObjectName'], $mockTimes['ValueObjectName']);
        $result = $test->sameValueAs($microValueObjectNameMock);

        self::assertTrue($result);
    }

    /**
     * Test for "Tells whether the StringLiteral is empty".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Name::isEmpty
     */
    public function isEmptyShouldReturnBoolTest(): void
    {
        $test = new Name('');
        $result = $test->isEmpty();

        self::assertTrue($result);
    }
}
