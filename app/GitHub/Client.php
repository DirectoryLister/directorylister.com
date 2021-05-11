<?php

namespace App\GitHub;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;

class Client
{
    /** @var GuzzleHttpClient The HTTP client */
    protected $client;

    /**
     * Create a new GitHub Client instance.
     *
     * @param string $authToken GitHub OAuth token
     * @param array $config GuzzleHttp Client config
     */
    public function __construct(string $authToken, array $config = [])
    {
        $this->client = new GuzzleHttpClient(array_replace_recursive([
            'base_uri' => config('services.github.base_uri'),
            'connect_timeout' => 5,
            'headers' => [
                'Authorization' => "Token {$authToken}",
            ],
            'timeout' => 30,
        ], $config));
    }

    /**
     * Get the latest release for a repository.
     *
     * @param string $owner The repository owner
     * @param string $repo The repository name
     */
    public function latestRelease(string $owner, string $repo): object
    {
        try {
            $response = $this->client->get("repos/{$owner}/{$repo}/releases/latest");
        } catch (ClientException $exception) {
            Log::error($exception);

            return json_decode('{}');
        }

        return json_decode((string) $response->getBody(), false, 512, JSON_THROW_ON_ERROR);
    }
}
