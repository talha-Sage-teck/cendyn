<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_GlobalClearerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'CacheClearerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'Psr6CacheClearer.php';

        return $container->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($container->services['cache.app'] ?? $container->load('getCache_AppService')), 'cache.system' => ($container->services['cache.system'] ?? $container->load('getCache_SystemService')), 'cache.validator' => ($container->privates['cache.validator'] ?? $container->getCache_ValidatorService()), 'cache.serializer' => ($container->privates['cache.serializer'] ?? $container->getCache_SerializerService()), 'cache.annotations' => ($container->privates['cache.annotations'] ?? $container->load('getCache_AnnotationsService')), 'cache.property_info' => ($container->privates['cache.property_info'] ?? $container->getCache_PropertyInfoService()), 'doctrine.result_cache_pool' => ($container->privates['doctrine.result_cache_pool'] ?? $container->getDoctrine_ResultCachePoolService()), 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool'] ?? $container->getDoctrine_SystemCachePoolService()), 'cache.property_access' => ($container->privates['cache.property_access'] ?? $container->getCache_PropertyAccessService()), 'cache.rate_limiter' => ($container->services['cache.rate_limiter'] ?? $container->load('getCache_RateLimiterService')), 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? $container->getCache_SecurityExpressionLanguageService()), 'api_platform.cache.route_name_resolver' => ($container->privates['api_platform.cache.route_name_resolver'] ?? $container->getApiPlatform_Cache_RouteNameResolverService()), 'api_platform.cache.identifiers_extractor' => ($container->privates['api_platform.cache.identifiers_extractor'] ?? $container->getApiPlatform_Cache_IdentifiersExtractorService()), 'api_platform.cache.subresource_operation_factory' => ($container->privates['api_platform.cache.subresource_operation_factory'] ?? $container->getApiPlatform_Cache_SubresourceOperationFactoryService()), 'api_platform.cache.metadata.resource' => ($container->privates['api_platform.cache.metadata.resource'] ?? $container->getApiPlatform_Cache_Metadata_ResourceService()), 'api_platform.cache.metadata.property' => ($container->privates['api_platform.cache.metadata.property'] ?? $container->getApiPlatform_Cache_Metadata_PropertyService()), 'api_platform.graphql.cache.subscription' => ($container->privates['api_platform.graphql.cache.subscription'] ?? $container->load('getApiPlatform_Graphql_Cache_SubscriptionService')), 'shivas_versioning.cache.version' => ($container->privates['shivas_versioning.cache.version'] ?? $container->load('getShivasVersioning_Cache_VersionService'))]);
    }
}
