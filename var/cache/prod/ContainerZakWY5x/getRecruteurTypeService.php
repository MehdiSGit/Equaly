<?php

namespace ContainerZakWY5x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecruteurTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\RecruteurType' shared autowired service.
     *
     * @return \App\Form\RecruteurType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\RecruteurType'] = new \App\Form\RecruteurType();
    }
}
