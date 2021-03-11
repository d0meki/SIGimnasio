<?php

namespace App\Http\Controllers;

use App\Models\MembresiaPlan;
use Illuminate\Http\Request;

class MembresiaPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = MembresiaPlan::all();
        return view('admin.planes.index', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.planes.create');
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
            'plan' => 'required',
            'precio' => 'required'
        ]);
        $tag = MembresiaPlan::create($request->all());
        return redirect()->route('admin.planes.index', compact('tag'))->with('Se Creo Exitosamente!!');
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
    public function edit(MembresiaPlan $tag)
    {
        return view('admin.planes.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembresiaPlan $tag)
    {
        $request->validate([
            'plan' => 'required',
            'precio' => 'required'
        ]);
        $tag->update($request->all());
        return redirect()->route('admin.planes.index', $tag)->with('Se actualizo Exitosamente!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembresiaPlan $tag)
    {
        $tag->delete();
        return redirect()->route('admin.planes.index')->with('info','Se elimino Exitosamente!!');
    }
}
