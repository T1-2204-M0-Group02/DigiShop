<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>  
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jsgrid.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css') }}">
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
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>

    <!-- Jsgrid js-->
    <script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
    <script src="{{ asset('assets/js/jsgrid/griddata-invoice.js') }}"></script>
    <script src="{{ asset('assets/js/jsgrid/jsgrid-invoice.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

    <!--right sidebar js-->
    <script src="{{ asset('assets/js/chat-menu.js') }}"></script>

    <!--script admin-->
    <script src="{{ asset('assets/js/admin-script.js') }}"></script>
    <script>
        $('.single-item').slick({
            arrows: false,
            dots: true
        });
    </script>
</body>
</html>