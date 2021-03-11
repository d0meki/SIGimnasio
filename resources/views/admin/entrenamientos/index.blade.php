@extends('adminlte::page')

@section('title', 'entrenamientos')

@section('content_header')
    <h1>Mostrar listado de entrenamientos</h1>
    <br>
    <a href="{{ route('admin.entrenamientos.create') }}" class="btn btn-secondary btn-sm">Crear</a>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    {{--  --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Entrenador</th>
                        <th>Disciplina</th>
                        <th>Horario</th>
                        <th>Cupos</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $dato)
                        <tr>
                            <td>{{ $dato->id }}</td>
                            <td>{{ $dato->nombre . ' ' . $dato->apellido_p . ' ' . $dato->apellido_m }}</td>
                            <td>{{ $dato->disciplina }}</td>
                            <td>{{ $dato->hora_inicio . ' - ' . $dato->hora_fin }}</td>
                            <td>{{ $dato->cupos }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.entrenamientos.edit', $dato->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.entrenamientos.destroy', $dato->id) }}" method="POST">
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
