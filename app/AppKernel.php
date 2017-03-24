<?php

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Bundle\WebProfilerBundle\WebProfilerBundle;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Routing\RouteCollectionBuilder;
use AppBundle\AppBundle;

/**
 * Class AppKernel
 */
class AppKernel extends Kernel
{
    use MicroKernelTrait;

    /**
     * {@inheritdoc}
     */
    public function __construct($environment, $debug)
    {
        parent::__construct($environment, $debug);
        date_default_timezone_set('UTC');
        if (in_array($this->getEnvironment(), ['dev'], true)) {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(-1);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        $bundles = [];
        $bundles[] = new FrameworkBundle;
        $bundles[] = new TwigBundle;
        $bundles[] = new DoctrineBundle;

        if (in_array($this->getEnvironment(), ['dev'], true)) {
            $bundles[] = new WebProfilerBundle;
        }

        $bundles[] = new AppBundle;
        return $bundles;
    }

    /**
     * {@inheritdoc}
     */
    public function configureContainer(ContainerBuilder $container, LoaderInterface $loader)
    {
        $loader->load($this->getRootDir() . '/config/parameters.php');
        $loader->load($this->getRootDir() . '/config/config_' . $this->getEnvironment() . '.php');
        $loader->load($this->getRootDir() . '/config/services.php');
    }

    /**
     * {@inheritdoc}
     */
    public function configureRoutes(RouteCollectionBuilder $routes)
    {
        $environment = $this->getEnvironment();
        $routes = require $this->getRootDir() . '/config/routes.php';
    }

    /**
     * {@inheritdoc}
     */
    public function getRootDir()
    {
        return __DIR__;
    }

    /**
     * @return string
     */
    public function getProjectRootDir()
    {
        return dirname($this->getRootDir());
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir()
    {
        return $this->getProjectRootDir() . '/var/cache/' . $this->getEnvironment();
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir()
    {
        return $this->getProjectRootDir() . '/var/logs';
    }
}
