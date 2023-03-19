@extends('fe.layout')

@section('contents')
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>Login</h2>
                            <ul>
                                <li><a href="{{ Route('home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="javascript:void(0)">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="login-page section-big-py-space b-g-light">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-8 offset-xl-4 offset-lg-3 offset-md-2">
                    <div class="theme-card">
                        <h3 class="text-center">Login</h3>
                        <form class="theme-form form-horizontal auth-form"  
                            class="form-horizontal auth-form" method="POST"
                            action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email" required="" autofocus>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Enter your password" autocomplete="current-password" required="">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <button type="submit" class="btn btn-normal">Login</button>
                            @if (Route::has('password.request'))
                            <a class="float-end txt-default mt-2" href="{{ route('password.request') }}">Forgot your password?</a>
                            @endif

                            <div class="form-footer mt-3">
                                <span>Or Login up with social platforms</span>
                                <ul class="social mt-1">
                                    <li><a class="icon-facebook" href="{{ route('socialLogin', 'facebook') }}"></a></li>
                                    <li><a class="icon-google" href="{{ route('socialLogin', 'google') }}"></a></li>
                                </ul>
                            </div>
                     
                        </form>
                        <a href="{{ route('register') }}" class="txt-default pt-3 d-block">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection