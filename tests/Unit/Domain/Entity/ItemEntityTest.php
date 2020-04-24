<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Entity;

use Exception;
use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasAddedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasDeletedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasUpdatedEvent;
use Backend\Api\RpcSkeleton\Domain\Exception\ValueObjectInvalidException;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item as ItemValueObject;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EventMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\FactoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemEntity.
 *
 * @class ItemEntityTest
 */
class ItemEntityTest extends UnitTestCase
{
    use ValueObjectMockHelper, EventMockHelper, FactoryMockHelper;

    /**
     * Test for "Factory method for create new ItemEntity object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::create
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::isNew
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::normalize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity\ItemEntityDataProvider::getDataForCreateMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function createShouldInitializeAndReturnItemEntityAndShouldFireItemWasCreatedEventTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = ItemEntity::create($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock, $domainFactoryEventFactoryMock);
        self::assertTrue($test->isNew());
        self::assertInstanceOf(ItemEntity::class, $test);
        self::assertEquals($mockArgs['EventFactory']['makeItemWasCreatedEvent']['getUuid']['toNative'], $test->getUuid()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemWasCreatedEvent']['getItem']['getId']['toNative'], $test->getId()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemWasCreatedEvent']['getItem']['getName']['toNative'], $test->getName()->toNative());

        $events = $test->getUncommittedEvents();
        self::assertCount(1, $events->getIterator(), 'Only 1 event(s) should be in the buffer');
        $event = $events->getIterator()->current();
        self::assertInstanceOf(ItemWasCreatedEvent::class, $event->getPayload(), 'Event should be ItemWasCreatedEvent');
    }

    /**
     * Test for "Apply unique id to new Item".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::addId
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity\ItemEntityDataProvider::getDataForAddIdMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     * @throws Exception
     */
    public function addIdShouldFireItemIdWasAddedEventTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = ItemEntity::create($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock, $domainFactoryEventFactoryMock);
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
        $test->addId($domainValueObjectIdMock);
        self::assertEquals($mockArgs['EventFactory']['makeItemWasCreatedEvent']['getUuid']['toNative'], $test->getUuid()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemWasCreatedEvent']['getItem']['getName']['toNative'], $test->getName()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemIdWasAddedEvent']['getId']['toNative'], $test->getId()->toNative());

        $events = $test->getUncommittedEvents();
        self::assertCount(2, $events->getIterator(), 'Only 2 event(s) should be in the buffer');
        $event = $events->getIterator()->offsetGet(1);
        self::assertInstanceOf(ItemIdWasAddedEvent::class, $event->getPayload(), 'Event should be ItemIdWasAddedEvent');
    }

    /**
     * Test for "Update ItemEntity".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::update
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::isWasUpdated
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity\ItemEntityDataProvider::getDataForUpdateMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function updateShouldFireItemWasUpdatedEventTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = ItemEntity::create($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock, $domainFactoryEventFactoryMock);

        self::assertEquals($mockArgs['EventFactory']['makeItemWasCreatedEvent']['getUuid']['toNative'], $test->getUuid()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemWasCreatedEvent']['getItem']['getName']['toNative'], $test->getName()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemWasCreatedEvent']['getItem']['getUrl']['toNative'], $test->getUrl()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemWasCreatedEvent']['getItem']['getStatus']['toNative'], $test->getStatus()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemWasCreatedEvent']['getItem']['getParentId']['toNative'], $test->getParentId()->toNative());

        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $test->update($domainValueObjectItemMock);

        self::assertEquals($mockArgs['EventFactory']['makeItemWasUpdatedEvent']['getItem']['getName']['toNative'], $test->getName()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemWasUpdatedEvent']['getItem']['getUrl']['toNative'], $test->getUrl()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemWasUpdatedEvent']['getItem']['getStatus']['toNative'], $test->getStatus()->toNative());
        self::assertEquals($mockArgs['EventFactory']['makeItemWasUpdatedEvent']['getItem']['getParentId']['toNative'], $test->getParentId()->toNative());

        self::assertTrue($test->isWasUpdated());
        $events = $test->getUncommittedEvents();
        self::assertCount(2, $events->getIterator(), 'Only 2 event(s) should be in the buffer');
        $event = $events->getIterator()->offsetGet(1);
        self::assertInstanceOf(ItemWasUpdatedEvent::class, $event->getPayload(), 'Event should be ItemWasUpdatedEvent');
    }

    /**
     * Test for "Delete item".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::delete
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity\ItemEntityDataProvider::getDataForDeleteMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     * @throws Exception
     */
    public function deleteShouldFireItemWasDeletedEventTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = ItemEntity::create($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock, $domainFactoryEventFactoryMock);
        $test->delete();
        self::assertTrue($test->isWasDeleted());

        $events = $test->getUncommittedEvents();
        self::assertCount(2, $events->getIterator(), 'Only 2 event(s) should be in the buffer');
        $event = $events->getIterator()->offsetGet(1);
        self::assertInstanceOf(ItemWasDeletedEvent::class, $event->getPayload(), 'Event should be ItemWasDeletedEvent');
    }

    /**
     * Test for "Factory method for create actual ItemEntity object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::createActual
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity\ItemEntityDataProvider::getDataForCreateActualMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ValueObjectInvalidException
     */
    public function createActualShouldReturnItemEntityTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = ItemEntity::createActual($domainValueObjectUuidMock, $domainValueObjectItemMock, $domainFactoryEventFactoryMock);
        self::assertInstanceOf(ItemEntity::class, $test);
    }

    /**
     * Test for "Assemble entity from value object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::assembleFromValueObject
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity\ItemEntityDataProvider::getDataForAssembleFromValueObjectMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ValueObjectInvalidException
     */
    public function assembleFromValueObjectTest(array $mockArgs, array $mockTimes): void
    {
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = new ItemEntity($domainFactoryEventFactoryMock);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $test->assembleFromValueObject($domainValueObjectItemMock);

        self::assertEquals($mockArgs['Item']['getId']['toNative'], $test->getId()->toNative());
        self::assertEquals($mockArgs['Item']['getName']['toNative'], $test->getName()->toNative());
        self::assertEquals($mockArgs['Item']['getUrl']['toNative'], $test->getUrl()->toNative());
        self::assertEquals($mockArgs['Item']['getStatus']['toNative'], $test->getStatus()->toNative());
        self::assertEquals($mockArgs['Item']['getParentId']['toNative'], $test->getParentId()->toNative());
    }

    /**
     * Test for "Assemble value object from entity".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::assembleToValueObject
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity\ItemEntityDataProvider::getDataForAssembleToValueObjectMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function assembleToValueObjectShouldReturnValueObjectInterfaceTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = ItemEntity::createActual($domainValueObjectUuidMock, $domainValueObjectItemMock, $domainFactoryEventFactoryMock);

        $result = $test->assembleToValueObject();
        self::assertInstanceOf(ItemValueObject::class, $result);
        self::assertEquals($mockArgs['Item']['getId']['toNative'], $result->getId()->toNative());
        self::assertEquals($mockArgs['Item']['getName']['toNative'], $result->getName()->toNative());
        self::assertEquals($mockArgs['Item']['getUrl']['toNative'], $result->getUrl()->toNative());
        self::assertEquals($mockArgs['Item']['getStatus']['toNative'], $result->getStatus()->toNative());
        self::assertEquals($mockArgs['Item']['getParentId']['toNative'], $result->getParentId()->toNative());
    }

    /**
     * Test for "Convert entity object to array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::normalize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity\ItemEntityDataProvider::getDataForNormalizeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function normalizeShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = ItemEntity::createActual($domainValueObjectUuidMock, $domainValueObjectItemMock, $domainFactoryEventFactoryMock);

        $result = $test->normalize();
        self::assertEquals($mockArgs['Item']['getId']['toNative'], $result['id']);
        self::assertEquals($mockArgs['Item']['getName']['toNative'], $result['name']);
        self::assertEquals($mockArgs['Item']['getUrl']['toNative'], $result['url']);
        self::assertEquals($mockArgs['Item']['getStatus']['toNative'], $result['status']);
        self::assertEquals($mockArgs['Item']['getParentId']['toNative'], $result['parentId']);
    }

    /**
     * Test for "Return entity primary key value".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::getPrimaryKeyValue
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity\ItemEntityDataProvider::getDataForGetPrimaryKeyValueMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ValueObjectInvalidException
     */
    public function getPrimaryKeyValueShouldReturnIntTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = ItemEntity::createActual($domainValueObjectUuidMock, $domainValueObjectItemMock, $domainFactoryEventFactoryMock);

        $result = $test->getPrimaryKeyValue();
        self::assertEquals($mockArgs['Uuid']['toNative'], $result);
    }

    /**
     * Test for "Return current aggregate root unique key".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity::getAggregateRootId
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Entity\ItemEntityDataProvider::getDataForGetAggregateRootIdMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ValueObjectInvalidException
     */
    public function getAggregateRootIdShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = ItemEntity::createActual($domainValueObjectUuidMock, $domainValueObjectItemMock, $domainFactoryEventFactoryMock);

        $result = $test->getAggregateRootId();
        self::assertEquals($mockArgs['Uuid']['toNative'], $result);
    }
}
