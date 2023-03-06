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
                            <li><a href="{{ Route('profile') }}">profile</a></li>
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
                                    <input id="password_confirmation" name="password-confirmation" type="password" autocomplete="new-password" class="form-control" placeholder="password" required="">
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-normal mb-lg-5" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->
@endsection
