<?php

namespace Mpp\PreventgoBundle\DependencyInjection\Compiler;

use Mpp\PreventgoBundle\Client\RestHttpClient;
use Mpp\PreventgoBundle\DependencyInjection\Configuration;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class MppPreventgoCompilerPass implements CompilerPassInterface
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
