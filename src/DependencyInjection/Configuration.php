<?php

declare(strict_types=1);

namespace Setono\BudbeeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('setono_budbee');
        $rootNode = $treeBuilder->getRootNode();

        /** @psalm-suppress MixedMethodCall, PossiblyUndefinedMethod, PossiblyNullReference, UndefinedInterfaceMethod */
        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('api_key')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('api_secret')->isRequired()->cannotBeEmpty()->end()
        ;

        return $treeBuilder;
    }
}
