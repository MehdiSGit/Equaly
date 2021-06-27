<?php

namespace ContainerZakWY5x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultEntityManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['doctrine.orm.default_entity_manager'] = $container->createProxy('EntityManager_9a5be93', function () use ($container) {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Symfony\Component\Cache\DoctrineProvider(($container->privates['doctrine.system_cache_pool'] ?? $container->load('getDoctrine_SystemCachePoolService')));
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $d = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity')]);

        $c->addDriver($d, 'App\\Entity');
        $c->addDriver($d, 'Vich\\UploaderBundle\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\Entity']);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(new \Symfony\Component\Cache\Adapter\PhpArrayAdapter(($container->targetDir.''.'/doctrine/orm/default_metadata.php'), new \Symfony\Component\Cache\Adapter\DoctrineAdapter($b))));
        $a->setQueryCacheImpl($b);
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($container->privates['doctrine.result_cache_pool'] ?? $container->load('getDoctrine_ResultCachePoolService'))));
        $a->setMetadataDriverImpl(new \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver($c, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.ulid_generator' => ['privates', 'doctrine.ulid_generator', 'getDoctrine_UlidGeneratorService', true],
        ], [
            'doctrine.ulid_generator' => '?',
        ])));
        $a->setProxyDir(($container->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($container));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Repository\\CandidatEvaluationRepository' => ['privates', 'App\\Repository\\CandidatEvaluationRepository', 'getCandidatEvaluationRepositoryService', true],
            'App\\Repository\\CandidatRepository' => ['privates', 'App\\Repository\\CandidatRepository', 'getCandidatRepositoryService', true],
            'App\\Repository\\CompanyRepository' => ['privates', 'App\\Repository\\CompanyRepository', 'getCompanyRepositoryService', true],
            'App\\Repository\\DocumentRepository' => ['privates', 'App\\Repository\\DocumentRepository', 'getDocumentRepositoryService', true],
            'App\\Repository\\FavorisRepository' => ['privates', 'App\\Repository\\FavorisRepository', 'getFavorisRepositoryService', true],
            'App\\Repository\\JobCategoryRepository' => ['privates', 'App\\Repository\\JobCategoryRepository', 'getJobCategoryRepositoryService', true],
            'App\\Repository\\JobPositionRepository' => ['privates', 'App\\Repository\\JobPositionRepository', 'getJobPositionRepositoryService', true],
            'App\\Repository\\JobPostulerRepository' => ['privates', 'App\\Repository\\JobPostulerRepository', 'getJobPostulerRepositoryService', true],
            'App\\Repository\\JobRepository' => ['privates', 'App\\Repository\\JobRepository', 'getJobRepositoryService', true],
            'App\\Repository\\RecruteurRepository' => ['privates', 'App\\Repository\\RecruteurRepository', 'getRecruteurRepositoryService', true],
            'App\\Repository\\ResetPasswordRequestRepository' => ['privates', 'App\\Repository\\ResetPasswordRequestRepository', 'getResetPasswordRequestRepositoryService', true],
        ], [
            'App\\Repository\\CandidatEvaluationRepository' => '?',
            'App\\Repository\\CandidatRepository' => '?',
            'App\\Repository\\CompanyRepository' => '?',
            'App\\Repository\\DocumentRepository' => '?',
            'App\\Repository\\FavorisRepository' => '?',
            'App\\Repository\\JobCategoryRepository' => '?',
            'App\\Repository\\JobPositionRepository' => '?',
            'App\\Repository\\JobPostulerRepository' => '?',
            'App\\Repository\\JobRepository' => '?',
            'App\\Repository\\RecruteurRepository' => '?',
            'App\\Repository\\ResetPasswordRequestRepository' => '?',
        ])));

        $instance = \Doctrine\ORM\EntityManager::create(($container->services['doctrine.dbal.default_connection'] ?? $container->load('getDoctrine_Dbal_DefaultConnectionService')), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }
}
