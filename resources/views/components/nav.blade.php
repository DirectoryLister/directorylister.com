<nav class="bg-white">
    <div class="container max-w-4xl mx-auto py-6 px-4 flex flex-col justify-between items-center sm:flex-row lg:px-0">
        <div class="flex items-center">
            <img src="{{ asset('images/directory-lister.svg') }}" class="w-12 h-12 mr-4" alt="Directory Lister Logo">

            <h1 class="font-serif text-3xl">
                Directory Lister
            </h1>
        </div>

        <div class="flex items-center pt-4 sm:pt-0">
            <a href="{{ $release->html_url ?? 'https://github.com/DirectoryLister/DirectoryLister/releases/latest' }}"
                class="text-gray-600 hover:text-gray-800 hover:underline inline-block"
            >
                {{ $release->tag_name ?? '3.X.X' }}
            </a>

            <a href="https://github.com/DirectoryLister/DirectoryLister" title="GitHub" class="text-gray-600 ml-4 hover:text-gray-800">
                <i class="fab fa-github fa-lg"></i>
            </a>

            <a href="https://twitter.com/DirectoryLister" title="Twitter" class="text-gray-600 ml-4 hover:text-gray-800">
                <i class="fab fa-twitter fa-lg"></i>
            </a>

            <a href="https://spectrum.chat/directory-lister" title="Spectrum" class="text-gray-600 ml-4 hover:text-gray-800">
                <i class="fas fa-comments fa-lg"></i>
            </a>
        </div>
</nav>
