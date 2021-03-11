<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Membresia;
use App\Models\MembresiaPlan;
use App\Models\Recibo;
use App\Models\Persona;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReciboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recibos = Recibo::join('clientes', 'cliente_dni', '=', 'clientes.dni')->join('personas', 'persona_dni', '=', 'personas.dni')
            ->select('recibos.id', 'recibos.fecha', 'clientes.nombre as cliente', 'personas.nombre as nombre', 'personas.apellido_p as apellido_p', 'personas.apellido_m as apellido_m', 'recibos.monto as monto', 'recibos.fecha_fin as vencimiento')
            ->get();

        // return $recibos;  
        return view( 'admin.recibos.index', compact('recibos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $personas = Persona::where('tipo_A', 1)->get();
        $membresias = Membresia::join('membresia_plans', 'membresia_plan_id', '=', 'membresia_plans.id')
            ->select('membresias.id', 'membresias.nombre', 'membresias.descripcion', 'membresia_plans.plan as plan', 'membresia_plans.precio as precio')
            ->get();

        return view('admin.recibos.create', compact('clientes', 'membresias', 'personas'));
        // return DB::select('select precio from membresia_plans where id = ?', [1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = Recibo::create($request->all());
        // $precio = MembresiaPlan::select('id')->where('precio', $request->monto)->get();
        $precio = DB::table('membresias')->join('membresia_plans', 'membresia_plan_id', '=', 'membresia_plans.id')->select('membresias.id')->where('membresia_plans.precio', $request->monto)->get()->pluck('id');
        $datos->membresias()->attach($precio);
        return redirect()->route('admin.recibos.index', $datos)->with('Se creo Exitosamente!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Recibo::join('clientes', 'cliente_dni', '=', 'clientes.dni')->join('personas', 'persona_dni', '=', 'personas.dni')
            ->select('recibos.id', 'recibos.fecha', 'clientes.nombre as cliente', 'personas.nombre as nombre', 'personas.apellido_p as apellido_p', 'personas.apellido_m as apellido_m', 'recibos.monto as monto', 'recibos.fecha_fin as vencimiento')
            ->where('recibos.id', $id)->get();
        $pdf = PDF::loadview('admin.recibos.grecibo', compact('datos'));
        return $pdf->stream();
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
