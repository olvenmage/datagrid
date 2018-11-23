<?php

namespace Abbert\DatagridBundle;

use Abbert\DatagridBundle\DependencyInjection\Compiler\Datagrid;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AbbertDatagridBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new Datagrid());
    }
}
