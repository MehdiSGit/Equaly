<?php

namespace ContainerZakWY5x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wv06f8xService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.wv06f8x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wv06f8x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'job' => ['privates', '.errored..service_locator.wv06f8x.App\\Entity\\Job', NULL, 'Cannot autowire service ".service_locator.wv06f8x": it references class "App\\Entity\\Job" but no such service exists.'],
        ], [
            'job' => 'App\\Entity\\Job',
        ]);
    }
}
