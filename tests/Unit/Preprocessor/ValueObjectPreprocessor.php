<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Preprocessor;

use MicroModule\UnitTestGenerator\Generator\Helper\CodeHelper;
use MicroModule\UnitTestGenerator\Generator\Preprocessor\PreprocessorInterface;
use ReflectionClass;
use ReflectionMethod;

/**
 * Class ValueObjectPreprocessor.
 */
class ValueObjectPreprocessor implements PreprocessorInterface
{
    use CodeHelper;

    /**
     * Validate is should method be tested.
     *
     * @return bool
     */
    public function isShouldBeTested(): bool
    {
        return true;
    }

    /**
     * Exec preprocessor logic.
     *
     * @param ReflectionClass  $reflectionClass
     * @param ReflectionMethod $reflectionMethod
     * @param string           $testMethodName
     * @param string|null      $testMethodBody
     */
    public function process(ReflectionClass $reflectionClass, ReflectionMethod $reflectionMethod, string &$testMethodName, ?string &$testMethodBody): void
    {
    }
}
