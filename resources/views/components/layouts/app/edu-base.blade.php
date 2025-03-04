<!doctype html>
<html class="fixed">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default Layout | Porto Admin - Responsive HTML5 Template')</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/morris/morris.css') }}" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}" />
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('css/skins/default.css') }}" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Livewire Styles -->
    @livewireStyles
    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>
</head>
<body>
<section class="body">
    <!-- Header -->
    <header class="header">
        <x-edu-logo/>
        <!-- Search & User Box -->
        <div class="header-right">

            <span class="separator"></span>
            <!-- Aquí podrías incluir un componente Livewire para notificaciones o el userbox -->
            @livewire('userbox')

        </div>
    </header>
    <!-- End Header -->
    <div class="inner-wrapper">
        <!-- Sidebar -->
        <aside id="sidebar-left" class="sidebar-left">
            <div class="sidebar-header">
                <div class="sidebar-title">{{__('app.navigation')}}</div>
                <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li>
                                <a class="nav-link" href="{{ url('layouts-default.html') }}">
                                    <i class="bx bx-home-alt" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <!-- Aquí podrías reemplazar el menú estático por un componente Livewire dinámico -->
                            @yield('menu')
                        </ul>
                    </nav>
                    <hr class="separator" />
                    <!-- Widgets o contenido adicional de la sidebar -->
                </div>
            </div>
        </aside>
        <!-- End Sidebar -->
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>{{__('app.app_title')}}</h2>
                <div class="right-wrapper text-end">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{{ url('/') }}">
                                <i class="bx bx-home-alt"></i>
                            </a>
                        </li>
                        @yield('breadcrumbs')
                    </ol>
                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
                </div>
            </header>
            <!-- Start Page Content -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- End Page Content -->
        </section>
    </div>
    <aside id="sidebar-right" class="sidebar-right">
        <!-- Contenido de la sidebar derecha, si lo hubiera -->
        @yield('sidebar-right')
    </aside>
</section>
<!-- Livewire Scripts -->
@livewireScripts
<!-- Vendor JS -->
<script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<!-- Otros scripts de la plantilla -->
<script src="{{ asset('js/theme.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
