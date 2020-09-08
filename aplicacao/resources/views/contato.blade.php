@extends('layouts.backend')

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/pages/contato.js') }}"></script>
    
@endsection

@section('content')
    <!-- Page Content     -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <!-- Hero -->
                <div class="bg-primary">
                    <div class="bg-pattern bg-black-op-25">
                        <div class="content content-top text-center">
                            <div class="py-25">
                                <h1 class="font-w700 text-white mb-10">Entre em contato</h1>
                                <h2 class="h4 font-w400 text-white-op">Você tem alguma pergunta?</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <div class="content content-full">
                    <div class="row justify-content-center py-30">
                        <div class="col-lg-8 col-xl-6">
                            <form class="js-validation-be-contact" action="/contato" method="post">
                            @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="becontactname">Nome</label>
                                        <input type="text" class="form-control form-control-lg" id="becontactname" name="becontactname" placeholder="Digite seu nome..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="becontactemail">Email</label>
                                    <div class="col-12">
                                        <input type="email" class="form-control form-control-lg" id="becontactemail" name="becontactemail" placeholder="Digite seu email..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="be-contact-message">Mensagem</label>
                                    <div class="col-12">
                                        <textarea class="form-control form-control-lg" id="be-contact-message" name="be-contact-message" rows="10" placeholder="Digite sua mensagem.."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-hero btn-alt-primary min-width-175">
                                            <i class="fa fa-send mr-5"></i> Enviar Mensagem
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END Contact Form -->

            </div>
        </div>
    </div>
    <!-- END Page Content -->

@endsection