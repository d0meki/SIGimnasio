<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $personas = Persona::join('direccions', 'direccion_id', '=', 'direccions.id')
        //     ->select('personas.dni', 'personas.nombre', 'personas.apellido_p', 'personas.apellido_m', 'personas.edad', 'personas.sexo','personas.telefono', 'personas.correo', 'personas.cargo', 'personas.sueldo','personas.tipo_A','personas.tipo_E', 'direccions.ubicacion as ubicacion')->get();
        // // $personas = DB::select('select personas.*, direccions.ubicacion as ubicacion from personas,direccions where personas.direccion_id = direccions.id');
        $personas = Persona::all();
        return view('admin.empleados.personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $administrativo = Persona::findOrFail($id);
        $sexo = ['F' => 'Femenino', 'M' => 'Masculino'];
        $tipo = ['1' => 'Entrenador'];
        // return $administrativo;
        if ($administrativo->tipo_A == 1) {
            return view('admin.empleados.administrativos.edit', compact('administrativo', 'sexo', 'tipo'));
        } else {
            if ($administrativo->tipo_E == 1) {
                return view('admin.empleados.entrenadores.edit', compact('administrativo', 'sexo', 'tipo'));
            }
        }
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
        //corregir
        $datos = request()->except(['_token', '_method']);
        Persona::where('dni', '=', $id)->update($datos);
        $datos = request()->except('_token');
        return redirect()->route('admin.personas.index', compact('datos'))->with('info', 'Se Actualizo Exitosamente!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $tag)
    {
        $tag->delete();
        return redirect()->route('admin.personas.index')->with('info', 'Se elimino Exitosamente!!');
    }
}
