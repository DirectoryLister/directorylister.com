<div class="bg-blue-800 text-white">
    <div class="container max-w-4xl mx-auto px-4 py-12 flex flex-col justify-between items-center text-center lg:px-0">
        <div>
            @foreach ($release->assets as $asset)
                <a href="{{ $asset->browser_download_url }}" onclick="gtag('event', 'click', { 'event_category': 'Download', 'event_label': '{{ $asset->name }}' });"
                    class="inline-block rounded-lg bg-blue-600 shadow my-2 px-6 py-4 text-lg text-white w-full transform transition hover:scale-105 hover:shadow-md sm:w-auto sm:mx-2 sm:my-0"
                >
                    <i class="fas fa-download fa-lg fa-fw"></i> Download

                    <span class="font-bold">
                        {{ preg_replace(
                            sprintf('/^DirectoryLister-%s\./', preg_quote($release->tag_name)), '', $asset->name
                        ) }}
                    </span>
                </a>
            @endforeach
        </div>

        <div class="flex flex-col justify-between items-center mt-6 sm:flex-row">
            <p class="order-3 font-mono text-gray-400 mt-2 sm:order-1 sm:text-sm sm:mt-0">
                <a href="{{ $release->html_url }}" class="hover:underline">
                    {{ $release->name }}
                </a>
            </p>

            <div class="order-2 border-l border-gray-400 mx-2 w-0 hidden sm:block">&nbsp;</div>

            <p class="order-1 font-serif font-light text-gray-400 sm:order-3">
                <i class="fas fa-info-circle fa-fw"></i>
                Directory Lister requires PHP 7.2+
            </p>
        </div>
    </div>
</div>
