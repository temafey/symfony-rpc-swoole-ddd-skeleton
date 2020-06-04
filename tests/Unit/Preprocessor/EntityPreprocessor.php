<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Preprocessor;

use MicroModule\UnitTestGenerator\Generator\Exception\CodeExtractException;
use MicroModule\UnitTestGenerator\Generator\Exception\FileNotExistsException;
use MicroModule\UnitTestGenerator\Generator\Helper\CodeHelper;
use MicroModule\UnitTestGenerator\Generator\Preprocessor\PreprocessorInterface;
use MicroModule\ValueObject\ValueObjectInterface;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;

/**
 * Class EntityPreprocessor.
 */
class EntityPreprocessor implements PreprocessorInterface
{
    use CodeHelper;

    private const EVENT_METHOD_CALL_NAME = 'apply';
    private const EVENT_FACTORY_MAKE_METHOD_PATTERN = '/make.*Event/';

    /**
     * Validate is should method be tested.
     *
     * @param ReflectionClass  $reflectionClass
     * @param ReflectionMethod $reflectionMethod
     *
     * @return bool
     *
     * @throws ReflectionException
     */
    public function isShouldBeTested(ReflectionClass $reflectionClass, ReflectionMethod $reflectionMethod): bool
    {
        $declaringReflectionClass = $reflectionMethod->getDeclaringClass();

        if ($reflectionClass->getName() !== $declaringReflectionClass->getName()) {
            return false;
        }
        $returnType = $reflectionMethod->getReturnType();

        if (!$returnType) {
            return true;
        }
        $returnTypeName = $returnType->getName();

        if (class_exists('\\' . $returnTypeName)) {
            $returnTypeReflectionClass = new ReflectionClass('\\' . $returnTypeName);

            if ($returnTypeReflectionClass->implementsInterface(ValueObjectInterface::class)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Exec preprocessor logic.
     *
     * @param ReflectionMethod $reflectionMethod
     * @param string           $testMethodName
     * @param string|null      $testMethodBody
     *
     * @throws CodeExtractException
     * @throws FileNotExistsException
     */
    public function process(ReflectionMethod $reflectionMethod, string &$testMethodName, ?string &$testMethodBody): void
    {
        $methodStmt = $this->findAndReturnMethodAstStmtByName($reflectionMethod);
        $eventCallMethodName = self::EVENT_METHOD_CALL_NAME;
        $callMethodStmts = $this->findCallMethodsByNameFromAstStmt($methodStmt, $eventCallMethodName);

        if (!$callMethodStmts) {
            return;
        }
        $pattern = self::EVENT_FACTORY_MAKE_METHOD_PATTERN;
        $eventFactoryCallMethods = $this->findCallMethodsByPatternFromAstStmts($callMethodStmts, $pattern);

        if (!$eventFactoryCallMethods) {
            return;
        }
        $events = $this->findEvents($eventFactoryCallMethods);

        if (!$events) {
            return;
        }

        if (null === $testMethodBody) {
            $testMethodBody = '';
        }
        $testMethodBody .= $this->generateEventTestCases($events, $reflectionMethod->getDeclaringClass(), $testMethodName);
    }

    /**
     * Find events.
     *
     * @param mixed[] $eventFactoryCallMethods
     *
     * @return string[]
     */
    private function findEvents(array $eventFactoryCallMethods): array
    {
        $events = [];

        foreach ($eventFactoryCallMethods as $stmtEvent) {
            $makeEventName = $stmtEvent->name->toString();
            $events[] = str_replace('make', '', $makeEventName);
        }

        return $events;
    }

    /**
     * @param string[]        $events
     * @param ReflectionClass $reflectionClass
     * @param string          $testMethodName
     *
     * @return string
     *
     * @throws CodeExtractException
     * @throws FileNotExistsException
     */
    private function generateEventTestCases(array $events, ReflectionClass $reflectionClass, string &$testMethodName): string
    {
        $testCode = '
        
        $events = $test->getUncommittedEvents();
        self::assertCount(' . count($events) . ', $events->getIterator(), \'Only ' . count($events) . ' event(s) should be in the buffer\');';

        foreach ($events as $i => $event) {
            $eventClassName = $this->findAndReturnClassNameFromUseStatement($event, $reflectionClass);
            $testCode .= '
        $events->getIterator()->offsetGet(\'' . $i . '\');
        self::assertInstanceOf(\\' . $eventClassName . '::class, $event->getPayload(), \'Event should be ' . $event . '\');';
            $testMethodName .= 'AndShouldFire' . $event;
        }

        return $testCode;
    }
}
