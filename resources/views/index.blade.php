@extends('layouts.app')

@section('content')
    <div class="container max-w-4xl mx-auto px-4 lg:px-0">
        <nav class="flex justify-between items-center mb-4 py-4">
            <div class="flex items-center">
                <img src="{{ asset('images/directory-lister.svg') }}" class="w-12 h-12 mr-4" alt="Directory Lister Logo">

                <h1 class="font-serif text-4xl">
                    Directory Lister
                </h1>
            </div>

            <div class="flex items-center">
                <a href="#" class="text-gray-600 hover:text-gray-800 hover:underline">
                    v3.0.0
                </a>

                <a href="#" title="GitHub" class="text-gray-600 ml-4 hover:text-gray-800">
                    <i class="fab fa-github fa-2x"></i>
                </a>

                <a href="#" title="Twitter" class="text-gray-600 ml-4 hover:text-gray-800">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>

                <a href="#" title="Slack" class="text-gray-600 ml-4 hover:text-gray-800">
                    <i class="fab fa-slack fa-2x"></i>
                </a>
            </div>
        </nav>

        <p class="font-serif text-xl my-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ea
            eaquealiquid pariatur cum deserunt ab inventore, rem magni quae
            perspiciatis minus. Corporis, eos quae? Doloremque ipsa dolorum
            consectetur molestiae.
        </p>

        <div id="beer-slider" class="beer-slider rounded-lg shadow-lg my-6" data-beer-label="Dark">
            <img src="{{ asset('images/screenshot-dark.png') }}" alt="Directory Lister - Dark Theme">

            <div class="beer-reveal" data-beer-label="Light">
                <img src="{{ asset('images/screenshot-light.png') }}" alt="Directory Lister - Light Theme">
            </div>
        </div>

        <h2 class="text-lg text-gray-600 text-center uppercase my-6">
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

    <div class="bg-blue-900 text-white mt-8">
        <div class="container max-w-4xl mx-auto py-12 text-center lg:px-0">
            <a href="#" class="inline-block rounded-lg bg-blue-600 px-6 py-4 text-lg hover:bg-blue-700 hover:shadow-md">
                Get Directory Lister
            </a>

            <p class="mt-4 font-serif text-lg">
                List the contents of any web-accessible directory in less than a minute.
            </p>
        </div>
    </div>

    <footer class="bg-white py-12">
        <div class="container max-w-4xl mx-auto text-center text-gray-600">
            <p class="my-4">
                Released under the <a href="#" class="underline hover:text-gray-800">MIT license</a>
                &bull; <a href="#" class="underline hover:text-gray-800">View source</a>
            </p>

            <p class="my-4">
                &copy; {{ date('Y') }}
                <a href="https://www.chriskankiewicz.com" class="underline hover:text-gray-800">
                    Chris Kankiewicz
                </a>
            </p>
        </div>
    </footer>
@endsection
