<?php

class TrustedDeviceTokenStorage_fc7b3c4 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderfc7b3c4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfc7b3c4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfc7b3c4 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function hasUpdatedCookie() : bool
    {
        $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, 'hasUpdatedCookie', array(), $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;

        return $this->valueHolderfc7b3c4->hasUpdatedCookie();
    }

    /**
     * {@inheritDoc}
     */
    public function getCookieValue() : ?string
    {
        $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, 'getCookieValue', array(), $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;

        return $this->valueHolderfc7b3c4->getCookieValue();
    }

    /**
     * {@inheritDoc}
     */
    public function hasTrustedToken(string $username, string $firewall, int $version) : bool
    {
        $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, 'hasTrustedToken', array('username' => $username, 'firewall' => $firewall, 'version' => $version), $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;

        return $this->valueHolderfc7b3c4->hasTrustedToken($username, $firewall, $version);
    }

    /**
     * {@inheritDoc}
     */
    public function addTrustedToken(string $username, string $firewall, int $version) : void
    {
        $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, 'addTrustedToken', array('username' => $username, 'firewall' => $firewall, 'version' => $version), $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;

        $this->valueHolderfc7b3c4->addTrustedToken($username, $firewall, $version);
return;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage $instance) {
            unset($instance->requestStack, $instance->jwtTokenEncoder, $instance->cookieName, $instance->trustedTokenLifetime, $instance->trustedTokenList, $instance->updateCookie);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedDeviceTokenStorage')->__invoke($instance);

        $instance->initializerfc7b3c4 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\HttpFoundation\RequestStack $requestStack, \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\JwtTokenEncoder $jwtTokenEncoder, string $cookieName, int $trustedTokenLifetime)
    {
        static $reflection;

        if (! $this->valueHolderfc7b3c4) {
            $reflection = $reflection ?: new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedDeviceTokenStorage');
            $this->valueHolderfc7b3c4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage $instance) {
            unset($instance->requestStack, $instance->jwtTokenEncoder, $instance->cookieName, $instance->trustedTokenLifetime, $instance->trustedTokenList, $instance->updateCookie);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedDeviceTokenStorage')->__invoke($this);

        }

        $this->valueHolderfc7b3c4->__construct($requestStack, $jwtTokenEncoder, $cookieName, $trustedTokenLifetime);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, '__get', ['name' => $name], $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;

        if (isset(self::$publicPropertiesfc7b3c4[$name])) {
            return $this->valueHolderfc7b3c4->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc7b3c4;

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

        $targetObject = $this->valueHolderfc7b3c4;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc7b3c4;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderfc7b3c4;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, '__isset', array('name' => $name), $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc7b3c4;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfc7b3c4;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, '__unset', array('name' => $name), $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc7b3c4;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfc7b3c4;
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
        $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, '__clone', array(), $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;

        $this->valueHolderfc7b3c4 = clone $this->valueHolderfc7b3c4;
    }

    public function __sleep()
    {
        $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, '__sleep', array(), $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;

        return array('valueHolderfc7b3c4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage $instance) {
            unset($instance->requestStack, $instance->jwtTokenEncoder, $instance->cookieName, $instance->trustedTokenLifetime, $instance->trustedTokenList, $instance->updateCookie);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedDeviceTokenStorage')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerfc7b3c4 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerfc7b3c4;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerfc7b3c4 && ($this->initializerfc7b3c4->__invoke($valueHolderfc7b3c4, $this, 'initializeProxy', array(), $this->initializerfc7b3c4) || 1) && $this->valueHolderfc7b3c4 = $valueHolderfc7b3c4;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfc7b3c4;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfc7b3c4;
    }


}
