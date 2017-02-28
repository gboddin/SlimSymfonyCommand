<?php

namespace Gbo;

use Slim\Container as SlimContainer;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

abstract class  SlimSymfonyCommand extends SymfonyCommand
{
    /**
     * @var SlimContainer
     */
    private $container;

    /**
     * @param string $id
     *
     * @return mixed
     */
    protected function get($id)
    {
        return $this->container[$id];
    }

    /**
     * @param SlimContainer   $container
     * @param string|null $name
     */
    public function __construct(SlimContainer $container, $name = null)
    {
        $this->container = $container;

        parent::__construct($name);
    }
}