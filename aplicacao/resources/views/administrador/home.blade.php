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
        <div class="row gutters-tiny invisible" data-toggle="appear">
 
                        <!-- Table Top 10 -->
                        <div class="col-md-12">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b bg-gd-dusk">
                                    <h3 class="block-title">Top 10</h3>
                                </div>
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th class="d-none d-sm-table-cell text-center">Posição</th>
                                                <th>Nome</th>
                                                <th class="text-center">Acertos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($ranks as $top)
                                            <tr>
                                                <td class="text-center d-none d-sm-table-cell">
                                                    <a class="text-gray-dark">{{ $loop->iteration }}</a>
                                                </td>
                                                <td>
                                                    <a class="text-gray-dark">{{ $top->name }}</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark">{{ $top->acertos }}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

        </div>
    </div>
    <!-- END Page Content -->
@endsection