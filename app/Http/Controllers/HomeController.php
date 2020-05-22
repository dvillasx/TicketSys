<?php

namespace App\Http\Controllers;

use App\Reporte;
use App\Tipo;
use Illuminate\Http\Request;
use \stdClass;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reportes =  Reporte::where('user_asig_id', '=', \Auth::id())->get();

        $obtenidos = Reporte::where('user_asig_id', '=', \Auth::id())->count();
        $terminados = Reporte::where('user_asig_id', '=', \Auth::id())
            ->where('estatus_id', '=', 1)
            ->count();
        $bloqueados = Reporte::where('user_asig_id', '=', \Auth::id())
            ->where('estatus_id', '=', 4)
            ->count();
        $pendientes = Reporte::where('user_asig_id', '=', \Auth::id())
            ->where(function ($q) {
                $q->where('estatus_id', '=', 2)
                    ->orWhere('estatus_id', '=', 3);
            })->count();

        $Mobtenidos = Reporte::where('user_id', '=', \Auth::id())->count();
        $Mterminados = Reporte::where('user_id', '=', \Auth::id())
            ->where('estatus_id', '=', 1)
            ->count();
        $Mbloqueados = Reporte::where('user_id', '=', \Auth::id())
            ->where('estatus_id', '=', 4)
            ->count();
        $Mpendientes = Reporte::where('user_id', '=', \Auth::id())
            ->where(function ($q) {
                $q->where('estatus_id', '=', 2)
                    ->orWhere('estatus_id', '=', 3);
            })->count();

        if ($pendientes > 10) {
            DB::table('area_user')
                ->where('user_id', '=', \Auth::id())
                ->update(['libre' => '1']);
        } else {
            DB::table('area_user')
                ->where('user_id', '=', \Auth::id())
                ->update(['libre' => '0']);
        }


        foreach ($reportes as $reporte) {
            $array[] = $reporte->tipo->nombre_tipo;
        }

        if (!empty($array)) {
            $counts = array_count_values($array);
        }





        // dd($counts);
        return view('home', compact(
            'obtenidos',
            'terminados',
            'pendientes',
            'bloqueados',
            'counts',
            'Mobtenidos',
            'Mterminados',
            'Mpendientes',
            'Mbloqueados'
        ));
    }
}
