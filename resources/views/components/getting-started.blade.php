<div class="bg-blue-900 text-white">
    <div class="container max-w-4xl mx-auto px-4 py-12 flex flex-col justify-between items-center text-center lg:px-0">
        <div>
            @foreach ($release->assets as $asset)
                <a href="{{ $asset->browser_download_url }}" class="inline-block rounded-lg bg-blue-600 shadow my-2 px-6 py-4 text-lg text-white w-full hover:bg-blue-700 hover:shadow-md sm:w-auto sm:mx-2 sm:my-0">
                    <i class="fas fa-download fa-lg fa-fw"></i> Download

                    <span class="font-bold">
                        {{ preg_replace(
                            sprintf('/^DirectoryLister-%s\./', preg_quote($release->tag_name)), '', $asset->name
                        ) }}
                    </strong>
                </a>
            @endforeach
        </div>

        <p class="font-serif font-light mt-6">
            <i class="fas fa-info-circle fa-fw"></i>

            Directory Lister requires PHP 7.2+
        </p>
    </div>
</div>
