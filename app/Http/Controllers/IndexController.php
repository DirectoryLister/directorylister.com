<?php

namespace App\Http\Controllers;

use App\Http\Clients\GitHub;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(GitHub\ClientInterface $github): View
    {
        return view('index', [
            'release' => $github->latestRelease('DirectoryLister', 'DirectoryLister'),
        ]);
    }
}
