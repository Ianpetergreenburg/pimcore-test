<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'scheb_two_factor.provider_registry' shared service.

return $this->services['scheb_two_factor.provider_registry'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderRegistry(new RewindableGenerator(function () {
    yield 'google' => ${($_ = isset($this->services['scheb_two_factor.security.google.provider']) ? $this->services['scheb_two_factor.security.google.provider'] : $this->load('getSchebTwoFactor_Security_Google_ProviderService.php')) && false ?: '_'};
}, 1));
