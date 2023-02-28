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
                  <a class="d-block mt-3" href="{{ route('register') }}">Create an account</a>
                </form>
        </div>
    </div>
    <a href="{{ route('home') }}" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>back</a>
</x-guest-layout>