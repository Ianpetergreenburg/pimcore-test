<?php

class Navigation_a34f8f7 extends \Pimcore\Templating\Helper\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera34f8f7 = null;
    private $initializera34f8f7 = null;
    private static $publicPropertiesa34f8f7 = array(
        
    );
    public function getName()
    {
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, 'getName', array(), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        return $this->valueHoldera34f8f7->getName();
    }
    public function buildNavigation(\Pimcore\Model\Document $activeDocument, ?\Pimcore\Model\Document $navigationRootDocument = null, ?string $htmlMenuPrefix = null, ?callable $pageCallback = null, $cache = true) : \Pimcore\Navigation\Container
    {
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, 'buildNavigation', array('activeDocument' => $activeDocument, 'navigationRootDocument' => $navigationRootDocument, 'htmlMenuPrefix' => $htmlMenuPrefix, 'pageCallback' => $pageCallback, 'cache' => $cache), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        return $this->valueHoldera34f8f7->buildNavigation($activeDocument, $navigationRootDocument, $htmlMenuPrefix, $pageCallback, $cache);
    }
    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, 'getRenderer', array('alias' => $alias), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        return $this->valueHoldera34f8f7->getRenderer($alias);
    }
    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        return $this->valueHoldera34f8f7->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }
    public function __call($method, array $arguments = array()) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        return $this->valueHoldera34f8f7->__call($method, $arguments);
    }
    public function setCharset($charset)
    {
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, 'setCharset', array('charset' => $charset), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        return $this->valueHoldera34f8f7->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, 'getCharset', array(), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        return $this->valueHoldera34f8f7->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($instance);
        $instance->initializera34f8f7 = $initializer;
        return $instance;
    }
    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;
        if (! $this->valueHoldera34f8f7) {
            $reflection = $reflection ?: new \ReflectionClass('Pimcore\\Templating\\Helper\\Navigation');
            $this->valueHoldera34f8f7 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($this);
        }
        $this->valueHoldera34f8f7->__construct($builder, $rendererLocator);
    }
    public function & __get($name)
    {
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, '__get', ['name' => $name], $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        if (isset(self::$publicPropertiesa34f8f7[$name])) {
            return $this->valueHoldera34f8f7->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera34f8f7;
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
        $targetObject = $this->valueHoldera34f8f7;
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
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera34f8f7;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHoldera34f8f7;
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
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, '__isset', array('name' => $name), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera34f8f7;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera34f8f7;
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
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, '__unset', array('name' => $name), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera34f8f7;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera34f8f7;
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
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, '__clone', array(), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        $this->valueHoldera34f8f7 = clone $this->valueHoldera34f8f7;
    }
    public function __sleep()
    {
        $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, '__sleep', array(), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
        return array('valueHoldera34f8f7');
    }
    public function __wakeup()
    {
        unset($this->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializera34f8f7 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializera34f8f7;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera34f8f7 && ($this->initializera34f8f7->__invoke($valueHoldera34f8f7, $this, 'initializeProxy', array(), $this->initializera34f8f7) || 1) && $this->valueHoldera34f8f7 = $valueHoldera34f8f7;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera34f8f7;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera34f8f7;
    }
}
