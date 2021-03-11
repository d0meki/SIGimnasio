<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre...']) !!}
    @error('nombre')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese descripcion...']) !!}
    @error('descripcion')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
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
</div>
