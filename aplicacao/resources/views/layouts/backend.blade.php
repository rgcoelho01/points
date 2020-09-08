<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Points :: Sua moeda para o estudo render mais</title>
        <meta name="keywords" content="Points, moeda, UENP, CLM, CCT, Sistemas de Informação, Ciência da Computação, Licenciatura em Computação, Programa de Vantagens" />
      	<meta name="description" content="Points. sua moeda para o estudo render mais. Programa de vantagens da UENP/CLM/CCT para os alunos dos cursos de Sistemas de Informação e Ciência da Computação">
        <meta name="author" content="Ricardo G. Coelho">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}">

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/corporate.css') }}"> -->
        @yield('css_after')
<!--            <link rel="stylesheet" id="css-main" href="/css/codebase.min.css"> -->

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
    </head>
    <body>
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="/">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">P</span><span class="font-size-xl text-primary">oints</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="javascript:void(0)">
                                <img class="img-avatar" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="javascript:void(0)" title="Perfil">{{ Auth::user()->name }}</a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="si si-drop" title="Inverter Modo"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="si si-logout" title="Sair"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->
                    <!-- Menu para usuario Admin -->
                    @role('administrador')
                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a class="{{ request()->is('home') ? ' active' : '' }}" href="/home">
                                    <i class="si si-graph"></i><span class="sidebar-mini-hide">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/cursos/read">
                                    <i class="si si-star"></i><span class="sidebar-mini-hide">Cursos</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-basket"></i><span class="sidebar-mini-hide">Troque seus Points</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-envelope"></i><span class="sidebar-mini-hide">Mensagens</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-user"></i><span class="sidebar-mini-hide">Meu Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="si si-logout"></i><span class="sidebar-mini-hide">Sair</span>
                                </a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li class="nav-main-heading">
                                <span class="sidebar-mini-hidden">Ajuda</span>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-question"></i><span class="sidebar-mini-hide">Dúvidas Frequentes</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-bubble"></i><span class="sidebar-mini-hide">Contato</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                    @endrole
                    <!-- Fim do menu Admin -->
                    <!-- Menu para usuario Professor -->
                    @role('professor')
                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a class="{{ request()->is('home') ? ' active' : '' }}" href="/home">
                                    <i class="si si-graph"></i><span class="sidebar-mini-hide">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-star"></i><span class="sidebar-mini-hide">Ganhe Points</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-basket"></i><span class="sidebar-mini-hide">Troque seus Points</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-envelope"></i><span class="sidebar-mini-hide">Mensagens</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-user"></i><span class="sidebar-mini-hide">Meu Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="si si-logout"></i><span class="sidebar-mini-hide">Sair</span>
                                </a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li class="nav-main-heading">
                                <span class="sidebar-mini-hidden">Ajuda</span>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-question"></i><span class="sidebar-mini-hide">Dúvidas Frequentes</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                    <i class="si si-bubble"></i><span class="sidebar-mini-hide">Contato</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                    @endrole
                    <!-- Fim do menu Professor -->
                    <!-- Menu para usuario Aluno -->
                    @role('aluno')
                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a class="{{ request()->is('home') ? ' active' : '' }}" href="{{ route('home') }}">
                                    <i class="si si-graph"></i><span class="sidebar-mini-hide">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('ganhe') ? ' active' : '' }}" href="{{ route('ganhe') }}">
                                    <i class="si si-star"></i><span class="sidebar-mini-hide">Ganhe Points</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('troque') ? ' active' : '' }}" href="{{ url('/prestashop') }}">
                                    <i class="si si-basket"></i><span class="sidebar-mini-hide">Troque seus Points</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('mensagens') ? ' active' : '' }}" href="{{ route('mensagens') }}">
                                    <i class="si si-envelope"></i><span class="sidebar-mini-hide">Mensagens</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('perfil') ? ' active' : '' }}" href="{{ route('perfil') }}">
                                    <i class="si si-user"></i><span class="sidebar-mini-hide">Meu Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="si si-logout"></i><span class="sidebar-mini-hide">Sair</span>
                                </a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li class="nav-main-heading">
                                <span class="sidebar-mini-hidden">Ajuda</span>
                            </li>
                            <li>
                                <a class="{{ request()->is('duvidas') ? ' active' : '' }}" href="{{ route('duvidas') }}">
                                    <i class="si si-question"></i><span class="sidebar-mini-hide">Dúvidas Frequentes</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('contato') ? ' active' : '' }}" href="{{ route('contato') }}">
                                    <i class="si si-bubble"></i><span class="sidebar-mini-hide">Contato</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                    @endrole
                    <!-- Fim do menu Aluno -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                                <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
                                <h6 class="dropdown-header">Color Themes</h6>
                                <div class="row no-gutters text-center mb-5">
                                    <div class="col-2 mb-5">
                                        <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-elegance" data-toggle="theme" data-theme="{{ mix('/css/themes/elegance.css') }}" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-pulse" data-toggle="theme" data-theme="{{ mix('/css/themes/pulse.css') }}" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-flat" data-toggle="theme" data-theme="{{ mix('/css/themes/flat.css') }}" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-corporate" data-toggle="theme" data-theme="{{ mix('/css/themes/corporate.css') }}" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-earth" data-toggle="theme" data-theme="{{ mix('/css/themes/earth.css') }}" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6 class="dropdown-header">Header</h6>
                                <div class="row gutters-tiny text-center mb-5">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                                    </div>
                                </div>
                                <h6 class="dropdown-header">Sidebar</h6>
                                <div class="row gutters-tiny text-center mb-5">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_off">Light</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_on">Dark</button>
                                    </div>
                                </div>
                                <div class="d-none d-xl-block">
                                    <h6 class="dropdown-header">Main Content</h6>
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                                </div>
                            </div>
                        </div>
                        <!-- END Layout Options -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="/home" method="POST">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                   </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-sm clearfix">
                    <div class="float-right">
                        <a class="font-w600 text-primary" >Ricardo G. Coelho &copy; <span class="js-year-copy"></span></a>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="{{ mix('js/codebase.app.js') }}"></script>

        @yield('js_after')
    </body>
</html>