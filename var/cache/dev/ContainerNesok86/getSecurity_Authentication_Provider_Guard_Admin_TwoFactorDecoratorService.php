<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.guard.admin.two_factor_decorator' shared service.

return $this->services['security.authentication.provider.guard.admin.two_factor_decorator'] = new \Scheb\TwoFactorBundle\Security\Authentication\Provider\AuthenticationProviderDecorator(new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['pimcore_admin.security.admin_authenticator']) ? $this->services['pimcore_admin.security.admin_authenticator'] : $this->load('getPimcoreAdmin_Security_AdminAuthenticatorService.php')) && false ?: '_'};
}, 1), ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] : $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] = new \Pimcore\Bundle\AdminBundle\Security\User\UserProvider()) && false ?: '_'}, 'admin', ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker()) && false ?: '_'}), ${($_ = isset($this->services['scheb_two_factor.authenticated_token_handler']) ? $this->services['scheb_two_factor.authenticated_token_handler'] : $this->load('getSchebTwoFactor_AuthenticatedTokenHandlerService.php')) && false ?: '_'}, ${($_ = isset($this->services['scheb_two_factor.authentication_context_factory']) ? $this->services['scheb_two_factor.authentication_context_factory'] : $this->services['scheb_two_factor.authentication_context_factory'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextFactory('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\AuthenticationContext')) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
