<?php

class SubrequestExtension_ac4dffd extends \Pimcore\Twig\Extension\SubrequestExtension implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderac4dffd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerac4dffd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesac4dffd = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getFunctions()
    {
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, 'getFunctions', array(), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        return $this->valueHolderac4dffd->getFunctions();
    }

    /**
     * {@inheritDoc}
     */
    public function getTokenParsers()
    {
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, 'getTokenParsers', array(), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        return $this->valueHolderac4dffd->getTokenParsers();
    }

    /**
     * {@inheritDoc}
     */
    public function getNodeVisitors()
    {
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, 'getNodeVisitors', array(), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        return $this->valueHolderac4dffd->getNodeVisitors();
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, 'getFilters', array(), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        return $this->valueHolderac4dffd->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function getTests()
    {
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, 'getTests', array(), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        return $this->valueHolderac4dffd->getTests();
    }

    /**
     * {@inheritDoc}
     */
    public function getOperators()
    {
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, 'getOperators', array(), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        return $this->valueHolderac4dffd->getOperators();
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

        unset($instance->incHelper, $instance->actionHelper);

        $instance->initializerac4dffd = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Pimcore\Templating\Helper\Inc $incHelper, \Pimcore\Templating\Helper\Action $actionHelper)
    {
        static $reflection;

        if (! $this->valueHolderac4dffd) {
            $reflection = $reflection ?: new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');
            $this->valueHolderac4dffd = $reflection->newInstanceWithoutConstructor();
        unset($this->incHelper, $this->actionHelper);

        }

        $this->valueHolderac4dffd->__construct($incHelper, $actionHelper);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, '__get', ['name' => $name], $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        if (isset(self::$publicPropertiesac4dffd[$name])) {
            return $this->valueHolderac4dffd->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac4dffd;

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

        $targetObject = $this->valueHolderac4dffd;
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
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac4dffd;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderac4dffd;
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
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, '__isset', array('name' => $name), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac4dffd;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderac4dffd;
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
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, '__unset', array('name' => $name), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac4dffd;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderac4dffd;
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
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, '__clone', array(), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        $this->valueHolderac4dffd = clone $this->valueHolderac4dffd;
    }

    public function __sleep()
    {
        $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, '__sleep', array(), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;

        return array('valueHolderac4dffd');
    }

    public function __wakeup()
    {
        unset($this->incHelper, $this->actionHelper);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerac4dffd = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerac4dffd;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerac4dffd && ($this->initializerac4dffd->__invoke($valueHolderac4dffd, $this, 'initializeProxy', array(), $this->initializerac4dffd) || 1) && $this->valueHolderac4dffd = $valueHolderac4dffd;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderac4dffd;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderac4dffd;
    }


}
