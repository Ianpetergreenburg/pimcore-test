<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Pimcore\Bundle\InstallBundle\Command\CopyProfileFilesCommand' shared autowired service.

return $this->services['Pimcore\Bundle\InstallBundle\Command\CopyProfileFilesCommand'] = new \Pimcore\Bundle\InstallBundle\Command\CopyProfileFilesCommand(${($_ = isset($this->services['Pimcore\Install\Profile\ProfileLocator']) ? $this->services['Pimcore\Install\Profile\ProfileLocator'] : $this->load('getProfileLocatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Install\Profile\FileInstaller']) ? $this->services['Pimcore\Install\Profile\FileInstaller'] : $this->load('getFileInstallerService.php')) && false ?: '_'});