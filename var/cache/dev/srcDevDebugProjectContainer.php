<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY1x7c32\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY1x7c32/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerY1x7c32.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerY1x7c32\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerY1x7c32\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Y1x7c32',
    'container.build_id' => '4ea21e1d',
    'container.build_time' => 1542570741,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerY1x7c32');