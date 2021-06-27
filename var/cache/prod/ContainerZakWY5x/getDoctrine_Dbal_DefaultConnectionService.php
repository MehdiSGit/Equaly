<?php

namespace ContainerZakWY5x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnectionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => ['privates', 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 'getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService', true],
            'vich_uploader.listener.clean.candidat' => ['privates', 'vich_uploader.listener.clean.candidat', 'getVichUploader_Listener_Clean_CandidatService', true],
            'vich_uploader.listener.remove.candidat' => ['privates', 'vich_uploader.listener.remove.candidat', 'getVichUploader_Listener_Remove_CandidatService', true],
            'vich_uploader.listener.upload.candidat' => ['privates', 'vich_uploader.listener.upload.candidat', 'getVichUploader_Listener_Upload_CandidatService', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => '?',
            'vich_uploader.listener.clean.candidat' => '?',
            'vich_uploader.listener.remove.candidat' => '?',
            'vich_uploader.listener.upload.candidat' => '?',
        ]), [0 => 'vich_uploader.listener.clean.candidat', 1 => 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 2 => 'vich_uploader.listener.remove.candidat', 3 => 'vich_uploader.listener.upload.candidat']);
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $container->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($container->parameters['doctrine.dbal.connection_factory.types']))->createConnection(['connection_override_options' => [], 'url' => $container->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), $a, []);
    }
}
