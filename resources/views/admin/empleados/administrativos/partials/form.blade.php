<div class="row">
    <div class="col-md-2">
        {!! Form::label('dni', 'DNI:') !!}
        {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese DNI...']) !!}
        @error('dni')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col">
        {!! Form::label('nombre', 'Nombre:') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre...']) !!}
        @error('Nombre')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col">
        {!! Form::label('apellido_p', 'Apellido_p:') !!}
        {!! Form::text('apellido_p', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Apellido paterno...'])
        !!}
        @error('Nombre')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col">
        {!! Form::label('apellido_m', 'Apellido_m:') !!}
        {!! Form::text('apellido_m', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Apellido materno...'])
        !!}
        @error('Nombre')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-2">
        {!! Form::label('edad', 'Edad:') !!}
        {!! Form::text('edad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Edad...']) !!}
        @error('Sueldo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    {{-- ---------------------- --}}
    <div class="col-md-2">
        {!! Form::label('sexo', 'Sexo:') !!}
        {!! Form::select('sexo', $sexo, null, ['class' => 'form-control']) !!}
        @error('sexo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    {{-- ------------------- --}}
    <div class="col-md-2">
        {!! Form::label('telefono', 'Telefono:') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Telefono...']) !!}
        @error('Sueldo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-4">
        {!! Form::label('correo', 'Correo:') !!}
        {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Correo...']) !!}
        @error('Sueldo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-3">
        {!! Form::label('domicilio', 'Domicilio:') !!}
        {!! Form::text('domicilio', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Domicilio...']) !!}
        @error('Cargo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-3">
        {!! Form::label('cargo', 'Cargo:') !!}
        {!! Form::text('cargo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Cargo...']) !!}
        @error('Cargo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-2">
        {!! Form::label('sueldo', 'Sueldo:') !!}
        {!! Form::text('sueldo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Sueldo...']) !!}
        @error('Sueldo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-2">
        {!! Form::label('tipo_A', 'Tipo:') !!}
        {!! Form::select('tipo_A', $tipo, null, ['class' => 'form-control','readonly']) !!}
        @error('Tipo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
