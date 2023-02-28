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
                <div class="form-group">
                    <x-text-input id="name" class="form-control" type="text"
                        name="name" :value="old('name')" placeholder="Username" required
                        autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="form-group">
                    <x-text-input id="email" class="form-control" type="email"
                        name="email" :value="old('email')" placeholder="Email" required/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
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
                  <a class="d-block mt-3" href="{{ route('login') }}">Login</a></span>
            </form>
        </div>
    </div>
    <a href="{{ route('home') }}" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>back</a>
</x-guest-layout>