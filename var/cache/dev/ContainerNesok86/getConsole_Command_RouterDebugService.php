<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.router_debug' shared service.

$this->services['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->getCmfRouting_RouterService()) && false ?: '_'});

$instance->setName('debug:router');

return $instance;