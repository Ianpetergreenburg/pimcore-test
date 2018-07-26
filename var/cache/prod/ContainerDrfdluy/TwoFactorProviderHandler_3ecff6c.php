<?php

class TwoFactorProviderHandler_3ecff6c extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3ecff6c = null;
    private $initializer3ecff6c = null;
    private static $publicProperties3ecff6c = array(
        
    );
    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializer3ecff6c && ($this->initializer3ecff6c->__invoke($valueHolder3ecff6c, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializer3ecff6c) || 1) && $this->valueHolder3ecff6c = $valueHolder3ecff6c;
        return $this->valueHolder3ecff6c->beginTwoFactorAuthentication($context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler $instance) {
            unset($instance->providerRegistry);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler')->__invoke($instance);
        $instance->initializer3ecff6c = $initializer;
        return $instance;
    }
    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderRegistry $providerRegistry)
    {
        static $reflection;
        if (! $this->valueHolder3ecff6c) {
            $reflection = $reflection ?: new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');
            $this->valueHolder3ecff6c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler $instance) {
            unset($instance->providerRegistry);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler')->__invoke($this);
        }
        $this->valueHolder3ecff6c->__construct($providerRegistry);
    }
    public function & __get($name)
    {
        $this->initializer3ecff6c && ($this->initializer3ecff6c->__invoke($valueHolder3ecff6c, $this, '__get', ['name' => $name], $this->initializer3ecff6c) || 1) && $this->valueHolder3ecff6c = $valueHolder3ecff6c;
        if (isset(self::$publicProperties3ecff6c[$name])) {
            return $this->valueHolder3ecff6c->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3ecff6c;
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
        $targetObject = $this->valueHolder3ecff6c;
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
        $this->initializer3ecff6c && ($this->initializer3ecff6c->__invoke($valueHolder3ecff6c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3ecff6c) || 1) && $this->valueHolder3ecff6c = $valueHolder3ecff6c;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3ecff6c;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder3ecff6c;
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
        $this->initializer3ecff6c && ($this->initializer3ecff6c->__invoke($valueHolder3ecff6c, $this, '__isset', array('name' => $name), $this->initializer3ecff6c) || 1) && $this->valueHolder3ecff6c = $valueHolder3ecff6c;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3ecff6c;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder3ecff6c;
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
        $this->initializer3ecff6c && ($this->initializer3ecff6c->__invoke($valueHolder3ecff6c, $this, '__unset', array('name' => $name), $this->initializer3ecff6c) || 1) && $this->valueHolder3ecff6c = $valueHolder3ecff6c;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3ecff6c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder3ecff6c;
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
        $this->initializer3ecff6c && ($this->initializer3ecff6c->__invoke($valueHolder3ecff6c, $this, '__clone', array(), $this->initializer3ecff6c) || 1) && $this->valueHolder3ecff6c = $valueHolder3ecff6c;
        $this->valueHolder3ecff6c = clone $this->valueHolder3ecff6c;
    }
    public function __sleep()
    {
        $this->initializer3ecff6c && ($this->initializer3ecff6c->__invoke($valueHolder3ecff6c, $this, '__sleep', array(), $this->initializer3ecff6c) || 1) && $this->valueHolder3ecff6c = $valueHolder3ecff6c;
        return array('valueHolder3ecff6c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler $instance) {
            unset($instance->providerRegistry);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer3ecff6c = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer3ecff6c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer3ecff6c && ($this->initializer3ecff6c->__invoke($valueHolder3ecff6c, $this, 'initializeProxy', array(), $this->initializer3ecff6c) || 1) && $this->valueHolder3ecff6c = $valueHolder3ecff6c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3ecff6c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3ecff6c;
    }
}
