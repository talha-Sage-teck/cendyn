<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListDataQueryHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Data\LegacyHandler\ListDataQueryHandler' shared autowired service.
     *
     * @return \App\Data\LegacyHandler\ListDataQueryHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'BaseListDataHandler.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'ListDataQueryHandler.php';

        return $container->privates['App\\Data\\LegacyHandler\\ListDataQueryHandler'] = new \App\Data\LegacyHandler\ListDataQueryHandler(($container->privates['App\\Data\\LegacyHandler\\FilterMapper\\LegacyFilterMapper'] ?? $container->load('getLegacyFilterMapperService')), ($container->privates['App\\Data\\LegacyHandler\\RecordMapper'] ?? $container->load('getRecordMapperService')));
    }
}