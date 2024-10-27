<?php

namespace App\GitHub;

use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Cache;
use stdClass;

class CachedClient extends Client
{
    /**
     * Get a cached release.
     *
     * @param string $owner The repository owner
     * @param string $repo The repository name
     */
    public function latestRelease(string $owner, string $repo): stdClass
    {
        return Cache::remember(
            sprintf('latestRelease:%s:%s', $owner, $repo),
            CarbonInterval::minutes(rand(60, 120)),
            fn (): stdClass => parent::latestRelease($owner, $repo)
        );
    }
}
