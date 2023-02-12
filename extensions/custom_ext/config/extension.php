<?php

use Symfony\Component\DependencyInjection\Container;

if (!isset($container)) {
    return;
}

/** @var Container $container */
$extensions = $container->getParameter('extensions') ?? [];

$extensions['customExt'] = [
    'remoteEntry' => './extensions/custom_ext/remoteEntry.js',
    'remoteName' => 'customExt',
    'enabled' => true
];

$container->setParameter('extensions', $extensions);
