<?php

class DefaultTwoFactorFormRenderer_892ae3f extends \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder892ae3f = null;
    private $initializer892ae3f = null;
    private static $publicProperties892ae3f = array(
        
    );
    public function renderForm(\Symfony\Component\HttpFoundation\Request $request, array $templateVars) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializer892ae3f && ($this->initializer892ae3f->__invoke($valueHolder892ae3f, $this, 'renderForm', array('request' => $request, 'templateVars' => $templateVars), $this->initializer892ae3f) || 1) && $this->valueHolder892ae3f = $valueHolder892ae3f;
        return $this->valueHolder892ae3f->renderForm($request, $templateVars);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer $instance) {
            unset($instance->twigEnvironment, $instance->template);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer')->__invoke($instance);
        $instance->initializer892ae3f = $initializer;
        return $instance;
    }
    public function __construct(\Twig\Environment $twigRenderer, string $template)
    {
        static $reflection;
        if (! $this->valueHolder892ae3f) {
            $reflection = $reflection ?: new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');
            $this->valueHolder892ae3f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer $instance) {
            unset($instance->twigEnvironment, $instance->template);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer')->__invoke($this);
        }
        $this->valueHolder892ae3f->__construct($twigRenderer, $template);
    }
    public function & __get($name)
    {
        $this->initializer892ae3f && ($this->initializer892ae3f->__invoke($valueHolder892ae3f, $this, '__get', ['name' => $name], $this->initializer892ae3f) || 1) && $this->valueHolder892ae3f = $valueHolder892ae3f;
        if (isset(self::$publicProperties892ae3f[$name])) {
            return $this->valueHolder892ae3f->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder892ae3f;
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
        $targetObject = $this->valueHolder892ae3f;
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
        $this->initializer892ae3f && ($this->initializer892ae3f->__invoke($valueHolder892ae3f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer892ae3f) || 1) && $this->valueHolder892ae3f = $valueHolder892ae3f;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder892ae3f;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder892ae3f;
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
        $this->initializer892ae3f && ($this->initializer892ae3f->__invoke($valueHolder892ae3f, $this, '__isset', array('name' => $name), $this->initializer892ae3f) || 1) && $this->valueHolder892ae3f = $valueHolder892ae3f;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder892ae3f;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder892ae3f;
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
        $this->initializer892ae3f && ($this->initializer892ae3f->__invoke($valueHolder892ae3f, $this, '__unset', array('name' => $name), $this->initializer892ae3f) || 1) && $this->valueHolder892ae3f = $valueHolder892ae3f;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder892ae3f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder892ae3f;
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
        $this->initializer892ae3f && ($this->initializer892ae3f->__invoke($valueHolder892ae3f, $this, '__clone', array(), $this->initializer892ae3f) || 1) && $this->valueHolder892ae3f = $valueHolder892ae3f;
        $this->valueHolder892ae3f = clone $this->valueHolder892ae3f;
    }
    public function __sleep()
    {
        $this->initializer892ae3f && ($this->initializer892ae3f->__invoke($valueHolder892ae3f, $this, '__sleep', array(), $this->initializer892ae3f) || 1) && $this->valueHolder892ae3f = $valueHolder892ae3f;
        return array('valueHolder892ae3f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer $instance) {
            unset($instance->twigEnvironment, $instance->template);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer892ae3f = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer892ae3f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer892ae3f && ($this->initializer892ae3f->__invoke($valueHolder892ae3f, $this, 'initializeProxy', array(), $this->initializer892ae3f) || 1) && $this->valueHolder892ae3f = $valueHolder892ae3f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder892ae3f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder892ae3f;
    }
}
