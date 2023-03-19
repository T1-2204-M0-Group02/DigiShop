@extends('fe.layout')

@section('contents')
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>forget password</h2>
                            <ul>
                                <li><a href="{{ Route('home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="javascript:void(0)">forget password</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="login-page pwd-page section-big-py-space b-g-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="theme-card">
                        <h3>Forgot your password?</h3>
                        <p class="mb-2">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                        <form class="theme-form"  method="POST" action="{{ route('password.email') }}">
                        @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="email" name="email" type="email" class="form-control" placeholder="Enter Your Email" required="" autofocus>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        @if (Session::has('status'))
                                        <p>{!! Session::get('status') !!}</p>
                                        @endif
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-normal">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection