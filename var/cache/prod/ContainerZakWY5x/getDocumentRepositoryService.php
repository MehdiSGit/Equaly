<?php

namespace ContainerZakWY5x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDocumentRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\DocumentRepository' shared autowired service.
     *
     * @return \App\Repository\DocumentRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\DocumentRepository'] = new \App\Repository\DocumentRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}