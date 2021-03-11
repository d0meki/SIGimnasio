<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use App\Models\Persona;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Bitacora::all();
        $admin = Persona::select('nombre', 'apellido_p', 'apellido_m')->where('tipo_A', 1)->get();
        foreach ($admin as $dat) {
            $administrador = $dat->nombre . ' ' . $dat->apellido_p . ' ' . $dat->apellido_m;
        }
        return view('admin.bitacora.index', compact('datos', 'administrador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = Bitacora::all();
        $admin = Persona::select('nombre', 'apellido_p', 'apellido_m')->where('tipo_A', 1)->get()->pluck('nombre', 'apellido_p', 'apellido_m');
        $pdf = PDF::loadview('admin.bitacora.bitacoraPDF', compact('datos', 'admin'));
        return $pdf->stream();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
