<?php

class TrustedCookieResponseListener_c7f9b85 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc7f9b85 = null;
    private $initializerc7f9b85 = null;
    private static $publicPropertiesc7f9b85 = array(
        
    );
    public function onKernelResponse(\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event) : void
    {
        $this->initializerc7f9b85 && ($this->initializerc7f9b85->__invoke($valueHolderc7f9b85, $this, 'onKernelResponse', array('event' => $event), $this->initializerc7f9b85) || 1) && $this->valueHolderc7f9b85 = $valueHolderc7f9b85;
        $this->valueHolderc7f9b85->onKernelResponse($event);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener $instance) {
            unset($instance->trustedTokenStorage, $instance->trustedTokenLifetime, $instance->cookieName, $instance->cookieSecure, $instance->cookieSameSite);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedCookieResponseListener')->__invoke($instance);
        $instance->initializerc7f9b85 = $initializer;
        return $instance;
    }
    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage $trustedTokenStorage, int $trustedTokenLifetime, string $cookieName, bool $cookieSecure, string $cookieSameSite)
    {
        static $reflection;
        if (! $this->valueHolderc7f9b85) {
            $reflection = $reflection ?: new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedCookieResponseListener');
            $this->valueHolderc7f9b85 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener $instance) {
            unset($instance->trustedTokenStorage, $instance->trustedTokenLifetime, $instance->cookieName, $instance->cookieSecure, $instance->cookieSameSite);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedCookieResponseListener')->__invoke($this);
        }
        $this->valueHolderc7f9b85->__construct($trustedTokenStorage, $trustedTokenLifetime, $cookieName, $cookieSecure, $cookieSameSite);
    }
    public function & __get($name)
    {
        $this->initializerc7f9b85 && ($this->initializerc7f9b85->__invoke($valueHolderc7f9b85, $this, '__get', ['name' => $name], $this->initializerc7f9b85) || 1) && $this->valueHolderc7f9b85 = $valueHolderc7f9b85;
        if (isset(self::$publicPropertiesc7f9b85[$name])) {
            return $this->valueHolderc7f9b85->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7f9b85;
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
        $targetObject = $this->valueHolderc7f9b85;
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
        $this->initializerc7f9b85 && ($this->initializerc7f9b85->__invoke($valueHolderc7f9b85, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc7f9b85) || 1) && $this->valueHolderc7f9b85 = $valueHolderc7f9b85;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7f9b85;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolderc7f9b85;
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
        $this->initializerc7f9b85 && ($this->initializerc7f9b85->__invoke($valueHolderc7f9b85, $this, '__isset', array('name' => $name), $this->initializerc7f9b85) || 1) && $this->valueHolderc7f9b85 = $valueHolderc7f9b85;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7f9b85;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc7f9b85;
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
        $this->initializerc7f9b85 && ($this->initializerc7f9b85->__invoke($valueHolderc7f9b85, $this, '__unset', array('name' => $name), $this->initializerc7f9b85) || 1) && $this->valueHolderc7f9b85 = $valueHolderc7f9b85;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7f9b85;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc7f9b85;
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
        $this->initializerc7f9b85 && ($this->initializerc7f9b85->__invoke($valueHolderc7f9b85, $this, '__clone', array(), $this->initializerc7f9b85) || 1) && $this->valueHolderc7f9b85 = $valueHolderc7f9b85;
        $this->valueHolderc7f9b85 = clone $this->valueHolderc7f9b85;
    }
    public function __sleep()
    {
        $this->initializerc7f9b85 && ($this->initializerc7f9b85->__invoke($valueHolderc7f9b85, $this, '__sleep', array(), $this->initializerc7f9b85) || 1) && $this->valueHolderc7f9b85 = $valueHolderc7f9b85;
        return array('valueHolderc7f9b85');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener $instance) {
            unset($instance->trustedTokenStorage, $instance->trustedTokenLifetime, $instance->cookieName, $instance->cookieSecure, $instance->cookieSameSite);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedCookieResponseListener')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerc7f9b85 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializerc7f9b85;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc7f9b85 && ($this->initializerc7f9b85->__invoke($valueHolderc7f9b85, $this, 'initializeProxy', array(), $this->initializerc7f9b85) || 1) && $this->valueHolderc7f9b85 = $valueHolderc7f9b85;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc7f9b85;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc7f9b85;
    }
}
