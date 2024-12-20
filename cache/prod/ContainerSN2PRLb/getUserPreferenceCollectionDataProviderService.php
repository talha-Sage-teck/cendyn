<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserPreferenceCollectionDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\UserPreferences\DataProvider\UserPreferenceCollectionDataProvider' shared autowired service.
     *
     * @return \App\UserPreferences\DataProvider\UserPreferenceCollectionDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'UserPreferences'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'UserPreferenceCollectionDataProvider.php';

        return $container->privates['App\\UserPreferences\\DataProvider\\UserPreferenceCollectionDataProvider'] = new \App\UserPreferences\DataProvider\UserPreferenceCollectionDataProvider(($container->privates['App\\UserPreferences\\LegacyHandler\\UserPreferenceHandler'] ?? $container->getUserPreferenceHandlerService()));
    }
}
