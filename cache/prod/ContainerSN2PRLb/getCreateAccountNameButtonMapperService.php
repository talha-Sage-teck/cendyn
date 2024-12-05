<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateAccountNameButtonMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\ViewDefinitions\LegacyHandler\Subpanel\CreateAccountNameButtonMapper' shared autowired service.
     *
     * @return \App\ViewDefinitions\LegacyHandler\Subpanel\CreateAccountNameButtonMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Module'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ModuleAwareRegistryItemInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'SubpanelButtonMapperInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'Subpanel'.\DIRECTORY_SEPARATOR.'CreateButtonMapper.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'Subpanel'.\DIRECTORY_SEPARATOR.'CreateAccountNameButtonMapper.php';

        return $container->privates['App\\ViewDefinitions\\LegacyHandler\\Subpanel\\CreateAccountNameButtonMapper'] = new \App\ViewDefinitions\LegacyHandler\Subpanel\CreateAccountNameButtonMapper(($container->privates['App\\FieldDefinitions\\LegacyHandler\\FieldDefinitionsHandler'] ?? $container->load('getFieldDefinitionsHandlerService')));
    }
}
