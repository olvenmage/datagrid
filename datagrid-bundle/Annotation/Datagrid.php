<?php
namespace Abbert\DatagridBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * Class Datagrid
 * @package Abbert\DatagridBundle\Annotation
 * @Annotation
 */
class Datagrid extends Annotation
{
    public $dependencies = [];
}
