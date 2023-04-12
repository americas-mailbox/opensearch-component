<?php
declare(strict_types=1);

namespace AMB\OpenSearch;

use OpenSearch\Client;

final class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies(): array
    {
        return [
            'factories' => [
                Client::class => OpenSearchClientFactory::class,
            ],
        ];
    }
}
