<?php

class TrustedDeviceHandler_d0544bf extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TrustedDeviceHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd0544bf = null;
    private $initializerd0544bf = null;
    private static $publicPropertiesd0544bf = array(
        
    );
    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializerd0544bf && ($this->initializerd0544bf->__invoke($valueHolderd0544bf, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializerd0544bf) || 1) && $this->valueHolderd0544bf = $valueHolderd0544bf;
        return $this->valueHolderd0544bf->beginTwoFactorAuthentication($context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TrustedDeviceHandler $instance) {
            unset($instance->authenticationHandler, $instance->trustedDeviceManager, $instance->extendTrustedToken);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler')->__invoke($instance);
        $instance->initializerd0544bf = $initializer;
        return $instance;
    }
    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceManagerInterface $trustedDeviceManager, bool $extendTrustedToken)
    {
        static $reflection;
        if (! $this->valueHolderd0544bf) {
            $reflection = $reflection ?: new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler');
            $this->valueHolderd0544bf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TrustedDeviceHandler $instance) {
            unset($instance->authenticationHandler, $instance->trustedDeviceManager, $instance->extendTrustedToken);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler')->__invoke($this);
        }
        $this->valueHolderd0544bf->__construct($authenticationHandler, $trustedDeviceManager, $extendTrustedToken);
    }
    public function & __get($name)
    {
        $this->initializerd0544bf && ($this->initializerd0544bf->__invoke($valueHolderd0544bf, $this, '__get', ['name' => $name], $this->initializerd0544bf) || 1) && $this->valueHolderd0544bf = $valueHolderd0544bf;
        if (isset(self::$publicPropertiesd0544bf[$name])) {
            return $this->valueHolderd0544bf->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0544bf;
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
        $targetObject = $this->valueHolderd0544bf;
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
        $this->initializerd0544bf && ($this->initializerd0544bf->__invoke($valueHolderd0544bf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd0544bf) || 1) && $this->valueHolderd0544bf = $valueHolderd0544bf;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0544bf;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolderd0544bf;
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
        $this->initializerd0544bf && ($this->initializerd0544bf->__invoke($valueHolderd0544bf, $this, '__isset', array('name' => $name), $this->initializerd0544bf) || 1) && $this->valueHolderd0544bf = $valueHolderd0544bf;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0544bf;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd0544bf;
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
        $this->initializerd0544bf && ($this->initializerd0544bf->__invoke($valueHolderd0544bf, $this, '__unset', array('name' => $name), $this->initializerd0544bf) || 1) && $this->valueHolderd0544bf = $valueHolderd0544bf;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0544bf;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd0544bf;
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
        $this->initializerd0544bf && ($this->initializerd0544bf->__invoke($valueHolderd0544bf, $this, '__clone', array(), $this->initializerd0544bf) || 1) && $this->valueHolderd0544bf = $valueHolderd0544bf;
        $this->valueHolderd0544bf = clone $this->valueHolderd0544bf;
    }
    public function __sleep()
    {
        $this->initializerd0544bf && ($this->initializerd0544bf->__invoke($valueHolderd0544bf, $this, '__sleep', array(), $this->initializerd0544bf) || 1) && $this->valueHolderd0544bf = $valueHolderd0544bf;
        return array('valueHolderd0544bf');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TrustedDeviceHandler $instance) {
            unset($instance->authenticationHandler, $instance->trustedDeviceManager, $instance->extendTrustedToken);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerd0544bf = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializerd0544bf;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd0544bf && ($this->initializerd0544bf->__invoke($valueHolderd0544bf, $this, 'initializeProxy', array(), $this->initializerd0544bf) || 1) && $this->valueHolderd0544bf = $valueHolderd0544bf;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd0544bf;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd0544bf;
    }
}
