<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton;

use Exception;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Exception\LoaderLoadException;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\RouteCollectionBuilder;
use function is_dir;

/**
 * Class Kernel.
 */
class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    private const CONFIG_EXTS = '.{php,xml,yaml,yml}';

    /**
     * {@inheritdoc}
     */
    public function getCacheDir(): string
    {
        if ('prod' === $this->environment) {
            return '/dev/shm/symfony-app/cache/' . $this->environment;
        }

        return CACHE_PATH . $this->environment;
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir(): string
    {
        return LOG_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function registerBundles(): iterable
    {
        $contents = require CONFIG_PATH . 'bundles.php';

        foreach ($contents as $class => $envs) {
            if (isset($envs['all']) || isset($envs[$this->environment])) {
                yield new $class();
            }
        }
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     * @throws Exception
     * @throws Exception
     * @throws Exception
     * @throws Exception
     * @throws Exception
     */
    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader): void
    {
        $container->setParameter('container.autowiring.strict_mode', true);
        $container->setParameter('container.dumper.inline_class_loader', true);

        $loader->load(CONFIG_PATH . '{packages}/*' . self::CONFIG_EXTS, 'glob');
        if (is_dir(CONFIG_PATH . 'packages/' . $this->environment)) {
            $loader->load(CONFIG_PATH . '{packages}/' . $this->environment . '/*' . self::CONFIG_EXTS, 'glob');
        }

        $loader->load(CONFIG_PATH . 'parameters' . self::CONFIG_EXTS, 'glob');

        $loader->load(CONFIG_PATH . '{services}' . self::CONFIG_EXTS, 'glob');
        $loader->load(CONFIG_PATH . '{services}/*' . self::CONFIG_EXTS, 'glob');
        $loader->load(CONFIG_PATH . '{services}_' . $this->environment . self::CONFIG_EXTS, 'glob');

        if (is_dir(CONFIG_PATH . 'services/' . $this->environment)) {
            $loader->load(CONFIG_PATH . '{services}/' . $this->environment . '/*' . self::CONFIG_EXTS, 'glob');
        }
    }

    /**
     * {@inheritdoc}
     *
     * @throws LoaderLoadException
     * @throws LoaderLoadException
     * @throws LoaderLoadException
     */
    protected function configureRoutes(RouteCollectionBuilder $routes): void
    {
        if (is_dir(CONFIG_PATH . '/routes/')) {
            $routes->import(CONFIG_PATH . '/routes/*' . self::CONFIG_EXTS, '/', 'glob');
        }

        if (is_dir(CONFIG_PATH . '/routes/' . $this->environment)) {
            $routes->import(CONFIG_PATH . '/routes/' . $this->environment . '/**/*' . self::CONFIG_EXTS, '/', 'glob');
        }

        $routes->import(CONFIG_PATH . '/routes' . self::CONFIG_EXTS, '/', 'glob');
    }
}
