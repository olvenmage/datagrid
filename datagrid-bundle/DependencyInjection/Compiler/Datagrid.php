<?php

namespace Abbert\DatagridBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class Datagrid implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('abbert_datagrid.datagrid')) {
            return;
        }

        $definition = $container->getDefinition('abbert_datagrid.datagrid');

        $grids = array();

        foreach ($container->findTaggedServiceIds('datagrid') as $serviceId => $tag) {
            $serviceDefinition = $container->getDefinition($serviceId);
            if (!$serviceDefinition->isPublic()) {
                throw new \InvalidArgumentException(sprintf('The service "%s" must be public as form types are lazy-loaded.', $serviceId));
            }

            // Support type access by FQCN
            $grids[$serviceDefinition->getClass()] = $serviceId;
        }

        $definition->replaceArgument(0, $grids);
    }
}
