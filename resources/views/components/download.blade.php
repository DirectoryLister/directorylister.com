<div id="download" class="bg-sky-800 text-white" style="scroll-margin-top: 1rem;">
    <div class="container max-w-4xl mx-auto px-4 py-12 flex flex-col justify-between items-center text-center lg:px-0">
        <div>
            @foreach ($release->assets as $asset)
                <a href="{{ $asset->browser_download_url }}" data-umami-event="download" data-umami-event-version="{{ $release->tag_name }}" data-umami-event-asset="{{ $asset->name }}"
                    class="inline-block rounded-lg bg-sky-600 shadow-sm my-2 px-6 py-4 text-lg text-white w-full transform transition hover:scale-105 hover:shadow-md sm:w-auto sm:mx-2 sm:my-0"
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

        <div class="flex flex-col justify-between items-center my-6 sm:flex-row">
            <p class="font-serif font-light text-slate-400 sm:order-3">
                <i class="fas fa-info-circle fa-fw"></i>
                <span class="hidden sm:inline">Directory Lister</span> requires PHP 8.2+
            </p>
        </div>

        <div class="bg-slate-100 rounded-lg shadow-lg text-left p-6 md:min-w-80">
            <div class="flex justify-between items-center space-x-2 border-b-2 border-slate-200 pb-4 mb-4">
                <h2 class="text-slate-800 font-bold text-xl">Recent Changes</h2>

                <a href="{{ $release->html_url }}" class="text-lg font-mono text-slate-400 hover:underline">
                    {{ $release->name }}
                </a>
            </div>

            <x-markdown>{!! $release->body !!}</x-markdown>
        </div>
    </div>
</div>
