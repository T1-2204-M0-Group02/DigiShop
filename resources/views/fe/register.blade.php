@extends('fe.layout')

@section('contents')
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>Register</h2>
                            <ul>
                                <li><a href="{{ Route('home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="javascript:void(0)">Register</a></li>
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
                <div class="col-lg-4 offset-lg-4">
                    <div class="theme-card">
                        <h3 class="text-center">Create account</h3>
                        <form class="theme-form" method="POST"
                        action="{{ route('register') }}">
                        @csrf
                            <div class="row g-3">
                                <div class="col-md-12 form-group">
                                    <label for="review">Name</label>
                                    <input id="name" name="name" value="{{ old('name') }}" autofocus type="text" class="form-control" id="lname" placeholder="Name" required="">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-12 form-group">
                                    <label>email</label>
                                    <input id="email" name="email" value="{{ old('email') }}" type="text" class="form-control" placeholder="Email" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Password</label>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Enter your password" required="">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Confirm Password</label>
                                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirm your password" required="">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div class="col-md-12 form-group"><button type="submit" class="btn btn-normal">Create Account</button></div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-12 ">
                                    <p>Have you already account? <a href="{{ Route('login') }}" class="txt-default">click</a> here to &nbsp;<a href="{{ Route('login') }}" class="txt-default">Login</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection