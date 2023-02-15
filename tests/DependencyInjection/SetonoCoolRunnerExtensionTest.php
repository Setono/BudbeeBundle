<?php

declare(strict_types=1);

namespace Setono\BudbeeBundle\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Setono\Budbee\Client\Client;
use Setono\Budbee\Client\ClientInterface;
use Setono\BudbeeBundle\DependencyInjection\SetonoBudbeeExtension;

final class SetonoBudbeeExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions(): array
    {
        return [
            new SetonoBudbeeExtension(),
        ];
    }

    /**
     * @test
     */
    public function it_has_parameters_set(): void
    {
        $this->load([
            'api_key' => 'user',
            'api_secret' => 't0k3n',
        ]);

        $this->assertContainerBuilderHasParameter('setono_budbee.api_key', 'user');
        $this->assertContainerBuilderHasParameter('setono_budbee.api_secret', 't0k3n');
        $this->assertContainerBuilderHasService(ClientInterface::class, Client::class);
        $this->assertContainerBuilderHasService('setono_budbee.client.default', Client::class);
    }
}
