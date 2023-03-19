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
            <form class="form-horizontal auth-form" method="POST"
                action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <x-text-input id="email" class="form-control" type="email"
                        name="email" :value="old('email')" placeholder="Email" required
                        autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="form-group">
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
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                            class="btn btn-default forgot-pass">Forgot your Password?</a>
                        @endif
                    </div>
                </div>
                <div class="form-button">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    <a href="{{ route('home') }}" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>back</a>
</x-guest-layout>