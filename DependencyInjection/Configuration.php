<?php

namespace FrequenceWeb\Bundle\CalendRBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();
        $builder->root('frequence_web_calend_r')
            ->children()
                ->arrayNode('event_providers')
                    ->prototype('scalar')->end()
                ->end()
            ->end()
        ;

        return $builder;
    }
}