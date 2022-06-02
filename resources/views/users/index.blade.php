@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Perfil Principal</h2>
            </div>

        </div>
        <div class="container">
                <p>Mi nombre es Angel Yair Rebollar Lopez</p>
                <p>Mi musica es el metal</p>
                <p>Soy estudiante de ISC en el TESVB</p>
                <p>GOOD BYE</p>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif


@endsection
