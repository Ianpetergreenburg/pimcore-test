<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.qzlrrlt' shared service.

return $this->services['service_locator.qzlrrlt'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('installer' => function () {
    $f = function (\Pimcore\Install\Installer $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Install\Installer']) ? $this->services['Pimcore\Install\Installer'] : $this->load('getInstallerService.php')) && false ?: '_'});
}, 'profileLocator' => function () {
    $f = function (\Pimcore\Install\Profile\ProfileLocator $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Install\Profile\ProfileLocator']) ? $this->services['Pimcore\Install\Profile\ProfileLocator'] : $this->load('getProfileLocatorService.php')) && false ?: '_'});
}));
