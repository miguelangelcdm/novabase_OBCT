{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div> --}}
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="/" class="-intro-x flex items-center pt-5">
                <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="{{ asset('build/assets/images/logo.svg') }}">
                <span class="text-white text-lg ml-3">
                    Enigma
                </span>
            </a>
            <div class="my-auto">
                <img alt="Icewall Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('build/assets/images/illustration.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">A few more clicks to <br> sign in to your account.</div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your e-commerce accounts in one place</div>
            </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                {{ $logo }}
                {{ $slot }}
            </div>
        </div>
        <!-- END: Login Form -->
    </div>
</div>
