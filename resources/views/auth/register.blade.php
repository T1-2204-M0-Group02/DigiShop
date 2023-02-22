<x-guest-layout>
    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="contact-top-tab" data-bs-toggle="tab"
                href="#top-contact" role="tab" aria-controls="top-contact"
                aria-selected="false"><span class="icon-unlock me-2"></span>Register</a>
        </li>
    </ul>
    <div class="tab-content" id="top-tabContent">
        <div class="tab-pane fade show active" id="top-contact" role="tabpanel"
            aria-labelledby="contact-top-tab">
            <form class="form-horizontal auth-form" method="POST"
                action="{{ route('register') }}">
                @csrf
                {{-- <div class="form-group">
                    <input required="" name="login[username]" type="email"
                        class="form-control" placeholder="Username"
                        id="registerEmail">
                </div> --}}

                <div class="form-group">
                    <x-text-input id="name" class="form-control" type="text"
                        name="name" :value="old('name')" placeholder="Username" required
                        autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="form-group">
                    {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                    <x-text-input id="email" class="form-control" type="email"
                        name="email" :value="old('email')" placeholder="Email" required/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                {{-- <div class="form-group">
                    <input required="" name="login[password]" type="password"
                        class="form-control" placeholder="Password"
                        id="registerPassword">
                </div>
                <div class="form-group">
                    <input required="" name="login[password]" type="password"
                        class="form-control" placeholder="Confirm Password"
                        id="ConfirmPassword">
                </div> --}}

                <div class="form-group">
                    <x-text-input id="password" class="form-control"
                        type="password" name="password" placeholder="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="form-group">
                    <x-text-input id="password_confirmation" class="form-control"
                        type="password" name="password_confirmation" placeholder="Confirm Password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <!-- <div class="form-terms">
                    <div class="custom-control custom-checkbox form-check mr-sm-2">
                        <input class="form-check-input" type="checkbox" value=""
                            id="customControlAutosizing1">
                        <label class="custom-control-label form-check-label"
                            for="customControlAutosizing1"><span>I agree all statements in
                                <a href="" class="pull-right">Terms &amp;
                                    Conditions</a></span></label>
                    </div>
                    <!-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                    </label>
                </div> -->
                <!-- </div> -->
                <div class="form-button">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
                <div class="form-footer">
                    <span>Or Sign up with social platforms</span>
                    <ul class="social">
                        <li><a class="icon-facebook" href="{{ route('socialLogin', 'facebook') }}"></a></li>
                        <li><a class="icon-google" href="{{ route('socialLogin', 'google') }}"></a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>


{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
