@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @role('admin')
                        I am a admin!
                    @else
                        @role('aluno')
                            I am a aluno...
                        @else
                            I am a PROFESSOR...
                        @endrole
                    @endrole
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
