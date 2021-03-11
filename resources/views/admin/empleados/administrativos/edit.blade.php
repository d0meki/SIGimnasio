@extends('adminlte::page')

@section('title', 'Administrativos')

@section('content_header')
    <h1>Editar Administrativo</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($administrativo, ['route' => ['admin.administrativos.update', $administrativo], 'method' =>
            'put']) !!}
            @include('admin.empleados.administrativos.partials.form')
            <br>
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
