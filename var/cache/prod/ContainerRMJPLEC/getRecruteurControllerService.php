<?php

namespace ContainerRMJPLEC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecruteurControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\RecruteurController' shared autowired service.
     *
     * @return \App\Controller\RecruteurController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\RecruteurController'] = $instance = new \App\Controller\RecruteurController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\RecruteurController', $container));

        return $instance;
    }
}
