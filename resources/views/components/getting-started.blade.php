<div class="bg-blue-900 text-white">
    <div class="container max-w-4xl mx-auto px-4 py-12 text-center lg:px-0">
        @foreach ($release->assets as $asset)
            <a href="{{ $asset->browser_download_url }}" class="inline-block rounded-lg bg-blue-600 shadow px-6 py-4 text-lg w-full my-2 hover:bg-blue-700 hover:shadow-md sm:w-auto sm:my-0 sm:mx-2">
                Download

                <span class="font-bold">
                    {{ preg_replace(
                        sprintf('/^DirectoryLister-%s\./', preg_quote($release->tag_name)), '', $asset->name
                    ) }}
                </strong>
            </a>
        @endforeach

        <p class="font-serif font-light mt-6">
            <i class="fas fa-info-circle fa-fw"></i>

            Directory Lister requires PHP 7.2+
        </p>
    </div>
</div>
