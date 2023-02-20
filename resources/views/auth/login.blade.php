<head>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/jsgrid.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
</head>

<body>
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="authentication-box">
            <div class="container">
                <div class="row">
                    <div class="col p-0 card-right">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab"
                                            href="#top-profile" role="tab" aria-controls="top-profile"
                                            aria-selected="true"><span class="icon-user me-2"></span>Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                            href="#top-contact" role="tab" aria-controls="top-contact"
                                            aria-selected="false"><span class="icon-unlock me-2"></span>Register</a>
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
                                                    <li><a class="icon-facebook" href=""></a></li>
                                                    <li><a class="icon-twitter" href=""></a></li>
                                                    <li><a class="icon-instagram" href=""></a></li>
                                                    <li><a class="icon-pinterest" href=""></a></li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="top-contact" role="tabpanel"
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
                                                    <li><a class="icon-facebook" href=""></a></li>
                                                    <li><a class="icon-twitter" href=""></a></li>
                                                    <li><a class="icon-instagram" href=""></a></li>
                                                    <li><a class="icon-pinterest" href=""></a></li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="index.html" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>back</a>
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/slick.js"></script>

    <!-- Jsgrid js-->
    <script src="../assets/js/jsgrid/jsgrid.min.js"></script>
    <script src="../assets/js/jsgrid/griddata-invoice.js"></script>
    <script src="../assets/js/jsgrid/jsgrid-invoice.js"></script>

    <!-- lazyload js-->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="../assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="../assets/js/admin-script.js"></script>
    <script>
        $('.single-item').slick({
            arrows: false,
            dots: true
        });
    </script>
</body>
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
