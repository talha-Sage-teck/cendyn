<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConvertPMSProfileActionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Extension\custom_ext\modules\CB2B_PMSProfiles\Service\ConvertPMSProfileAction' shared autowired service.
     *
     * @return \App\Extension\custom_ext\modules\CB2B_PMSProfiles\Service\ConvertPMSProfileAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'extensions'.\DIRECTORY_SEPARATOR.'custom_ext'.\DIRECTORY_SEPARATOR.'modules'.\DIRECTORY_SEPARATOR.'CB2B_PMSProfiles'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ConvertPMSProfileAction.php';

        return $container->privates['App\\Extension\\custom_ext\\modules\\CB2B_PMSProfiles\\Service\\ConvertPMSProfileAction'] = new \App\Extension\custom_ext\modules\CB2B_PMSProfiles\Service\ConvertPMSProfileAction(($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->privates['App\\Data\\LegacyHandler\\RecordHandler'] ?? $container->load('getRecordHandlerService')));
    }
}