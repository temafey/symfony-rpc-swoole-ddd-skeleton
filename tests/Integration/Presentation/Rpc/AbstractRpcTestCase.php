<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Integration\Presentation\Rpc;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class AbstractConsoleTestCase.
 */
class AbstractRpcTestCase extends WebTestCase
{
    /**
     * Get and return service from Service Container.
     *
     * @param string $serviceId
     *
     * @return null|object
     */
    protected function service(string $serviceId)
    {
        return self::$container->get($serviceId);
    }

}
