<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'scheb_two_factor.default_backup_code_manager' shared service.

return $this->services['scheb_two_factor.default_backup_code_manager'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Backup\BackupCodeManager(${($_ = isset($this->services['scheb_two_factor.persister.doctrine']) ? $this->services['scheb_two_factor.persister.doctrine'] : $this->load('getSchebTwoFactor_Persister_DoctrineService.php')) && false ?: '_'});