<?php

namespace Mpp\PreventGoBundle;

use Mpp\PreventGoBundle\DependencyInjection\Compiler\MppPreventGoCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MppPreventGoBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new MppPreventGoCompilerPass());
    }
}