<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use App\Models\MembresiaPlan;
use Illuminate\Http\Request;

class MembresiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membresias = Membresia::join('membresia_plans', 'membresia_plan_id', '=', 'membresia_plans.id')
            ->select('membresias.id', 'membresias.nombre', 'membresias.descripcion', 'membresia_plans.plan as plan','membresia_plans.precio as precio')
            ->get();

        return view('admin.membresias.index', compact('membresias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planes = MembresiaPlan::all();
        $membresias = Membresia::all();
        return view('admin.membresias.create',compact('planes','membresias'));
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
            'descripcion' => 'required',
            'membresia_plan_id' => 'required'
        ]);
        $tag = Membresia::create($request->all());
        return redirect()->route('admin.membresias.index', compact('tag'))->with('info','Se Creo Exitosamente!!');
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
    public function edit(Membresia $tag)
    {
        $planes = MembresiaPlan::all();
        return view('admin.membresias.edit', compact('tag','planes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Membresia $tag)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'membresia_plan_id' => 'required'
        ]);

        $tag->update($request->all());
        return redirect()->route('admin.membresias.index', $tag)->with('info','Se actualizo Exitosamente!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membresia $tag)
    {
        $tag->delete();
        return redirect()->route('admin.membresias.index')->with('info','Se elimino Exitosamente!!');
    }
}
