<?php

namespace ContainerKd0FgX3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCandidatControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CandidatController' shared autowired service.
     *
     * @return \App\Controller\CandidatController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CandidatController.php';

        $container->services['App\\Controller\\CandidatController'] = $instance = new \App\Controller\CandidatController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\CandidatController', $container));

        return $instance;
    }
}
