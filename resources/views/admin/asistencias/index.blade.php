@extends('adminlte::page')

@section('title', 'clientes')

@section('content_header')
    <h1>Mostrar Asistencias</h1>
    <br>
    <a href="{{ route('admin.asistencias.create') }}" class="btn btn-secondary btn-sm">Crear</a>
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
                        <th>ID</th>
                        <th>Fecha Hora</th>
                        <th>Cliente</th>
                        <th>Asistencia</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($clientes as $tag)
                        <tr>
                            <td>{{ $tag->dni }}</td>
                            <td>{{ $tag->nombre }}</td>
                            <td>{{ $tag->telefono }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.asistencias.edit', $tag) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.asistencias.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="summit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}
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
