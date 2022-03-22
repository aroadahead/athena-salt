<?php

namespace AthenaSalt\Service\Factory;

use AthenaSalt\Service\SaltService;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class SaltServiceFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new SaltService($container);
    }
}