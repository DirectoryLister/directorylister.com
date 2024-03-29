<?php

namespace App\GitHub;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class CachedClient extends Client
{
    /**
     * Get a cached release.
     *
     * @param string $owner The repository owner
     * @param string $repo The repository name
     */
    public function latestRelease(string $owner, string $repo): object
    {
        return Cache::remember(
            "latestRelease:{$owner}:{$repo}",
            Carbon::now()->addHours(1)->addMinutes(rand(0, 60)),
            function () use ($owner, $repo) {
                return parent::latestRelease($owner, $repo);
            }
        );
    }
}
