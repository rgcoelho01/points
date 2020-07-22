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
                        <div class="col-md-12">
                            <a class="block block-link-pop text-center bg-earth" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-center mt-10 d-sm-block">
                                        <i class="si si-trophy fa-4x text-earth-light"></i>
                                    </div>
                                    <div class="font-size-h4 font-w600 text-white"><span data-toggle="countTo" data-speed="1000" data-to="{{ $aluno->pontos }}">0</span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Points</div>
                                </div>
                            </a>
                        </div>

                        <!-- Row #4 -->
                        <div class="col-md-4">
                            <div class="block block-transparent bg-info">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-star-o fa-4x text-info-light"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-white">Ranking</div>
                                        <div class="font-size-h4 font-w600 text-white">{{ $ranking }}</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-info" href="javascript:void(0)">
                                                <i class="fa fa-group mr-5"></i> Top 10
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block block-transparent bg-gd-lake">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-thumbs-o-up fa-4x text-success-light"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-white">Respostas Corretas</div>
                                        <div class="font-size-h4 font-w600 text-white">{{ $aluno->acertos }}</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                                <i class="fa fa-arrow-down mr-5"></i>Verificar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block block-transparent bg-danger">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-thumbs-o-down fa-4x text-info-light"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-white">Respostas Erradas</div>
                                        <div class="font-size-h4 font-w600 text-white">{{ $aluno->erros }}</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-danger" href="javascript:void(0)">
                                                <i class="fa fa-arrow-down mr-5"></i>Verificar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #4 -->
                        <div class="col-md-12">
                            <div class="block block-transparent bg-gd-sea">
                                <div class="block-content block-content-full">
                                    <div class="font-size-h3 font-w600 text-white">Progresso</div>
                                    <div class="progress mb-5" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{ $progresso->qp }}%;" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="font-size-sm font-w600 mb-20  text-white">
                                        <span class="font-w700">{{ $progresso->qr }}</span> de <span class="font-w700">{{ $progresso->qt }}</span> Questões
                                    </p>
                                </div>
                            </div>
                        </div>
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
                                        @foreach ($alunos as $top)
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