@extends('adminlte::page')

@section('title', 'Recibo')

@section('content_header')
    <h1>Crear Recibo</h1>
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
            {{-- route donde se guardaran los datso ingresados en el formulario --}}
            {!! Form::open(['route' => 'admin.recibos.store']) !!}
            @include('admin.recibos.partials.form')
            <br>
            <div class="d-flex justify-content-center">
                <div class="d-flex">
                    <a href="{{ route('admin.recibos.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
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
