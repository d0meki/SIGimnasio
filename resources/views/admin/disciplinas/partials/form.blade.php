<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre...',]) !!}
    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

{{-- <div class="form-group">
    {!! Form::label('descripcion', 'descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese descripcion...']) !!}
    @error('descripcion')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div> --}}

<div class="form-group">
    {!! Form::label('seccion_id', 'seccion:') !!}

    {{-- {!! Form::select('nombreSC', $seccs, null, ['class' => 'form-control']) !!}
    --}}
    <select class="custom-select dropdown-primary my-xl-auto form-control" aria-haspopup="true"
        aria-expanded="false" name="seccion_id" id=seccion_id">
        {{-- <option value="selected">Elija una seccion</option> --}}
        @foreach ($secciones as $secc)
            <option class="dropdown-item" value="{{ $secc->id }}">{{ $secc->nombre }}</option>
        @endforeach
    </select>
    @error('nombreSC')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>