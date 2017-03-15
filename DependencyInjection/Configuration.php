<?php

namespace LamodaB2B\Bundle\LamodaB2BBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('lamoda_b2_b');

        foreach (['url', 'grant_type'] as $node) {
            $rootNode->children()
                ->scalarNode($node)
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end();
        }

        $rootNode
            ->children()
                ->arrayNode('auth')
                    ->useAttributeAsKey('key')
                    ->prototype('array')
                    ->children()
                        ->scalarNode('client_id')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('client_secret')->isRequired()->cannotBeEmpty()->end()
                    ->end()
                ->end()
            ->end();

        $rootNode->children()
            ->scalarNode('debug')
                ->defaultFalse()
            ->end();

        return $treeBuilder;
    }
}
