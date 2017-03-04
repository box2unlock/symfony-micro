<?php

namespace AppBundle\Util;

use AppKernel;

/**
 * Class SymfonyVersion
 * @package AppBundle\Util
 */
class SymfonyVersion
{
    /**
     * @var AppKernel
     */
    protected $kernel;

    /**
     * Constructor
     *
     * @param AppKernel $kernel
     */
    public function __construct(AppKernel $kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * Return Symfony version
     *
     * @return string
     */
    public function getVersion()
    {
        $kernel = $this->kernel;
        return $kernel::VERSION;
    }
}
