<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pimcore.data_object.import.operator.factory.locale_switcher' shared autowired service.

return $this->services['pimcore.data_object.import.operator.factory.locale_switcher'] = new \Pimcore\DataObject\Import\ColumnConfig\Operator\Factory\LocaleSwitcherFactory(${($_ = isset($this->services['Pimcore\Localization\LocaleService']) ? $this->services['Pimcore\Localization\LocaleService'] : $this->load('getLocaleServiceService.php')) && false ?: '_'});