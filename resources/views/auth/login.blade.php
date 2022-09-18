<x-guest-layout>
    <body class="login">
        <x-jet-authentication-card>
            <x-jet-validation-errors class="mb-4" />
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign In</h2>
                <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">A few more clicks to sign in to your
                    account.
                    Manage all your e-commerce accounts in one place</div>
                <div class="intro-x mt-8">
                    <x-jet-input id="email" type="email" name="email" required autofocus placeholder="Email" />
                    <x-jet-input id="password" class="mt-4" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />
                </div>

                <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                    <label for="remember_me" class="flex items-center mr-auto">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <x-jet-button>
                        {{ __('Login') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </body>
</x-guest-layout>
