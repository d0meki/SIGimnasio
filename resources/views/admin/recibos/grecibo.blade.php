<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
    <title>Document</title>
    <style>
        .titleRecibo {
            color: blue;
        }

        .column {
            float: left;
            width: 43.33%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

    </style>
</head>

<body>
    @foreach ($datos as $item)
        <div class="row">
            <div class="column">
                <h3 class="titleRecibo">RECIBO DE PAGO</h3>
            </div>
            <div class="column">
                <h3>FECHA: {{ date('d-m-y') }}</h3>
            </div>
            <div class="column">
                <h3>Nro. {{$item->id}}</h3>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="column">
                    <h3>Cliente: {{$item->cliente}}</h3>
                    <h3>Cantidad: {{$item->monto}}</h3>
                    <h3>Concepto: nose</h3>
                    <h3>Recibo por: {{$item->nombre." ".$item->apellido_p." ".$item->apellido_m}}</h3>
                </div>
                <div class="column">
                    <h3>Monto: {{$item->monto}}</h3>
                </div>
            </div>
        </div>
    @endforeach
</body>

</html>
