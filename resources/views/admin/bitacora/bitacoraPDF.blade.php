<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <title>Historial</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            width: 100%
        }

    </style>
</head>

<body>
    <div class="card">
        <h1>Historial de Bitacora</h1>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>log_name</th>
                        <th>Descripción</th>
                        <th>sujeto_tipo</th>
                        <th>causer_type</th>
                        <th>Creado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->log_name }}</td>
                            <td>{{ $tag->description }}</td>
                            <td>{{ $tag->subject_type }}</td>
                            <td>{{ $tag->causer_type }}</td>
                            <td>{{ $tag->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
