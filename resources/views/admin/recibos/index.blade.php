@extends('adminlte::page')

@section('title', 'Planes')

@section('content_header')
    <h1>Mostrar listado de Planes</h1>
    <br>
    <a href="{{ route('admin.recibos.create') }}" class="btn btn-secondary btn-sm">Crear</a>
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
                        <th>NRO</th>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th>Administrativo</th>
                        {{-- <th>Sección</th> --}}
                        {{-- <th>Horario</th> --}}
                        <th>Monto</th>
                        <th>Vencimieto</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recibos as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->fecha }}</td>
                            <td>{{ $tag->cliente }}</td>
                            <td>{{ $tag->nombre . ' ' . $tag->apellido_p . ' ' . $tag->apellido_m }}</td>
                            <td>{{ $tag->monto }}</td>
                            <td>{{ $tag->vencimiento }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.planes.edit', $tag->id) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <div class="d-flex">
                                    {{-- corregir ruta --}}
                                    <a href="{{ route('admin.recibos.show', $tag->id) }}" class="btn btn-danger"
                                        method="POST">Generar Recibo</a>
                                </div>
                            </td>
                        </tr>
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
