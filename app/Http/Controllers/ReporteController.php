<?php

namespace App\Http\Controllers;

use App\Area;
use App\Mail\MailReporte;
use App\Prioridad;
use App\Reporte;
use App\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReporteController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportes = Reporte::all();
        return view('tickets.ticketIndex', compact('reportes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all()->pluck('nombre_area', 'id');
        $tipos = Tipo::all()->pluck('nombre_tipo', 'id');
        $prioridades = Prioridad::all()->pluck('nombre_prioridad', 'id');
        return view('tickets.ticketForm', compact('areas', 'tipos', 'prioridades'));
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
            'titulo' => 'required',
            'descripcion' => 'required',
            'user_asig_id' => 'required|int',
            'area_id' => 'required|int',
            'tipo_id' => 'required|int',
            'prioridad_id' => 'required|int',
        ]);
        $reporte = new Reporte();
        $reporte->user_id = \Auth::id();
        $reporte->titulo = $request->titulo;
        $reporte->descripcion = $request->descripcion;
        $reporte->user_asig_id = $request->user_asig_id;
        $reporte->area_id = $request->area_id;
        $reporte->tipo_id = $request->tipo_id;
        $reporte->prioridad_id = $request->prioridad_id;
        $reporte->save();

        // dd($request);
        // $request->merge(['user_id' => \Auth::id()]);
        // Reporte::create($request->all());

        Mail::to(\Auth::user()->email)->send(new MailReporte($reporte));


        return redirect()->route('reporte.index')
            ->with([
                'mensaje' => 'Ticket creado con exito',
                'clase-alerta' => 'alert-success'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        return view('tickets.ticketShow', compact('reporte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        $areas = Area::all()->pluck('nombre_area', 'id');
        $tipos = Tipo::all()->pluck('nombre_tipo', 'id');
        $prioridades = Prioridad::all()->pluck('nombre_prioridad', 'id');

        return view('tickets.ticketForm', compact('reporte', 'areas', 'tipos', 'prioridades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        $request->validate([
            'descripcion' => 'required',
            'prioridad_id' => 'required|int',
        ]);
        Reporte::where('id', $reporte->id)->update($request->except('_token', '_method'));
        return redirect()->route('reporte.show', $reporte->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {

        //    if (\Gate::allows('administrador', $reporte)) {
        //     $reporte->delete();
        // }
        $reporte->delete();
        return redirect()->route('reporte.index')->with([
            'mensaje' => 'Ticket eliminado con exito',
            'clase-alerta' => 'alert-warning'
        ]);
    }
}
