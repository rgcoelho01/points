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
    
    @if (count($mensagens) > 0)
    <div class="block">
        <div class="block-header block-header-default">
            <div class="block-title">
                Caixa de Entrada <strong>({{ count($mensagens) }})</strong>
            </div>
        </div>
        <div class="block-content">
            <form class="js-validation-bootstrap" method="post" action="/mensagens">
            @csrf
            <!-- Messages Options -->
            <div class="push">
                <button type="submit" class="btn btn-rounded btn-alt-secondary float-right">
                    <i class="fa fa-times text-danger mx-5"></i>
                    <span class="d-none d-sm-inline"> Delete</span>
                </button>
                <p>&nbsp;</p>
            </div>
            <!-- END Messages Options -->

            <!-- Messages -->
            <!-- Checkable Table (.js-table-checkable class is initialized in Helpers.tableToolsCheckable()) -->
            <table class="js-table-checkable table table-hover table-vcenter">
                <tbody>
                @foreach ($mensagens as $mensagem)
                    <tr>
                        <td class="text-center" style="width: 40px;">
                            <label class="css-control css-control-primary css-checkbox">
                                <input type="checkbox" class="css-control-input" name="delmsg[]" value="{{ $mensagem->id }}">
                                <span class="css-control-indicator"></span>
                            </label>
                        </td>
                        <td class="d-none d-sm-table-cell font-w600" style="width: 140px;">{{ $mensagem->name }}</td>
                            <td>
                                <a class="font-w600" data-toggle="modal" data-target="#modal-message">{{ $mensagem->assunto }}</a>
                                <div class="text-muted mt-5">{{ $mensagem->mensagem }}</div>
                        </td>
                        <td class="d-none d-xl-table-cell font-w600 font-size-sm text-muted" style="width: 120px;">{{ $mensagem->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- END Messages -->
            </form>
        </div>
    </div>
    <!-- END Message List -->

    @else
        <div class="block">
            <div class="block-header block-header-default bg-primary">
                <h3 class="block-title text-white" >Caixa de Entrada Vazia</h3>
            </div>
            <div class="block-content">
                <p>Não existem mensagens para você!</p>
            </div>
        </div>

    @endif

@endsection