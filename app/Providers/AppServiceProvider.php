<?php

namespace App\Providers;

use App\GitHub\CachedClient as CachedGitHubClient;
use App\GitHub\Client as GitHubClient;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /** Register any application services. */
    public function register(): void
    {
        $this->app->bind(GitHubClient::class, function ($app) {
            return new CachedGitHubClient(config('services.github.token'));
        });
    }

    /** Bootstrap any application services. */
    public function boot(): void
    {
    }
}
