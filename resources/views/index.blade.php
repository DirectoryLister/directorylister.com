@extends('layouts.app')

@section('content')
    @include('components.nav')

    <div class="bg-blue-100">
        <div class="container max-w-4xl mx-auto px-4 py-12 lg:px-0">
            <p class="font-serif leading-loose text-xl mb-12">
                <span class="font-bold">Directory Lister</span> is the easiest way
                to share the contents of any web-accessable folder and navigate
                there within.
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

    <div class="bg-blue-900 text-white">
        <div class="container max-w-4xl mx-auto py-12 px-4 text-center lg:px-0">
            <a href="#" class="inline-block rounded-lg bg-blue-600 px-6 py-4 text-lg hover:bg-blue-700 hover:shadow-md">
                Get Directory Lister
            </a>

            <p class="mt-6 font-serif font-light text-lg">
                List the contents of any web-accessible directory in less than a minute.
            </p>
        </div>
    </div>

    <div class="bg-blue-100">
        <div class="container max-w-4xl mx-auto py-24 px-4 lg:px-0">
            <div class="flex items-center mb-24">
                <div class="mr-4 w-2/5 leading-relaxed">
                    Find the files you're looking for quickly with built-in
                    directory search.
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
                    Retrieve file hashes to validate downloaded files, improving
                    trust and reliability.
                </div>
            </div>

            <div class="flex items-center">
                <div class="mr-4 w-2/5 leading-relaxed">
                    Render README files directly in the page.
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
                        <li class="py-2">
                            <span class="font-bold">Lorem ipsum, dolor sit amet</span> consectetur adipisicing elit.
                        </li>

                        <li class="py-2">
                            <span class="font-bold">Dolorem velit officia mollitia</span> consequuntur consequatur veniam tempore sint corrupti provident quidem fugiat.
                        </li>
                    </ul>
                </div>

                <div class="w-1/2 px-4">
                    <ul class="list-outside pl-6 list-disc">
                        <li class="py-2">
                            <span class="font-bold">Dolorem velit officia mollitia</span> consequuntur consequatur veniam tempore sint corrupti provident quidem fugiat.
                        </li>

                        <li class="py-2">
                            <span class="font-bold">Lorem ipsum, dolor sit amet</span> consectetur adipisicing elit.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('components.getting-started')

    @include('components.footer')
@endsection
