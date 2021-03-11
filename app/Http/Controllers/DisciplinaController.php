<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Seccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplinas = Disciplina::join('seccions', 'seccion_id', '=', 'seccions.id')
            ->select('disciplinas.id','disciplinas.nombre as nombre', 'seccions.nombre as seccion')
            ->get();
        return view('admin.disciplinas.index', compact('disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $secciones = Seccion::all();
        $disciplinas = Disciplina::all();
        return view('admin.disciplinas.create', compact('secciones', 'disciplinas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'seccion_id' => 'required'
        ]);
        $tag = Disciplina::create($request->all());
        return redirect()->route('admin.disciplinas.index', compact('tag'))->with('Se Creo Exitosamente!!');
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
    public function edit(Disciplina $tag)
    {
        $secciones = Seccion::all();
        return view('admin.disciplinas.edit', compact('tag','secciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Disciplina $tag)
    {
        $request->validate([
            'nombre' => 'required',
            'seccion_id' => 'required'
        ]);

        $tag->update($request->all());
        return redirect()->route('admin.disciplinas.index', $tag)->with('Se actualizo Exitosamente!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(seccion $tag)
    {
        $tag->delete();
        return redirect()->route('admin.disciplinas.index')->with('info','Se elimino Exitosamente!!');
    }
}
