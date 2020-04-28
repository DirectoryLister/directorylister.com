<?php

namespace App\Http\Controllers;

use App\GitHub\Client as GitHubClient;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \App\GitHub\Client $github
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(GitHubClient $github)
    {
        return view('index', [
            'release' => $github->latestRelease('DirectoryLister', 'DirectoryLister'),
        ]);
    }
}
