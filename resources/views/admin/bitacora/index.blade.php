@extends('adminlte::page')

@section('title', 'Bitacora')

@section('content_header')
    <h1>Historial de Bitacora</h1>
    <br>
    <a href="{{ route('admin.bitacora.create') }}" class="btn btn-danger">Generar Reporte</a>
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Administrador</th>
                        <th>Descripción</th>
                        <th>sujeto_tipo</th>
                        <th>Creado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $administrador }}</td>
                            <td>{{ $tag->description }}</td>
                            <td>{{ $tag->subject_type }}</td>
                            <td>{{ $tag->created_at }}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

{{-- @section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop --}}
