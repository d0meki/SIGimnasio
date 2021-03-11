<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::where('tipo_A',1)->get();
        return view('admin.empleados.administrativos.index', compact('personas'));
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
        $tipo = ['1' => 'Administrativo'];
        return view('admin.empleados.administrativos.create', compact('personas', 'sexo', 'tipo'));
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
        return redirect()->route('admin.administrativos.index', compact('datos'))->with('info', 'Se Creo Exitosamente!!');
        // return response()->json($datos);
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
        $tipo = ['1' => 'Administrativo'];
        // return $administrativo;
        return view('admin.empleados.administrativos.edit', compact('administrativo', 'sexo', 'tipo'));
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
        return redirect()->route('admin.administrativos.index', compact('datos'))->with('info', 'Se Actualizo Exitosamente!!');
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
        return redirect()->route('admin.administrativos.index')->with('info', 'Se elimino Exitosamente!!');
    }
}
