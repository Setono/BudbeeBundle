<?php

declare(strict_types=1);

namespace Setono\BudbeeBundle;

use Setono\BudbeeBundle\DependencyInjection\SetonoBudbeeExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SetonoBudbeeBundle extends Bundle
{
    public function getContainerExtension(): SetonoBudbeeExtension
    {
        return new SetonoBudbeeExtension();
    }
}
