<?php

namespace ContainerRMJPLEC;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc58d7 = null;
    private $initializer98564 = null;
    private static $publicPropertiesa4008 = [
        
    ];
    public function getConnection()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getConnection', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getMetadataFactory', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getExpressionBuilder', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'beginTransaction', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getCache', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getCache();
    }
    public function transactional($func)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'transactional', array('func' => $func), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->transactional($func);
    }
    public function commit()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'commit', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->commit();
    }
    public function rollback()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'rollback', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getClassMetadata', array('className' => $className), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'createQuery', array('dql' => $dql), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'createNamedQuery', array('name' => $name), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'createQueryBuilder', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'flush', array('entity' => $entity), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'clear', array('entityName' => $entityName), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->clear($entityName);
    }
    public function close()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'close', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->close();
    }
    public function persist($entity)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'persist', array('entity' => $entity), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'remove', array('entity' => $entity), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'refresh', array('entity' => $entity), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'detach', array('entity' => $entity), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'merge', array('entity' => $entity), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'contains', array('entity' => $entity), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getEventManager', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getConfiguration', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'isOpen', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getUnitOfWork', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getProxyFactory', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'initializeObject', array('obj' => $obj), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'getFilters', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'isFiltersStateClean', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'hasFilters', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return $this->valueHolderc58d7->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer98564 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderc58d7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc58d7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc58d7->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, '__get', ['name' => $name], $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        if (isset(self::$publicPropertiesa4008[$name])) {
            return $this->valueHolderc58d7->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc58d7;
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
        $targetObject = $this->valueHolderc58d7;
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
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc58d7;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc58d7;
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
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, '__isset', array('name' => $name), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc58d7;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc58d7;
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
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, '__unset', array('name' => $name), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc58d7;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc58d7;
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
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, '__clone', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        $this->valueHolderc58d7 = clone $this->valueHolderc58d7;
    }
    public function __sleep()
    {
        $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, '__sleep', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
        return array('valueHolderc58d7');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer98564 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer98564;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer98564 && ($this->initializer98564->__invoke($valueHolderc58d7, $this, 'initializeProxy', array(), $this->initializer98564) || 1) && $this->valueHolderc58d7 = $valueHolderc58d7;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc58d7;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc58d7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
