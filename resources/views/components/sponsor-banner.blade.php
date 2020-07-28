<div class="fixed bottom-0 left-0 right-0 m-4 transition z-50" x-data="{ show: false }" x-show.transition="show"
    x-init="localStorage.getItem('hideBanner') === null ? (setTimeout(() => show = true, 500)) : (show = false)"
>
    <div class="container flex justify-between items-center flex-wrap rounded-lg bg-black shadow-lg text-white px-4 py-2 mx-auto sm:flex-row">
        <p class="w-0 flex-1">
            <span class="font-bold">Love Directory Lister?</span>

            <span class="hidden sm:inline-block lg:hidden">
                Show your support!
            </span>

            <span class="hidden lg:inline-block">
                Support development via monthly sponsorship or a one-time donation!
            </span>
        </p>

        <div class="flex justify-between items-center flex-shrink-0 w-full order-3 mt-2 sm:order-2 sm:mt-0 sm:w-auto">
            <a href="https://github.com/sponsors/PHLAK" class="block rounded bg-pink-600 text-center px-4 py-2 w-full mr-1 hover:bg-pink-700 hover:shadow-md sm:w-auto">
                <i class="fas fa-heart fa-fw"></i> Sponsor
            </a>

            <a href="https://www.paypal.me/ChrisKankiewicz/10.00" class="block rounded bg-green-600 text-center px-4 py-2 w-full ml-1 hover:bg-green-700 hover:shadow-md sm:w-auto">
                <i class="fas fa-donate fa-fw"></i> Donate
            </a>
        </div>

        <button x-on:click="localStorage.setItem('hideBanner', true); show = false"
            class="flex justify-center items-center order-2 rounded-full text-sm w-6 h-6 ml-2 hover:bg-red-600 hover:shadow sm:order-3"
        >
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>
