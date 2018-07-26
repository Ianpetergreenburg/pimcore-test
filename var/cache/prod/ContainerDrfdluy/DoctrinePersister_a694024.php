<?php

class DoctrinePersister_a694024 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera694024 = null;
    private $initializera694024 = null;
    private static $publicPropertiesa694024 = array(
        
    );
    public function persist($user) : void
    {
        $this->initializera694024 && ($this->initializera694024->__invoke($valueHoldera694024, $this, 'persist', array('user' => $user), $this->initializera694024) || 1) && $this->valueHoldera694024 = $valueHoldera694024;
        $this->valueHoldera694024->persist($user);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $instance, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($instance);
        $instance->initializera694024 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Common\Persistence\ObjectManager $om)
    {
        static $reflection;
        if (! $this->valueHoldera694024) {
            $reflection = $reflection ?: new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
            $this->valueHoldera694024 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
        }
        $this->valueHoldera694024->__construct($om);
    }
    public function & __get($name)
    {
        $this->initializera694024 && ($this->initializera694024->__invoke($valueHoldera694024, $this, '__get', ['name' => $name], $this->initializera694024) || 1) && $this->valueHoldera694024 = $valueHoldera694024;
        if (isset(self::$publicPropertiesa694024[$name])) {
            return $this->valueHoldera694024->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera694024;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHoldera694024;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializera694024 && ($this->initializera694024->__invoke($valueHoldera694024, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera694024) || 1) && $this->valueHoldera694024 = $valueHoldera694024;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera694024;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHoldera694024;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializera694024 && ($this->initializera694024->__invoke($valueHoldera694024, $this, '__isset', array('name' => $name), $this->initializera694024) || 1) && $this->valueHoldera694024 = $valueHoldera694024;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera694024;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera694024;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializera694024 && ($this->initializera694024->__invoke($valueHoldera694024, $this, '__unset', array('name' => $name), $this->initializera694024) || 1) && $this->valueHoldera694024 = $valueHoldera694024;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera694024;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera694024;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializera694024 && ($this->initializera694024->__invoke($valueHoldera694024, $this, '__clone', array(), $this->initializera694024) || 1) && $this->valueHoldera694024 = $valueHoldera694024;
        $this->valueHoldera694024 = clone $this->valueHoldera694024;
    }
    public function __sleep()
    {
        $this->initializera694024 && ($this->initializera694024->__invoke($valueHoldera694024, $this, '__sleep', array(), $this->initializera694024) || 1) && $this->valueHoldera694024 = $valueHoldera694024;
        return array('valueHoldera694024');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializera694024 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializera694024;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera694024 && ($this->initializera694024->__invoke($valueHoldera694024, $this, 'initializeProxy', array(), $this->initializera694024) || 1) && $this->valueHoldera694024 = $valueHoldera694024;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera694024;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera694024;
    }
}
