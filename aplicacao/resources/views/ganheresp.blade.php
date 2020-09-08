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
        <div class="block">
            <div class="block-header block-header-default bg-primary">
                <h3 class="block-title text-white" >Disciplina: {{ $questao->nome }}</h3>
            </div>
            <div class="block-content">
                <p>{{ $questao->enunciado }}</p>
            </div>
            <!-- Table Alternativas -->
            <div class="block">
                <div class="block-content">
                    <table class="table table-borderless table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <p class="mb-5"> ( a ) {{ $questao->a }} </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p class="mb-5"> ( b ) {{ $questao->b }} </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-5"> ( c ) {{ $questao->c }} </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-5"> ( d ) {{ $questao->d }} </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-5"> ( e ) {{ $questao->e }} </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="block-content">
                @if ($questao->correta == $respondida)
                    <div class="alert alert-success" role="alert">
                        Parabéns! Você acertou.
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        Você Errou. A resposta correta é a Alternativa {{ $questao->correta }}
                    </div>
                @endif
                <p>
            </div>
            <!-- END Table Alternativas -->
            <div class="block text-center">
                <form method="get" action="/ganhe">
                    <button type="submit" class="btn btn-alt-primary btn-rounded">Próxima</button>
                </form>
            </div>
            <p>&nbsp;</p>
        </div>
    </div>
    <!-- END Page Content -->

@endsection