<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDFbKQtX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDFbKQtX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDFbKQtX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDFbKQtX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDFbKQtX\App_KernelDevDebugContainer([
    'container.build_hash' => 'DFbKQtX',
    'container.build_id' => '98c5931f',
    'container.build_time' => 1683281786,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDFbKQtX');
