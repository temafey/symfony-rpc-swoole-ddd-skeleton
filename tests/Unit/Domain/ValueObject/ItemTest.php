<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\ValueObject;

use Backend\Api\RpcSkeleton\Domain\Exception\ValueObjectInvalidException;
use Backend\Api\RpcSkeleton\Domain\Exception\ValueObjectInvalidNativeValueException;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Broadway\Serializer\Serializable;
use Exception;
use MicroModule\ValueObject\ValueObjectInterface;

/**
 * Test for class Item.
 *
 * @class ItemTest
 */
class ItemTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Returns a Item object given a PHP native string as parameter".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Item::fromNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ItemDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function fromNativeShouldReturnItemTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = Item::fromNative($value);

        self::assertInstanceOf(Item::class, $test);
        self::assertInstanceOf(Serializable::class, $test);
        self::assertInstanceOf(ValueObjectInterface::class, $test);
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
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ItemDataProvider::getInvalidData()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function invalidNativeArgumentTest(array $mockArgs): void
    {
        $this->expectException(ValueObjectInvalidNativeValueException::class);
        $value = $mockArgs['value'];
        Item::fromNative($value);
    }

    /**
     * Test for "Returns the value of the string".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Item::toNative
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ItemDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function toNativeShouldReturnArrayTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = Item::fromNative($value);
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
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Item::sameValueAs
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ItemDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws ValueObjectInvalidException
     * @throws Exception
     * @throws Exception
     * @throws Exception
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs): void
    {
        $value = $mockArgs['value'];
        $test = Item::fromNative($value);
        $test2 = Item::fromNative($mockArgs['ValueObjectItem']);
        $test3 = Item::fromNative([]);

        self::assertTrue($test->sameValueAs($test2));
        self::assertFalse($test->sameValueAs($test3));
    }

    /**
     * Test for "Convert array to Item ValueObject".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Item::deserialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ItemDataProvider::getDataForDeserializeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function deserializeShouldReturnItemTest(array $mockArgs): void
    {
        $data = $mockArgs['data'];
        $test = Item::deserialize($data);
        $result = $test->toNative();

        self::assertInstanceOf(Item::class, $test);
        self::assertEquals($data, $result);
    }

    /**
     * Test for "Convert Item ValueObject to array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\ValueObject\Item::serialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\ValueObject\ItemDataProvider::getDataForSerializeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function serializeShouldReturnArrayTest(array $mockArgs): void
    {
        $data = $mockArgs['serialize'];
        $test = Item::fromNative($data);
        $result = $test->serialize();

        self::assertEquals($mockArgs['serialize'], $result);
    }
}
