<?php

namespace ContainerSwUxFJy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DDj0rpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D_dj0rp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D_dj0rp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jobRepository' => ['privates', 'App\\Repository\\JobRepository', 'getJobRepositoryService', true],
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'jobRepository' => 'App\\Repository\\JobRepository',
            'session' => '?',
        ]);
    }
}
