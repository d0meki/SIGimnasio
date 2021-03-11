@extends('adminlte::page')

@section('title', 'Asistencias')

@section('content_header')
    <h1>Registrar Asistencia</h1>
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
            {{-- route donde se guardaran los datos ingresados en el formulario --}}
            {!! Form::open(['route' => 'admin.asistencias.store']) !!}
            @include('admin.asistencias.partials.form')
            <br>
            <div class="d-flex justify-content-center">
                <div class="d-flex">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
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
