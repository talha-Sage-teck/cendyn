<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteRecordsBulkActionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\Service\BulkActions\DeleteRecordsBulkAction' shared autowired service.
     *
     * @return \App\Process\Service\BulkActions\DeleteRecordsBulkAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'BulkActions'.\DIRECTORY_SEPARATOR.'DeleteRecordsBulkAction.php';

        $container->privates['App\\Process\\Service\\BulkActions\\DeleteRecordsBulkAction'] = $instance = new \App\Process\Service\BulkActions\DeleteRecordsBulkAction(($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->privates['App\\Data\\LegacyHandler\\RecordDeletionHandler'] ?? $container->load('getRecordDeletionHandlerService')));

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}
