<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'app.security.user_provider' shared autowired service.

return $this->services['app.security.user_provider'] = new \Pimcore\Security\User\ObjectUserProvider('AppBundle\\Model\\DataObject\\User');