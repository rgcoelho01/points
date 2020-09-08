@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
    
@endsection

@section('content')
    <!-- Page Content     -->
    <div class="content">
    @isset($questao)
        <div class="block">
            <div class="block-header block-header-default bg-primary">
                <h3 class="block-title text-white" >Disciplina: {{ $questao->nome }}</h3>
            </div>
            <div class="block-content">
                <p>{{ $questao->enunciado }}</p>
            </div>
            <!-- Table Alternativas -->
            <form class="js-validation-bootstrap" method="post" action="/ganhe/{{ $questao->id }}">
            @csrf
            <div class="block">
                <div class="block-content">
                    <table class="table table-borderless table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="custom-control custom-radio mb-5">
                                        <input class="custom-control-input" type="radio" name="alternativa" id="alternativaa" value="a" unchecked required>
                                        <label class="custom-control-label" for="alternativaa">{{ $questao->a }}</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-radio mb-5">
                                        <input class="custom-control-input" type="radio" name="alternativa" id="alternativab" value="b" unchecked>
                                        <label class="custom-control-label" for="alternativab">{{ $questao->b }}</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-radio mb-5">
                                        <input class="custom-control-input" type="radio" name="alternativa" id="alternativac" value="c" unchecked>
                                        <label class="custom-control-label" for="alternativac">{{ $questao->c }}</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-radio mb-5">
                                        <input class="custom-control-input" type="radio" name="alternativa" id="alternativad" value="d" unchecked>
                                        <label class="custom-control-label" for="alternativad">{{ $questao->d }}</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-radio mb-5">
                                        <input class="custom-control-input" type="radio" name="alternativa" id="alternativae" value="e" unchecked>
                                        <label class="custom-control-label" for="alternativae">{{ $questao->e }}</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Table Alternativas -->
            <div class="block text-center">
                <button type="submit" class="btn btn-alt-primary btn-rounded">Responder</button>
            </div>
            </form>
            <p>&nbsp;</p>
        </div>
    </div>
    <!-- END Page Content -->
    @else
        <div class="block">
            <div class="block-header block-header-default bg-primary">
                <h3 class="block-title text-white" >Parabéns :: Etapa Concluída!</h3>
            </div>
            <div class="block-content">
                <p>Continue respondendo as perguntas e aproveite todos os benefícios que o sistema Points oferece!</p>
                <p>Novas questões em breve!</p>
                <p>Aguarde... </p>
            </div>
        </div>

    @endisset

@endsection