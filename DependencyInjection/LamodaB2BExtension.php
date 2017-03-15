<?php

namespace LamodaB2B\Bundle\LamodaB2BBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class LamodaB2BExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('lamoda_b2b.url',        $config['url']);
        $container->setParameter('lamoda_b2b.grant_type', $config['grant_type']);
        $container->setParameter('lamoda_b2b.auth',       $config['auth']);
        $container->setParameter('lamoda_b2b.debug',      $config['debug']);
    }
}
