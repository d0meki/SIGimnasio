{{-- Entrenador --}}
<div class="form-group">
    {!! Form::label('persona_dni', 'Entrenador:') !!}
    <select class="custom-select dropdown-primary my-xl-auto form-control" aria-haspopup="true" aria-expanded="false"
        name="persona_dni" id="persona_dni">
        @foreach ($personas as $persona)
            <option class="dropdown-item" value="{{ $persona->dni }}">{{ $persona->nombre." ".$persona->apellido_p." ".$persona->apellido_m }}</option>
        @endforeach
    </select>
    @error('Entrenador')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
{{-- Disciplinas --}}
<div class="form-group">
    {!! Form::label('disciplina_id', 'Disciplina:') !!}
    <select class="custom-select dropdown-primary my-xl-auto form-control" aria-haspopup="true" aria-expanded="false"
        name="disciplina_id" id="disciplina_id">
        @foreach ($disciplinas as $disciplina)
            <option class="dropdown-item" value="{{ $disciplina->id }}">{{ $disciplina->nombre }}</option>
        @endforeach
    </select>
    @error('Entrenador')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
{{-- Horarios --}}
<div class="form-group">
    {!! Form::label('horario_id', 'Horario:') !!}
    <select class="custom-select dropdown-primary my-xl-auto form-control" aria-haspopup="true" aria-expanded="false"
        name="horario_id" id="horario_id">
        @foreach ($horarios as $horario)
            <option class="dropdown-item" value="{{ $horario->id }}">{{ $horario->hora_inicio." - ".$horario->hora_fin}}</option>
        @endforeach
    </select>
    @error('Entrenador')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('cupos', 'Cupos:') !!}
    {!! Form::text('cupos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese cupos...']) !!}
    @error('cupos')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>