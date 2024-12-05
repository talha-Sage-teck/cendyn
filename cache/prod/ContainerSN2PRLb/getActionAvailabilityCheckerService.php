<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActionAvailabilityCheckerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Engine\Service\ActionAvailabilityChecker\ActionAvailabilityChecker' shared autowired service.
     *
     * @return \App\Engine\Service\ActionAvailabilityChecker\ActionAvailabilityChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ActionAvailabilityChecker'.\DIRECTORY_SEPARATOR.'ActionAvailabilityChecker.php';

        return $container->privates['App\\Engine\\Service\\ActionAvailabilityChecker\\ActionAvailabilityChecker'] = new \App\Engine\Service\ActionAvailabilityChecker\ActionAvailabilityChecker(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Engine\\LegacyHandler\\ActionAvailabilityChecker\\Checkers\\AuditActionChecker'] ?? $container->load('getAuditActionCheckerService'));
            yield 1 => ($container->privates['App\\Engine\\LegacyHandler\\ActionAvailabilityChecker\\Checkers\\DuplicateMergeActionChecker'] ?? $container->load('getDuplicateMergeActionCheckerService'));
            yield 2 => ($container->privates['App\\Engine\\Service\\ActionAvailabilityChecker\\Checkers\\ACLActionChecker'] ?? $container->load('getACLActionCheckerService'));
            yield 3 => ($container->privates['App\\Engine\\Service\\ActionAvailabilityChecker\\Checkers\\MassUpdateActionChecker'] ?? $container->load('getMassUpdateActionCheckerService'));
        }, 4));
    }
}
