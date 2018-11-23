<?php
namespace Abbert\DatagridBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * Class Datagrid
 * @package Abbert\Datagrid\Annotation
 * @Annotation
 */
class DoctrineSource extends Annotation
{
    public $entityClass = '';
}
