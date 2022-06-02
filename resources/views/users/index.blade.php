@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de usuarios </h2>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Nombre</th>
            <th>Cantidad Posts</th>

        </tr>
        <tbody>
            @foreach($data as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->cantidad}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>

@endsection
