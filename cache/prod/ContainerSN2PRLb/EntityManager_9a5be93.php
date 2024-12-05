<?php

namespace ContainerSN2PRLb;

include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbbe5e = null;
    private $initializer4f845 = null;
    private static $publicPropertiesf7d3a = [
        
    ];
    public function getConnection()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getConnection', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getMetadataFactory', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getExpressionBuilder', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'beginTransaction', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getCache', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getCache();
    }
    public function transactional($func)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'transactional', array('func' => $func), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'commit', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->commit();
    }
    public function rollback()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'rollback', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getClassMetadata', array('className' => $className), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'createQuery', array('dql' => $dql), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'createNamedQuery', array('name' => $name), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'createQueryBuilder', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'flush', array('entity' => $entity), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'clear', array('entityName' => $entityName), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->clear($entityName);
    }
    public function close()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'close', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->close();
    }
    public function persist($entity)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'persist', array('entity' => $entity), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'remove', array('entity' => $entity), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'refresh', array('entity' => $entity), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'detach', array('entity' => $entity), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'merge', array('entity' => $entity), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'contains', array('entity' => $entity), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getEventManager', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getConfiguration', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'isOpen', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getUnitOfWork', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getProxyFactory', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'initializeObject', array('obj' => $obj), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'getFilters', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'isFiltersStateClean', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'hasFilters', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return $this->valueHolderbbe5e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer4f845 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderbbe5e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbbe5e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderbbe5e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, '__get', ['name' => $name], $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        if (isset(self::$publicPropertiesf7d3a[$name])) {
            return $this->valueHolderbbe5e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbe5e;
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
        $targetObject = $this->valueHolderbbe5e;
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
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbe5e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbbe5e;
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
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, '__isset', array('name' => $name), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbe5e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbbe5e;
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
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, '__unset', array('name' => $name), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbe5e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbbe5e;
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
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, '__clone', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        $this->valueHolderbbe5e = clone $this->valueHolderbbe5e;
    }
    public function __sleep()
    {
        $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, '__sleep', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
        return array('valueHolderbbe5e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4f845 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4f845;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4f845 && ($this->initializer4f845->__invoke($valueHolderbbe5e, $this, 'initializeProxy', array(), $this->initializer4f845) || 1) && $this->valueHolderbbe5e = $valueHolderbbe5e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbbe5e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbbe5e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
