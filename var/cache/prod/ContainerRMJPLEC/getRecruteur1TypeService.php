<?php

namespace ContainerRMJPLEC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecruteur1TypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Recruteur1Type' shared autowired service.
     *
     * @return \App\Form\Recruteur1Type
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Recruteur1Type'] = new \App\Form\Recruteur1Type();
    }
}
