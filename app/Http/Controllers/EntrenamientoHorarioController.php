<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Support\Facades\DB;
use App\Models\Entrenamiento_horario;
use App\Models\Horario;
use App\Models\Persona;
use Illuminate\Http\Request;

class EntrenamientoHorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DB::table('entrenamiento_horarios')
            ->join('personas', 'persona_dni', '=', 'personas.dni')
            ->join('disciplinas', 'disciplina_id', '=', 'disciplinas.id')
            ->join('horarios', 'horario_id', '=', 'horarios.id')
            ->select('entrenamiento_horarios.id as id', 'personas.nombre as nombre', 'personas.apellido_p as apellido_p', 'personas.apellido_m as apellido_m', 'disciplinas.nombre as disciplina', 'horarios.hora_inicio as hora_inicio', 'horarios.hora_fin as hora_fin', 'entrenamiento_horarios.cupos as cupos')
            ->get();
        return view('admin.entrenamientos.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $personas = Persona::select('dni')->where('tipo_E', 1)->get();
        // $discplinas = Disciplina::select('dni')->where('tipo_E', 1)->get();
        $personas = Persona::all();
        $disciplinas = Disciplina::all();
        $horarios = Horario::all();
        return view('admin.entrenamientos.create', compact('personas', 'disciplinas', 'horarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = Entrenamiento_horario::create($request->all());
        return redirect()->route('admin.entrenamientos.index', compact('datos'))->with('info', 'Se Creo Exitosamente!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = Entrenamiento_horario::findOrFail($id);
        $personas = Persona::all();
        $disciplinas = Disciplina::all();
        $horarios = Horario::all();
        return view('admin.entrenamientos.edit', compact('datos', 'personas', 'disciplinas', 'horarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token', '_method']);
        Entrenamiento_horario::where('id', '=', $id)->update($datos);
        $datos = request()->except('_token');
        return redirect()->route('admin.entrenamientos.index', compact('datos'))->with('info', 'Se Actualizo Exitosamente!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrenamiento_horario $tag)
    {
        $tag->delete();
        return redirect()->route('admin.entrenamientos.index')->with('info', 'Se elimino Exitosamente!!');
    }
}
