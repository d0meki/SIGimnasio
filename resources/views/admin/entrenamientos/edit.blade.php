@extends('adminlte::page')

@section('title', 'Entrenamientos')

@section('content_header')
    <h1>Editar entrenamientos</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($datos, ['route' => ['admin.entrenamientos.update', $datos], 'method' => 'put']) !!}
            @include('admin.entrenamientos.partials.form')
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
