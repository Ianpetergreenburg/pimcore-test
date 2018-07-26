<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.encoder_factory' shared autowired service.

return $this->services['security.encoder_factory'] = new \Pimcore\Security\Encoder\EncoderFactory(new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array()), array('Pimcore\\Bundle\\AdminBundle\\Security\\User\\User' => ${($_ = isset($this->services['pimcore_admin.security.password_encoder_factory']) ? $this->services['pimcore_admin.security.password_encoder_factory'] : $this->services['pimcore_admin.security.password_encoder_factory'] = new \Pimcore\Security\Encoder\Factory\UserAwareEncoderFactory('Pimcore\\Bundle\\AdminBundle\\Security\\Encoder\\AdminPasswordEncoder')) && false ?: '_'}, 'AppBundle\\Model\\DataObject\\User' => new \Pimcore\Security\Encoder\Factory\UserAwareEncoderFactory('Pimcore\\Security\\Encoder\\PasswordFieldEncoder', array(0 => 'password'))));
