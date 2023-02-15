<?php

declare(strict_types=1);

namespace Setono\BudbeeBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

final class SetonoBudbeeExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        /**
         * @psalm-suppress PossiblyNullArgument
         *
         * @var array{api_key: string, api_secret: string} $config
         */
        $config = $this->processConfiguration($this->getConfiguration([], $container), $configs);
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

        $container->setParameter('setono_budbee.api_key', $config['api_key']);
        $container->setParameter('setono_budbee.api_secret', $config['api_secret']);

        $loader->load('services.xml');
    }

    public function getAlias(): string
    {
        return 'setono_budbee';
    }
}
