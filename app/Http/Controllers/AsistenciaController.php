<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Recibo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.asistencias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.asistencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // count
        $count = DB::table('asistencias')->where('cliente_dni', $request->cliente_dni)->count();

        $dato = DB::table('membresia_recibo')
            ->join('recibos', 'recibos.id', '=', 'recibo_id')
            ->join('membresias', 'membresias.id', '=', 'membresia_id')
            ->join('membresia_plans', 'membresia_plans.id', '=', 'membresias.membresia_plan_id')
            ->select('membresia_plans.plan')->where('recibos.cliente_dni', $request->cliente_dni)->get();
        switch ($dato) {
            case 'Diario':
                return 1;
                break;
            case 'Semanal':
                return 7;
                break;
            case 'Mensual':
                return 30;
                break;

            default:
                # code...
                break;
        }
        // if (count > plan) {
        //     # code...
        //     // se registra
        // } else {
        //     # code...
        //     // no se registra
        // }
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
