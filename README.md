# Budbee bundle for Symfony

[![Latest Version][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-github-actions]][link-github-actions]

Integrates the [Budbee PHP SDK](https://github.com/Setono/budbee-php-sdk) into your Symfony application.

## Installation

To install this bundle, simply run:

```shell
composer require setono/budbee-bundle
```

## Usage

```php
<?php

use Setono\Budbee\Client\ClientInterface;

require_once __DIR__ . '/../vendor/autoload.php';

final class YourService
{
    private ClientInterface $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function __invoke(): void
    {
        // do something with the client
        $boxes = $this->client->boxes()->getAvailableLockers('DK', '1159');

        // ...
    }
}

```

[ico-version]: https://poser.pugx.org/setono/budbee-bundle/v/stable
[ico-license]: https://poser.pugx.org/setono/budbee-bundle/license
[ico-github-actions]: https://github.com/Setono/BudbeeBundle/workflows/build/badge.svg

[link-packagist]: https://packagist.org/packages/setono/budbee-bundle
[link-github-actions]: https://github.com/Setono/BudbeeBundle/actions
