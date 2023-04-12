<?php
declare(strict_types=1);

namespace AMB\OpenSearch\Factory;

use OpenSearch\Client;
use Psr\Container\ContainerInterface;

final class OpenSearchClientFactory
{
    public function __invoke(ContainerInterface $container): Client
    {
        return new Client();
    }
}
