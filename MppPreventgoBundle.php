<?php

namespace Mpp\PreventgoBundle;

use Mpp\PreventgoBundle\DependencyInjection\Compiler\MppPreventgoCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MppPreventgoBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new MppPreventgoCompilerPass());
    }
}