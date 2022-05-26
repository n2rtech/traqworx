<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
       <!-- App favicon -->
       <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

       <!-- App css -->
       <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
       <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
       <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
        @yield('head')
    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"light","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            @include('superadmin.sections.sidebar')
            <div class="content-page">
                <div class="content">
                    @include('superadmin.sections.navbar')
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
    </body>
</html>
