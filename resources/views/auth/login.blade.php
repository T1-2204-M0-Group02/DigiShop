<x-guest-layout>
    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab"
                href="#top-profile" role="tab" aria-controls="top-profile"
                aria-selected="true"><span class="icon-user me-2"></span>Login</a>
        </li>
    </ul>
    <div class="tab-content" id="top-tabContent">
        <div class="tab-pane fade show active" id="top-profile" role="tabpanel"
            aria-labelledby="top-profile-tab">
            <!-- <form class="form-horizontal auth-form"> -->
            <form class="form-horizontal auth-form" method="POST"
                action="{{ route('login') }}">
                @csrf
                {{-- <div class="form-group">
                    <input autofocus required="" name="login[username]" type="email"
                        class="form-control" placeholder="Username" id="email">
                </div> --}}

                <div class="form-group">
                    {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                    <x-text-input id="email" class="form-control" type="email"
                        name="email" :value="old('email')" placeholder="Email" required
                        autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                {{-- 
                <div class="form-group">
                    <input required="" id="password" name="login[password]" type="password" name="Password"
                        class="form-control" placeholder="Password" autocomplete="current-password">
                </div> --}}

                <div class="form-group">
                    <!-- <x-input-label for="password" :value="__('Password')" /> -->

                    <x-text-input id="password" class="form-control" type="password"
                        name="password" placeholder="Password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="form-terms">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <div class="form-check">
                            <input class="form-check-input custom-control-input"
                                type="checkbox" value="" id="customControlAutosizing">
                            <label class="form-check-label"
                                for="customControlAutosizing">Remember me</label>
                        </div>
                        <a href="javascript:void(0)"
                            class="btn btn-default forgot-pass">Forgot your Password?</a>
                    </div>
                </div>
                <div class="form-button">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
                <div class="form-footer">
                    <span>Or Login up with social platforms</span>
                    <ul class="social">
                        <li><a class="icon-facebook" href="{{ route('socialLogin', 'facebook') }}"></a></li>
                        <li><a class="icon-google" href="{{ route('socialLogin', 'google') }}"></a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
                            
{{-- 
<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form></x-guest-layout> --}}
