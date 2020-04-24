<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\ValueObject;

use MicroModule\ValueObject\StringLiteral\StringLiteral;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Url;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use TypeError;

/**
 * Test for class Url.
 *
 * @class UrlTest
 */
class UrlTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Returns a StringLiteral object given a PHP native string as parameter".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Url::fromNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UrlDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function fromNativeShouldReturnStringLiteralTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = Url::fromNative($value);
        self::assertInstanceOf(StringLiteral::class, $test);
        self::assertInstanceOf(Url::class, $test);
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
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UrlDataProvider::getInvalidData()
     *
     * @param mixed[] $mockArgs
     */
    public function invalidNativeArgumentTest(array $mockArgs): void
    {
        $this->expectException(TypeError::class);
        $value = $mockArgs['value'];
        new Url($value);
    }

    /**
     * Test for "Returns the value of the string".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Url::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UrlDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function toNativeShouldReturnStringTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = new Url($value);
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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Url::sameValueAs
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\UrlDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Url($value);
        $microValueObjectUrlMock = $this->createDomainValueObjectUrlMock($mockArgs['ValueObjectUrl'], $mockTimes['ValueObjectUrl']);
        $result = $test->sameValueAs($microValueObjectUrlMock);

        self::assertTrue($result);
    }

    /**
     * Test for "Tells whether the StringLiteral is empty".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Url::isEmpty
     */
    public function isEmptyShouldReturnBoolTest(): void
    {
        $test = new Url('');
        $result = $test->isEmpty();

        self::assertTrue($result);
    }
}
