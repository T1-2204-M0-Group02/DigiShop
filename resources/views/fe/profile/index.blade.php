@extends('fe.layout')

@section('contents')
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>profile</h2>
                        <ul>
                            <li><a href="{{ Route('home') }}">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="{{ Route('profile.edit') }}">profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- personal deatail section start -->
<section class="contact-page register-page section-big-py-space b-g-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-3">PROFILE INFORMATION</h3>
                <form class="theme-form" action="{{ route('profile.update') }}" method="post">
                  @csrf
                  @method('patch')

                    <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label >Name</label>
                               <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" autofocus autocomplete="name" class="form-control" placeholder="Enter Your name" required="">
                               <x-input-error class="mt-2" :messages="$errors->get('name')" />
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                               <label >Phone number</label>
                               <input id="phone" name="phone" value="{{ old('phone', $user->phone) }}" type="tel" autocomplete="phone" class="form-control" placeholder="Enter your number" required="">
                           </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" autocomplete="email" class="form-control" placeholder="Email" required="">
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                        <div>
                                            <p class="text-sm mt-2 text-gray-800">
                                                {{ __('Your email address is unverified.') }}

                                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    {{ __('Click here to re-send the verification email.') }}
                                                </button>
                                            </p>

                                            @if (session('status') === 'verification-link-sent')
                                                <p class="mt-2 font-medium text-sm text-green-600">
                                                    {{ __('A new verification link has been sent to your email address.') }}
                                                </p>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label >Address</label>
                                <input id="address" name="address" value="{{ old('address', $user->address) }}" autocomplete="address" type="text" class="form-control"  placeholder="Address" required="">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="btn btn-sm btn-normal mb-lg-5" type="submit">Save</button>
                            @if (session('status') === 'profile-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-3">UPDATE PASSWORD</h3>
                <form class="theme-form" action="{{ route('password.update') }}" method="post">
                  @csrf
                  @method('put')

                    <div class="row">
                        <div class="col-md-7">
                           <div class="form-group">
                               <label >Current Password</label>
                               <input id="current_password" name="current_password" type="password" class="form-control"  placeholder="Enter your current password" autocomplete="current-password" required="">
                               <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                           </div>
                        </div>

                        <div class="col-md-7">
                           <div class="form-group">
                               <label >New Password</label>
                               <input id="password" name="password" type="password" class="form-control" placeholder="Enter your new password" autocomplete="password" required="">
                               <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                           </div>
                        </div>

                        <div class="col-md-7">
                            <div class="form-group">
                                <div class="form-group">
                                    <label >Password Confirmation</label>
                                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" class="form-control" placeholder="password" required="">
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-normal mb-lg-5" type="submit">Save</button>
                            @if (session('status') === 'password-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->
@endsection
