<?php

namespace tontineBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ParametersCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $connection = $container->get('doctrine.dbal.tontine_connection');
        $params = $connection->fetchAll('SELECT name, value FROM parameters');
        
        foreach($params as $param) {
            $container->setParameter($param['name'], $param['value']);
        }     
    }
}

