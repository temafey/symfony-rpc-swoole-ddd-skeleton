<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Presentation\Cli\Command;

use MicroModule\UnitTestGenerator\Generator\DataProviderGenerator;
use MicroModule\UnitTestGenerator\Generator\Mock\Mockery;
use MicroModule\UnitTestGenerator\Service\TestClass;
use MicroModule\ValueObject\DateTime\Date;
use MicroModule\ValueObject\DateTime\DateTime;
use MicroModule\ValueObject\DateTime\Time;
use ArrayIterator;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\Schema;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt;
use Backend\Api\RpcSkeleton\Tests\Unit\Preprocessor\ValueObjectPreprocessor;
use Ramsey\Uuid\UuidInterface;
use ReflectionClass;
use SplFixedArray;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class TestClassGenerator.
 */
class TestClassGenerator extends Command
{
    // the name of the command (the part after "bin/console")
    /**
     * Cli command name.
     *
     * @var string
     */
    protected static $defaultName = 'test:generate:class';

    /**
     * Execute cli command.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|void|null
     *
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        unset($input, $output);
        $excludeMethods = [
            'fromNative',
            'fromArray',
            'toReal',
            'toNatural',
            'toInteger',
            '__toString',
            '__clone',
            '__wakeup',
            '__callStatic',
            DateTime::class => [
                'all_except' => ['toNative'],
            ],
            CreatedAt::class => [
                'all_except' => ['toNative'], //, 'getYear', 'getMonth', 'getDay', 'getHour', 'getMinute', 'getSecond']
            ],
            ArrayIterator::class,
            SplFixedArray::class,
            UuidInterface::class => [
                'all_except' => ['toString'],
            ],
            \DateTime::class => [
                'all_except' => ['getTimestamp'],
            ],
            Time::class => [
                'all_except' => ['toNative'],
            ],
            Date::class => [
                'all_except' => ['toNative'],
            ],
            ItemEntity::class => [
                'all_except' => [
                    'addId',
                    'delete',
                    'getUuid',
                    'getId',
                    'getParentId',
                    'getName',
                    'getStatus',
                    'getUrl',
                    'getCreatedAt',
                    'getUpdatedAt',
                    'initializeState',
                    'getPlayhead',
                ],
            ],
            Schema::class,
            Connection::class => [
                'all_except' => [
                    'prepare',
                    'commit',
                    'rollBack',
                    'beginTransaction',
                    'insert',
                    'update',
                    'delete',
                ],
            ],
        ];
        DataProviderGenerator::setExcludeMethods($excludeMethods);
        Mockery::setExcludeMethods($excludeMethods);
        $reflection = new ReflectionClass(CreatedAt::class);
        $file = $reflection->getFileName();
        $testClass = new TestClass();
        $testClass->setTestPreprocessor(CreatedAt::class, new ValueObjectPreprocessor());
        $testClass->generate($file);

        return 0;
    }
}
