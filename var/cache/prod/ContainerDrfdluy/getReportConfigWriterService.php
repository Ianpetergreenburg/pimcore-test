<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Config\ReportConfigWriter' shared autowired service.

return $this->services['Pimcore\Config\ReportConfigWriter'] = new \Pimcore\Config\ReportConfigWriter(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});