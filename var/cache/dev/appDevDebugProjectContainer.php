<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNesok86\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNesok86/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNesok86.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNesok86\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerNesok86\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Nesok86',
    'container.build_id' => '53421664',
    'container.build_time' => 1532557844,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerNesok86');
