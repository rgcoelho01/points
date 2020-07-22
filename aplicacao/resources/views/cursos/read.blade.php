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
    <!-- Page Content 
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">DataTables Example</h2>
            <h3 class="h5 text-muted mb-0">Plugin Integration</h3>
        </div>
    -->
        <!-- Info
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="block">
                    <div class="block-content">
                        <p class="text-muted">
                            This page showcases how easily you can add a plugin’s JS/CSS assets and init it using custom JS code.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Info -->

        <!-- Dynamic Table Full -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Cursos</h3>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-rounded btn-secondary" data-toggle="tooltip" title="Novo Curso">
                        <i class="fa fa-plus"></i> Inserir
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th>Nome</th>
                            <th class="text-center" style="width: 100px;">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos as $curso)
                        <tr>
                            <td class="text-center">{{ $curso->id }}</td>
                            <td class="font-w600">
                                <a href="javascript:void(0)" title="Alterar">{{ $curso->nome }}</a>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-rounded btn-secondary" data-toggle="tooltip" title="Excluir">
                                        <i class="fa fa-trash"></i> Excluir
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- END Page Content -->
@endsection