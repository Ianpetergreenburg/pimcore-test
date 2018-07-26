<?php

class IpWhitelistHandler_06fe2b0 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder06fe2b0 = null;
    private $initializer06fe2b0 = null;
    private static $publicProperties06fe2b0 = array(
        
    );
    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializer06fe2b0 && ($this->initializer06fe2b0->__invoke($valueHolder06fe2b0, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializer06fe2b0) || 1) && $this->valueHolder06fe2b0 = $valueHolder06fe2b0;
        return $this->valueHolder06fe2b0->beginTwoFactorAuthentication($context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler $instance) {
            unset($instance->authenticationHandler, $instance->ipWhitelist);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler')->__invoke($instance);
        $instance->initializer06fe2b0 = $initializer;
        return $instance;
    }
    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, array $ipWhitelist)
    {
        static $reflection;
        if (! $this->valueHolder06fe2b0) {
            $reflection = $reflection ?: new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');
            $this->valueHolder06fe2b0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler $instance) {
            unset($instance->authenticationHandler, $instance->ipWhitelist);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler')->__invoke($this);
        }
        $this->valueHolder06fe2b0->__construct($authenticationHandler, $ipWhitelist);
    }
    public function & __get($name)
    {
        $this->initializer06fe2b0 && ($this->initializer06fe2b0->__invoke($valueHolder06fe2b0, $this, '__get', ['name' => $name], $this->initializer06fe2b0) || 1) && $this->valueHolder06fe2b0 = $valueHolder06fe2b0;
        if (isset(self::$publicProperties06fe2b0[$name])) {
            return $this->valueHolder06fe2b0->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06fe2b0;
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
        $targetObject = $this->valueHolder06fe2b0;
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
        $this->initializer06fe2b0 && ($this->initializer06fe2b0->__invoke($valueHolder06fe2b0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer06fe2b0) || 1) && $this->valueHolder06fe2b0 = $valueHolder06fe2b0;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06fe2b0;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder06fe2b0;
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
        $this->initializer06fe2b0 && ($this->initializer06fe2b0->__invoke($valueHolder06fe2b0, $this, '__isset', array('name' => $name), $this->initializer06fe2b0) || 1) && $this->valueHolder06fe2b0 = $valueHolder06fe2b0;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06fe2b0;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder06fe2b0;
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
        $this->initializer06fe2b0 && ($this->initializer06fe2b0->__invoke($valueHolder06fe2b0, $this, '__unset', array('name' => $name), $this->initializer06fe2b0) || 1) && $this->valueHolder06fe2b0 = $valueHolder06fe2b0;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06fe2b0;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder06fe2b0;
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
        $this->initializer06fe2b0 && ($this->initializer06fe2b0->__invoke($valueHolder06fe2b0, $this, '__clone', array(), $this->initializer06fe2b0) || 1) && $this->valueHolder06fe2b0 = $valueHolder06fe2b0;
        $this->valueHolder06fe2b0 = clone $this->valueHolder06fe2b0;
    }
    public function __sleep()
    {
        $this->initializer06fe2b0 && ($this->initializer06fe2b0->__invoke($valueHolder06fe2b0, $this, '__sleep', array(), $this->initializer06fe2b0) || 1) && $this->valueHolder06fe2b0 = $valueHolder06fe2b0;
        return array('valueHolder06fe2b0');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler $instance) {
            unset($instance->authenticationHandler, $instance->ipWhitelist);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer06fe2b0 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer06fe2b0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer06fe2b0 && ($this->initializer06fe2b0->__invoke($valueHolder06fe2b0, $this, 'initializeProxy', array(), $this->initializer06fe2b0) || 1) && $this->valueHolder06fe2b0 = $valueHolder06fe2b0;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder06fe2b0;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder06fe2b0;
    }
}
