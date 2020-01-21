<?php

namespace App\Providers;

use App\GitHub\CachedClient as CachedGitHubClient;
use App\GitHub\Client as GitHubClient;
use App\Providers\TelescopeServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
        }

        $this->app->bind(GitHubClient::class, function ($app) {
            return new CachedGitHubClient(config('services.github.token'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
