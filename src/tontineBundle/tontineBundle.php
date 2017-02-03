<?php

namespace tontineBundle;

use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use tontineBundle\DependencyInjection\Compiler\ParametersCompilerPass;

class tontineBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ParametersCompilerPass(), PassConfig::TYPE_AFTER_REMOVING);
    }
}
