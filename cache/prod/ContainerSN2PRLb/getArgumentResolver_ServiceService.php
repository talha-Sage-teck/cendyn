<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'ServiceValueResolver.php';

        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Authentication\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Authentication\\Controller\\SecurityController::nativeAuthLogin' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Authentication\\Controller\\SecurityController::nativeAuthSessionStatus' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Authentication\\Controller\\SecurityController::sessionStatus' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Engine\\Controller\\IndexController::index' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Engine\\Controller\\IndexController::loggedOut' => ['privates', '.service_locator.LQ80LD8', 'get_ServiceLocator_LQ80LD8Service', true],
            'App\\Engine\\Controller\\IndexController::nativeAuth' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Authentication\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Authentication\\Controller\\SecurityController:nativeAuthLogin' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Authentication\\Controller\\SecurityController:nativeAuthSessionStatus' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Authentication\\Controller\\SecurityController:sessionStatus' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Engine\\Controller\\IndexController:index' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Engine\\Controller\\IndexController:loggedOut' => ['privates', '.service_locator.LQ80LD8', 'get_ServiceLocator_LQ80LD8Service', true],
            'App\\Engine\\Controller\\IndexController:nativeAuth' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Authentication\\Controller\\SecurityController::login' => '?',
            'App\\Authentication\\Controller\\SecurityController::nativeAuthLogin' => '?',
            'App\\Authentication\\Controller\\SecurityController::nativeAuthSessionStatus' => '?',
            'App\\Authentication\\Controller\\SecurityController::sessionStatus' => '?',
            'App\\Engine\\Controller\\IndexController::index' => '?',
            'App\\Engine\\Controller\\IndexController::loggedOut' => '?',
            'App\\Engine\\Controller\\IndexController::nativeAuth' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Authentication\\Controller\\SecurityController:login' => '?',
            'App\\Authentication\\Controller\\SecurityController:nativeAuthLogin' => '?',
            'App\\Authentication\\Controller\\SecurityController:nativeAuthSessionStatus' => '?',
            'App\\Authentication\\Controller\\SecurityController:sessionStatus' => '?',
            'App\\Engine\\Controller\\IndexController:index' => '?',
            'App\\Engine\\Controller\\IndexController:loggedOut' => '?',
            'App\\Engine\\Controller\\IndexController:nativeAuth' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}
