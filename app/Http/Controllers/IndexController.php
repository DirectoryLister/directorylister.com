<?php

namespace App\Http\Controllers;

use App\GitHub\Client as GitHubClient;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     */
    public function __invoke(GitHubClient $github): View
    {
        return view('index', [
            'release' => $github->latestRelease('DirectoryLister', 'DirectoryLister'),
        ]);
    }
}
