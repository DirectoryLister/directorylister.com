<?php

namespace App\Http\Clients\GitHub;

use stdClass;

interface ClientInterface
{
    /**
     * Get the latest release for a repository.
     *
     * @param string $owner The repository owner
     * @param string $repo The repository name
     */
    public function latestRelease(string $owner, string $repo): stdClass;
}
