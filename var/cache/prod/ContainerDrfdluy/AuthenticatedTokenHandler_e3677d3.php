<?php

class AuthenticatedTokenHandler_e3677d3 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere3677d3 = null;
    private $initializere3677d3 = null;
    private static $publicPropertiese3677d3 = array(
        
    );
    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializere3677d3 && ($this->initializere3677d3->__invoke($valueHoldere3677d3, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializere3677d3) || 1) && $this->valueHoldere3677d3 = $valueHoldere3677d3;
        return $this->valueHoldere3677d3->beginTwoFactorAuthentication($context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($instance);
        $instance->initializere3677d3 = $initializer;
        return $instance;
    }
    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, array $supportedTokens)
    {
        static $reflection;
        if (! $this->valueHoldere3677d3) {
            $reflection = $reflection ?: new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');
            $this->valueHoldere3677d3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($this);
        }
        $this->valueHoldere3677d3->__construct($authenticationHandler, $supportedTokens);
    }
    public function & __get($name)
    {
        $this->initializere3677d3 && ($this->initializere3677d3->__invoke($valueHoldere3677d3, $this, '__get', ['name' => $name], $this->initializere3677d3) || 1) && $this->valueHoldere3677d3 = $valueHoldere3677d3;
        if (isset(self::$publicPropertiese3677d3[$name])) {
            return $this->valueHoldere3677d3->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3677d3;
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
        $targetObject = $this->valueHoldere3677d3;
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
        $this->initializere3677d3 && ($this->initializere3677d3->__invoke($valueHoldere3677d3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3677d3) || 1) && $this->valueHoldere3677d3 = $valueHoldere3677d3;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3677d3;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHoldere3677d3;
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
        $this->initializere3677d3 && ($this->initializere3677d3->__invoke($valueHoldere3677d3, $this, '__isset', array('name' => $name), $this->initializere3677d3) || 1) && $this->valueHoldere3677d3 = $valueHoldere3677d3;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3677d3;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere3677d3;
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
        $this->initializere3677d3 && ($this->initializere3677d3->__invoke($valueHoldere3677d3, $this, '__unset', array('name' => $name), $this->initializere3677d3) || 1) && $this->valueHoldere3677d3 = $valueHoldere3677d3;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3677d3;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere3677d3;
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
        $this->initializere3677d3 && ($this->initializere3677d3->__invoke($valueHoldere3677d3, $this, '__clone', array(), $this->initializere3677d3) || 1) && $this->valueHoldere3677d3 = $valueHoldere3677d3;
        $this->valueHoldere3677d3 = clone $this->valueHoldere3677d3;
    }
    public function __sleep()
    {
        $this->initializere3677d3 && ($this->initializere3677d3->__invoke($valueHoldere3677d3, $this, '__sleep', array(), $this->initializere3677d3) || 1) && $this->valueHoldere3677d3 = $valueHoldere3677d3;
        return array('valueHoldere3677d3');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializere3677d3 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializere3677d3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializere3677d3 && ($this->initializere3677d3->__invoke($valueHoldere3677d3, $this, 'initializeProxy', array(), $this->initializere3677d3) || 1) && $this->valueHoldere3677d3 = $valueHoldere3677d3;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere3677d3;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere3677d3;
    }
}
