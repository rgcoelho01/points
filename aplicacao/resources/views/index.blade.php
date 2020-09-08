<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Points :: Sua moeda para o estudo render mais</title>
        <meta name="keywords" content="Points, moeda, UENP, CLM, CCT, Sistemas de Informação, Ciência da Computação, Licenciatura em Computação, Programa de Vantagens" />
      	<meta name="description" content="Points. sua moeda para o estudo render mais. Programa de vantagens da UENP/CLM/CCT para os alunos dos cursos de Sistemas de Informação e Ciência da Computação">
        <meta name="author" content="Ricardo G. Coelho">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Points :: Sua moeda para o estudo render mais">
        <meta property="og:site_name" content="Points">
        <meta property="og:description" content="Points. sua moeda para o estudo render mais. Programa de vantagens da UENP/CLM/CCT para os alunos dos cursos de Sistemas de Informação e Ciência da Computação">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="css/codebase.min.css">

    </head>
    <body>

        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('media/photos/photobg.jpg');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white">
                                    Teste seu conhecimento e tenha um mundo de benefícios para você.
                                </p>
                                <p class="font-italic text-white-op">
                                    Ricardo G. Coelho &copy; <span class="js-year-copy"></span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="si si-fire"></i>
                                        <span class="font-size-xl text-primary-dark">P</span><span class="font-size-xl">oints</span>
                                    </a>
<!--                                    <h1 class="h3 font-w700 mt-30 mb-10">Sua moeda para o estudo render mais.</h1>
-->
                                    <h2 class="h5 font-w400 text-muted mb-0">Entre com os seus dados cadastrados no SUAP para acessar o sistema</h2>
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js -->
                                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signin px-30" action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf">
                                                <label for="cpf">{{ __('CPF') }}</label>
                                                @error('cpf')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                                <label for="password">{{ __('Senha') }}</label>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                                <label class="custom-control-label" for="remember">{{ __('Lembre-me') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                            <i class="si si-login mr-10"></i> {{ __('Entrar') }}
                                        </button>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        
        <script src="js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="js/codebase.app.min.js"></script>


        <script src="js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="js/pages/index.js"></script>
    </body>
</html>