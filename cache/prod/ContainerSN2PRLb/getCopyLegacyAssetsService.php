<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCopyLegacyAssetsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\Command\CopyLegacyAssets' shared autowired service.
     *
     * @return \App\Install\Command\CopyLegacyAssets
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CopyLegacyAssets.php';

        $container->privates['App\\Install\\Command\\CopyLegacyAssets'] = $instance = new \App\Install\Command\CopyLegacyAssets(NULL, \dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), $container->parameters['legacy.copy_asset_paths']);

        $instance->setName('scrm:copy-legacy-assets');

        return $instance;
    }
}
