<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 2019-08-26
 * Time: 18:16
 */

namespace Symfony\Bundle\LiquidBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('liquid');
        $rootNode = $treeBuilder->getRootNode();
        $rootNode
            ->children()
            ->scalarNode('exception_controller')
            ->defaultNull()
            ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}