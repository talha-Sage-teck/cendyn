<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditActionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\Service\RecordActions\EditAction' shared autowired service.
     *
     * @return \App\Process\Service\RecordActions\EditAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'RecordActions'.\DIRECTORY_SEPARATOR.'EditAction.php';

        return $container->privates['App\\Process\\Service\\RecordActions\\EditAction'] = new \App\Process\Service\RecordActions\EditAction(($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()));
    }
}
