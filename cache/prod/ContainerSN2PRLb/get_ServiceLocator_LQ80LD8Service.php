<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LQ80LD8Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.LQ80LD8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LQ80LD8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'session' => ['privates', '.errored..service_locator.LQ80LD8.Symfony\\Component\\HttpFoundation\\Session\\Session', NULL, 'Cannot autowire service ".service_locator.LQ80LD8": it references class "Symfony\\Component\\HttpFoundation\\Session\\Session" but no such service exists. Try changing the type-hint to "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface" instead.'],
        ], [
            'session' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
        ]);
    }
}
