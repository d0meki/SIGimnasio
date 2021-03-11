<div class="row justify-content-center">
    <div class="col-md-4">
        {!! Form::label('cliente_dni', 'DNI:') !!}
        {!! Form::text('cliente_dni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese DNI...']) !!}
        @error('dni')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-2">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::text('fecha', date('Y-m-d H:i:s'), ['class' => 'form-control', 'placeholder' => 'Ingrese fecha...', 'readonly']) !!}
        @error('descripcion')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-1">
        {!! Form::label('asistencia', 'Asistencia:') !!}
        {!! Form::text('asistencia', 1, ['class' => 'form-control', 'placeholder' => 'Ingrese asistencia...', 'readonly']) !!}
        @error('descripcion')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
{{-- <div class="form-group">
    {!! Form::label('membresia_plan_id', 'Plan:') !!}
    <select class="custom-select dropdown-primary my-xl-auto form-control" aria-haspopup="true" aria-expanded="false"
        name="membresia_plan_id" id="membresia_plan_id">
        @foreach ($planes as $plan)
            <option class="dropdown-item" value="{{ $plan->id }}">{{ $plan->plan }}</option>
        @endforeach
    </select>
    @error('plan')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div> --}}
