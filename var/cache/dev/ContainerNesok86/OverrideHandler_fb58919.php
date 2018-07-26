<?php

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderfb58919 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfb58919 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfb58919 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializerfb58919 && ($this->initializerfb58919->__invoke($valueHolderfb58919, $this, 'getForm', array('request' => $request), $this->initializerfb58919) || 1) && $this->valueHolderfb58919 = $valueHolderfb58919;

        return $this->valueHolderfb58919->getForm($request);
    }

    /**
     * {@inheritDoc}
     */
    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerfb58919 && ($this->initializerfb58919->__invoke($valueHolderfb58919, $this, 'handleRequest', array('request' => $request), $this->initializerfb58919) || 1) && $this->valueHolderfb58919 = $valueHolderfb58919;

        return $this->valueHolderfb58919->handleRequest($request);
    }

    /**
     * {@inheritDoc}
     */
    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerfb58919 && ($this->initializerfb58919->__invoke($valueHolderfb58919, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializerfb58919) || 1) && $this->valueHolderfb58919 = $valueHolderfb58919;

        return $this->valueHolderfb58919->handleForm($form, $request);
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

        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $instance, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($instance);

        $instance->initializerfb58919 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolderfb58919) {
            $reflection = $reflection ?: new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolderfb58919 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolderfb58919->__construct($formFactory, $overrideHandlers);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerfb58919 && ($this->initializerfb58919->__invoke($valueHolderfb58919, $this, '__get', ['name' => $name], $this->initializerfb58919) || 1) && $this->valueHolderfb58919 = $valueHolderfb58919;

        if (isset(self::$publicPropertiesfb58919[$name])) {
            return $this->valueHolderfb58919->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb58919;

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

        $targetObject = $this->valueHolderfb58919;
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
        $this->initializerfb58919 && ($this->initializerfb58919->__invoke($valueHolderfb58919, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfb58919) || 1) && $this->valueHolderfb58919 = $valueHolderfb58919;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb58919;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderfb58919;
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
        $this->initializerfb58919 && ($this->initializerfb58919->__invoke($valueHolderfb58919, $this, '__isset', array('name' => $name), $this->initializerfb58919) || 1) && $this->valueHolderfb58919 = $valueHolderfb58919;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb58919;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfb58919;
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
        $this->initializerfb58919 && ($this->initializerfb58919->__invoke($valueHolderfb58919, $this, '__unset', array('name' => $name), $this->initializerfb58919) || 1) && $this->valueHolderfb58919 = $valueHolderfb58919;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb58919;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfb58919;
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
        $this->initializerfb58919 && ($this->initializerfb58919->__invoke($valueHolderfb58919, $this, '__clone', array(), $this->initializerfb58919) || 1) && $this->valueHolderfb58919 = $valueHolderfb58919;

        $this->valueHolderfb58919 = clone $this->valueHolderfb58919;
    }

    public function __sleep()
    {
        $this->initializerfb58919 && ($this->initializerfb58919->__invoke($valueHolderfb58919, $this, '__sleep', array(), $this->initializerfb58919) || 1) && $this->valueHolderfb58919 = $valueHolderfb58919;

        return array('valueHolderfb58919');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerfb58919 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerfb58919;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerfb58919 && ($this->initializerfb58919->__invoke($valueHolderfb58919, $this, 'initializeProxy', array(), $this->initializerfb58919) || 1) && $this->valueHolderfb58919 = $valueHolderfb58919;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfb58919;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfb58919;
    }


}
