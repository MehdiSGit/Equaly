<?php

namespace ContainerZakWY5x;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8ab0f = null;
    private $initializerd62c0 = null;
    private static $publicProperties7a210 = [
        
    ];
    public function getConnection()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getConnection', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getMetadataFactory', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getExpressionBuilder', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'beginTransaction', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getCache', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'transactional', array('func' => $func), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->transactional($func);
    }
    public function commit()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'commit', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->commit();
    }
    public function rollback()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'rollback', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getClassMetadata', array('className' => $className), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'createQuery', array('dql' => $dql), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'createNamedQuery', array('name' => $name), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'createQueryBuilder', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'flush', array('entity' => $entity), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'clear', array('entityName' => $entityName), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->clear($entityName);
    }
    public function close()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'close', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->close();
    }
    public function persist($entity)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'persist', array('entity' => $entity), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'remove', array('entity' => $entity), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'refresh', array('entity' => $entity), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'detach', array('entity' => $entity), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'merge', array('entity' => $entity), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'contains', array('entity' => $entity), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getEventManager', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getConfiguration', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'isOpen', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getUnitOfWork', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getProxyFactory', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'initializeObject', array('obj' => $obj), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'getFilters', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'isFiltersStateClean', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'hasFilters', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return $this->valueHolder8ab0f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd62c0 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8ab0f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ab0f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8ab0f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, '__get', ['name' => $name], $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        if (isset(self::$publicProperties7a210[$name])) {
            return $this->valueHolder8ab0f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ab0f;
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
        $targetObject = $this->valueHolder8ab0f;
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
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ab0f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8ab0f;
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
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, '__isset', array('name' => $name), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ab0f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8ab0f;
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
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, '__unset', array('name' => $name), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ab0f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8ab0f;
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
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, '__clone', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        $this->valueHolder8ab0f = clone $this->valueHolder8ab0f;
    }
    public function __sleep()
    {
        $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, '__sleep', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
        return array('valueHolder8ab0f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd62c0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd62c0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd62c0 && ($this->initializerd62c0->__invoke($valueHolder8ab0f, $this, 'initializeProxy', array(), $this->initializerd62c0) || 1) && $this->valueHolder8ab0f = $valueHolder8ab0f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ab0f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ab0f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
