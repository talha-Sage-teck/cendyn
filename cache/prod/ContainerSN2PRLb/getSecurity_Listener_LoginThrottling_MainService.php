<?php

namespace ContainerSN2PRLb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_LoginThrottling_MainService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.login_throttling.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\LoginThrottlingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LoginThrottlingListener.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RateLimiter'.\DIRECTORY_SEPARATOR.'RequestRateLimiterInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RateLimiter'.\DIRECTORY_SEPARATOR.'AbstractRequestRateLimiter.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'RateLimiter'.\DIRECTORY_SEPARATOR.'DefaultLoginRateLimiter.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'rate-limiter'.\DIRECTORY_SEPARATOR.'RateLimiterFactory.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'rate-limiter'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'StorageInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'rate-limiter'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'CacheStorage.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'lock'.\DIRECTORY_SEPARATOR.'LockFactory.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'lock'.\DIRECTORY_SEPARATOR.'PersistingStoreInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'lock'.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'StoreFactory.php';

        $a = ($container->services['cache.rate_limiter'] ?? $container->load('getCache_RateLimiterService'));
        $b = new \Symfony\Component\Lock\LockFactory(\Symfony\Component\Lock\Store\StoreFactory::createStore($container->getEnv('LOCK_DSN')));

        $c = new \Symfony\Bridge\Monolog\Logger('lock');
        $c->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $c->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));

        $b->setLogger($c);

        return $container->privates['security.listener.login_throttling.main'] = new \Symfony\Component\Security\Http\EventListener\LoginThrottlingListener(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\Security\Http\RateLimiter\DefaultLoginRateLimiter(new \Symfony\Component\RateLimiter\RateLimiterFactory(['policy' => 'fixed_window', 'limit' => 25, 'interval' => '1 minute', 'id' => '_login_global_main'], new \Symfony\Component\RateLimiter\Storage\CacheStorage($a), $b), new \Symfony\Component\RateLimiter\RateLimiterFactory(['policy' => 'fixed_window', 'limit' => 5, 'interval' => '1 minute', 'id' => '_login_local_main'], new \Symfony\Component\RateLimiter\Storage\CacheStorage($a), $b)));
    }
}
