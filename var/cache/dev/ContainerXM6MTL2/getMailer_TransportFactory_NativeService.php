<?php

namespace ContainerXM6MTL2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_NativeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.native' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NativeTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/NativeTransportFactory.php';

        return new \Symfony\Component\Mailer\Transport\NativeTransportFactory(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), NULL, ($container->privates['logger'] ?? $container->getLoggerService()));
    }
}