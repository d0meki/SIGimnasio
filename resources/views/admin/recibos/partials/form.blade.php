<div class="row justify-content-center">
    <div class="col-md-6">
        {!! Form::label('cliente_dni', 'Cliente:') !!}
        <select class="custom-select dropdown-primary my-xl-auto form-control" aria-haspopup="true" aria-expanded="false"
            name="cliente_dni" id="cliente_dni">
            @foreach ($clientes as $cliente)
                <option class="dropdown-item" value="{{ $cliente->dni }}">{{ $cliente->nombre }}</option>
            @endforeach
        </select>
        @error('nombre')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-6">
        {!! Form::label('persona_dni', 'Administrativo:') !!}
        <select class="custom-select dropdown-primary my-xl-auto form-control" aria-haspopup="true" aria-expanded="false"
            name="persona_dni" id="persona_dni">
            @foreach ($personas as $persona)
                <option class="dropdown-item" value="{{ $persona->dni }}">{{ $persona->nombre }}</option>
            @endforeach
        </select>
        @error('nombre')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-4">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::text('fecha', date("y-m-d"), ['class' => 'form-control', 'placeholder' => 'Ingrese fecha...','readonly']) !!}
        @error('descripcion')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-4">
        {!! Form::label('monto', 'Monto:') !!}
        <select class="custom-select dropdown-primary my-xl-auto form-control" aria-haspopup="true" aria-expanded="false"
            name="monto" id="monto">
            @foreach ($membresias as $membresia)
                <option class="dropdown-item" value="{{ $membresia->precio }}">{{$membresia->nombre."--".$membresia->precio."Bs"}}</option>
            @endforeach 
        </select>
        @error('nombre')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-4">
        {!! Form::label('fecha_fin', 'Fecha Vencimiento:') !!}
        {!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}
        @error('descripcion')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>