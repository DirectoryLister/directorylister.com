<?php

namespace App\Http\Clients\GitHub;

use App\Http\Clients\GitHub\ClientInterface as GitHubClientInterface;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Cache;
use stdClass;

class CachedClient implements GitHubClientInterface
{
    public function __construct(
        private GitHubClientInterface $github
    ) {}

    public function latestRelease(string $owner, string $repo): stdClass
    {
        return Cache::remember(
            sprintf('latestRelease:%s:%s', $owner, $repo),
            CarbonInterval::minutes(rand(60, 120)),
            fn (): stdClass => $this->github->latestRelease($owner, $repo)
        );
    }
}
