<?php

namespace ContainerSwUxFJy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb2703 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerddbf4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf0b97 = [
        
    ];

    public function getConnection()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getConnection', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getMetadataFactory', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getExpressionBuilder', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'beginTransaction', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getCache', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getCache();
    }

    public function transactional($func)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'transactional', array('func' => $func), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->transactional($func);
    }

    public function commit()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'commit', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->commit();
    }

    public function rollback()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'rollback', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getClassMetadata', array('className' => $className), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'createQuery', array('dql' => $dql), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'createNamedQuery', array('name' => $name), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'createQueryBuilder', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'flush', array('entity' => $entity), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'clear', array('entityName' => $entityName), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->clear($entityName);
    }

    public function close()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'close', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->close();
    }

    public function persist($entity)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'persist', array('entity' => $entity), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'remove', array('entity' => $entity), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'refresh', array('entity' => $entity), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'detach', array('entity' => $entity), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'merge', array('entity' => $entity), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getRepository', array('entityName' => $entityName), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'contains', array('entity' => $entity), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getEventManager', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getConfiguration', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'isOpen', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getUnitOfWork', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getProxyFactory', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'initializeObject', array('obj' => $obj), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'getFilters', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'isFiltersStateClean', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'hasFilters', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return $this->valueHolderb2703->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerddbf4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb2703) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb2703 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb2703->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, '__get', ['name' => $name], $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        if (isset(self::$publicPropertiesf0b97[$name])) {
            return $this->valueHolderb2703->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2703;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb2703;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2703;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb2703;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, '__isset', array('name' => $name), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2703;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb2703;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, '__unset', array('name' => $name), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2703;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb2703;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, '__clone', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        $this->valueHolderb2703 = clone $this->valueHolderb2703;
    }

    public function __sleep()
    {
        $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, '__sleep', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;

        return array('valueHolderb2703');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerddbf4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerddbf4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerddbf4 && ($this->initializerddbf4->__invoke($valueHolderb2703, $this, 'initializeProxy', array(), $this->initializerddbf4) || 1) && $this->valueHolderb2703 = $valueHolderb2703;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb2703;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb2703;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
