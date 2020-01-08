@extends('layouts.app')

@section('content')
    @include('components.nav')

    <div class="bg-blue-100">
        <div class="container max-w-4xl mx-auto px-4 py-12 lg:px-0">
            <p class="font-serif leading-loose text-xl mb-12">
                <span class="font-bold">Directory Lister</span> is the easiest way
                to share the contents of any web-accessable folder and navigate
                there within. With a zero configuration, drag-and-drop
                installation you'll be up and running in
                <span class="underline">less than a minute</span>.
            </p>

            <div id="beer-slider" class="beer-slider rounded-lg shadow-lg mb-6" data-beer-label="Dark">
                <img src="{{ asset('images/screenshot-dark.png') }}" alt="Directory Lister - Dark Theme">

                <div class="beer-reveal" data-beer-label="Light">
                    <img src="{{ asset('images/screenshot-light.png') }}" alt="Directory Lister - Light Theme">
                </div>
            </div>

            <p class="text-lg text-center text-gray-500">
                Check out the demo...
            </p>
        </div>
    </div>

    @include('components.getting-started')

    <div class="bg-blue-100">
        <div class="container max-w-4xl mx-auto py-24 px-4 lg:px-0">
            <div class="flex items-center mb-24">
                <div class="mr-4 w-2/5 leading-relaxed">
                    <h3 class="font-bold text-gray-600 uppercase mb-4">
                        Directory Search
                    </h3>

                    Find what you're looking for fast with built-in search.
                </div>

                <div class="flex-grow ml-4 w-3/5">
                    <img src="{{ asset('images/features/search.png') }}" class="rounded-lg shadow-lg">
                </div>
            </div>

            <div class="flex items-center mb-24">
                <div class="mr-4 w-3/5">
                    <img src="{{ asset('images/features/file-info.png') }}" class="rounded-lg shadow-lg">
                </div>

                <div class="ml-4 w-2/5 leading-relaxed">
                    <h3 class="font-bold text-gray-600 uppercase mb-4">
                        File Hashes
                    </h3>

                    Improve trust and reliability with quick access to file
                    hashes for validating downloaded files against the source.
                </div>
            </div>

            <div class="flex items-center">
                <div class="mr-4 w-2/5 leading-relaxed">
                    <h3 class="font-bold text-gray-600 uppercase mb-4">
                        Readme Rendering
                    </h3>

                    Render README files directly in your directory listing to
                    provide customized, relevant info to your users.
                </div>

                <div class="flex-grow ml-4 w-3/5">
                    <img src="{{ asset('images/features/readme.png') }}" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container max-w-4xl mx-auto px-4 py-12 lg:px-0">
            <h2 class="text-lg text-gray-600 text-center uppercase mb-6">
                Features
            </h2>

            <div class="flex">
                <div class="w-1/2 px-4">
                    <ul class="list-outside pl-6 list-disc">
                        <li class="py-4">
                            <span class="font-bold">Simple installation</span>
                            allows you to be up and running in less than a minute.
                        </li>

                        <li class="py-4">
                            <span class="bg-green-600 text-white text-xs rounded px-2 py-1 uppercase">New</span>
                            <span class="font-bold">Light and dark themes</span>
                            to suit your professional needs or personal style.
                        </li>

                        <li class="py-4">
                            <span class="font-bold">Custom sort ordering</span>
                            gives you control of the ordering of your files/folders.
                        </li>
                    </ul>
                </div>

                <div class="w-1/2 px-4">
                    <ul class="list-outside pl-6 list-disc">
                        <li class="py-4">
                            <span class="bg-green-600 text-white text-xs rounded px-2 py-1 uppercase">New</span>
                            <span class="font-bold">Directory search</span>
                            helps you locate the files you need quickly and
                            efficiently.
                        </li>

                        <li class="py-4">
                            <span class="font-bold">File hashes</span>
                            instill confidence when downloading files through
                            verification.
                        </li>

                        <li class="py-4">
                            <span class="bg-green-600 text-white text-xs rounded px-2 py-1 uppercase">New</span>
                            <span class="font-bold">Readme rendering</span>
                            allows exposing the contents of READMEs directly on
                            the page.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('components.getting-started')

    @include('components.footer')
@endsection
