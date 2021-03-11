@extends('adminlte::page')

@section('title', 'Entrenadores')

@section('content_header')
    <h1>Mostrar listado de Entrenadores</h1>
    <br>
    <a href="{{ route('admin.entrenadores.create') }}" class="btn btn-secondary btn-sm">Crear</a>
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
                        <th>DNI</th>
                        <th>Nombre</th>
                        {{-- <th>apellido_p</th> --}}
                        {{-- <th>apellido_m</th> --}}
                        <th>Edad</th>
                        {{-- <th>sexo</th> --}}
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Domicilio</th>
                        <th>Sueldo</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $tag)
                        <tr>
                            <td>{{ $tag->dni }}</td>
                            <td>{{ $tag->nombre." ".$tag->apellido_p." ".$tag->apellido_m }}</td>
                            {{-- <td>{{ $tag->apellido_p }}</td> --}}
                            {{-- <td>{{ $tag->apellido_m }}</td> --}}
                            <td>{{ $tag->edad }}</td>
                            {{-- <td>{{ $tag->sexo }}</td> --}}
                            <td>{{ $tag->telefono }}</td>
                            <td>{{ $tag->correo }}</td>
                            <td>{{ $tag->domicilio }}</td>
                            <td>{{ $tag->sueldo }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.entrenadores.edit', $tag) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('admin.entrenadores.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="summit">Eliminar</button>
                                </form>
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
