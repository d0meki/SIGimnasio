<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;
use App\Models\Persona;

class EntrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $personas = Persona::join('direccions', 'direccion_id', '=', 'direccions.id')
        //     ->select('personas.dni', 'personas.nombre', 'personas.apellido_p', 'personas.apellido_m', 'personas.edad', 'personas.telefono', 'personas.correo', 'personas.cargo', 'personas.sueldo', 'direccions.ubicacion as ubicacion')->where('personas.tipo_E',1)->get();
        // return $personas;
        $personas = Persona::where('tipo_E', 1)->get();
        return view('admin.empleados.entrenadores.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::all();
        $sexo = ['F' => 'Femenino', 'M' => 'Masculino'];
        $tipo = ['1' => 'Entrenador'];
        return view('admin.empleados.entrenadores.create', compact('personas', 'sexo', 'tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datos = request()->except('_token');
        $datos = Persona::create($request->all());
        // Persona::insert($datos);
        return redirect()->route('admin.entrenadores.index', compact('datos'))->with('info', 'Se Creo Exitosamente!!');
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
        return view('admin.empleados.entrenadores.edit', compact('administrativo', 'sexo', 'tipo'));
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
        Persona::where('dni', '=', $id)->update($datos);
        $datos = request()->except('_token');
        return redirect()->route('admin.entrenadores.index', compact('datos'))->with('info', 'Se Actualizo Exitosamente!!');
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
        return redirect()->route('admin.entrenadores.index')->with('info', 'Se elimino Exitosamente!!');
    }
}
