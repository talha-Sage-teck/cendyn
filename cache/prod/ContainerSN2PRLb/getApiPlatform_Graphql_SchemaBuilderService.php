<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_SchemaBuilderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.graphql.schema_builder' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\SchemaBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'SchemaBuilderInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'SchemaBuilder.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TypesFactoryInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TypesFactory.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TypesContainerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TypesContainer.php';

        return $container->privates['api_platform.graphql.schema_builder'] = new \ApiPlatform\Core\GraphQl\Type\SchemaBuilder(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), new \ApiPlatform\Core\GraphQl\Type\TypesFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'api_platform.graphql.iterable_type' => ['privates', 'api_platform.graphql.iterable_type', 'getApiPlatform_Graphql_IterableTypeService', true],
            'api_platform.graphql.upload_type' => ['privates', 'api_platform.graphql.upload_type', 'getApiPlatform_Graphql_UploadTypeService', true],
        ], [
            'api_platform.graphql.iterable_type' => '?',
            'api_platform.graphql.upload_type' => '?',
        ]), [0 => 'api_platform.graphql.iterable_type', 1 => 'api_platform.graphql.upload_type']), ($container->privates['api_platform.graphql.types_container'] ?? ($container->privates['api_platform.graphql.types_container'] = new \ApiPlatform\Core\GraphQl\Type\TypesContainer())), ($container->privates['api_platform.graphql.fields_builder'] ?? $container->load('getApiPlatform_Graphql_FieldsBuilderService')));
    }
}
