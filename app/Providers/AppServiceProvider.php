<?php

namespace App\Providers;

use App\Http\Clients\GitHub;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(GitHub\ClientInterface::class, function (): GitHub\Client {
            return new GitHub\Client(
                new GuzzleHttpClient([
                    'base_uri' => Config::string('services.github.base_uri'),
                    'connect_timeout' => 5,
                    'headers' => [
                        'Authorization' => sprintf('Token %s', Config::string('services.github.token')),
                    ],
                    'timeout' => 30,
                ])
            );
        });

        $this->app->extend(GitHub\ClientInterface::class, fn (GitHub\ClientInterface $github): GitHub\ClientInterface => new GitHub\CachedClient($github));
    }

    public function boot(): void {}
}
