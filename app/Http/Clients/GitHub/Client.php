<?php

namespace App\Http\Clients\GitHub;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use stdClass;

class Client implements ClientInterface
{
    public function __construct(
        private GuzzleHttpClient $client
    ) {}

    public function latestRelease(string $owner, string $repo): stdClass
    {
        try {
            $response = $this->client->get("repos/{$owner}/{$repo}/releases/latest");
        } catch (ClientException $exception) {
            Log::error($exception);

            return json_decode('{}');
        }

        return json_decode((string) $response->getBody(), flags: JSON_THROW_ON_ERROR);
    }
}
