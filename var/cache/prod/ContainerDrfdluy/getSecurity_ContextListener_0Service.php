<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.context_listener.0' shared service.

$this->services['security.context_listener.0'] = $instance = new \Symfony\Component\Security\Http\Firewall\ContextListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] : $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] = new \Pimcore\Bundle\AdminBundle\Security\User\UserProvider()) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['app.security.user_provider']) ? $this->services['app.security.user_provider'] : $this->services['app.security.user_provider'] = new \Pimcore\Security\User\ObjectUserProvider('AppBundle\\Model\\DataObject\\User')) && false ?: '_'};
}, 2), 'admin_webdav', ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->getMonolog_Logger_SecurityService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['scheb_two_factor.security.authentication.trust_resolver']) ? $this->services['scheb_two_factor.security.authentication.trust_resolver'] : $this->getSchebTwoFactor_Security_Authentication_TrustResolverService()) && false ?: '_'});

$instance->setLogoutOnUserChange(true);

return $instance;
