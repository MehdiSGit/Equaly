<?php

namespace ContainerZakWY5x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDocumentTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\DocumentType' shared autowired service.
     *
     * @return \App\Form\DocumentType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\DocumentType'] = new \App\Form\DocumentType();
    }
}
