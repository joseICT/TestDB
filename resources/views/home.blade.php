@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ingresaste</br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    boton modal
                    @extends('vistaModal')
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
