<?php

namespace Mpp\ApicilClientBundle\DependencyInjection\Compiler;

use Mpp\PreventGoBundle\Client\RestHttpClient;
use Mpp\PreventGoBundle\DependencyInjection\Configuration;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class MppPreventGoCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $config = $container->getParameter(Configuration::CONFIGURATION_ROOT);

        if (!$container->hasDefinition(RestHttpClient::class)) {
            return;
        }

        $container
            ->getDefinition(RestHttpClient::class)
            ->setArgument('$httpClient', $container->getDefinition($config['http_client']))
        ;
    }
}
