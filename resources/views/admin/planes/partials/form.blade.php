<div class="form-group">
    {!! Form::label('plan', 'Plan:') !!}
    {!! Form::text('plan', null, ['class' => 'form-control', 'placeholder' => 'Ingrese plan...',]) !!}
    @error('plan')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::text('precio', null, ['class' => 'form-control', 'placeholder' => 'Ingrese precio...']) !!}
    @error('precio')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>