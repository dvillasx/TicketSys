<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\Reporte;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{

    public function index()
    {
        $archivos = Archivo::all();
        return view('archivos.archivoIndex', compact('archivos'));
    }

    public function create()
    {
        $reportes = Reporte::all()->pluck('titulo', 'id', 'id_user_asig');
        return view('archivos.archivoForm', compact('reportes'));
    }
    public function upload(Request $request)
    {
        // dd($request);
        $request->validate([
            'reporte_id' => 'required|int',
            'mi_archivo' => 'required',
        ]);
        if ($request->mi_archivo->isValid()) { //Valida carga

            //Guarda en storage/app/archivos_cargados
            $nombreHash = $request->mi_archivo->store('archivos_cargados');

            $reporte = Reporte::where('id', '=', $request->reporte_id)->first();

            //Crea registro en tabla archivos
            Archivo::create([
                'nombre_original' => $request->mi_archivo->getClientOriginalName(),
                'nombre_hash' => $nombreHash,
                'mime' => $request->mi_archivo->getClientMimeType(),
                'tamaño' => $request->mi_archivo->getSize(),
                'id_origen' => $request->reporte_id,
                'id_user' => \Auth::id(),
                'origen_tipo' => "Ticket",
                'id_user_asig' => $reporte->user_asig_id,

            ]);
        }

        return redirect()->route('archivo.index')
            ->with([
                'mensaje' => 'Evidencia guardada con exito',
                'clase-alerta' => 'alert-success'
            ]);
    }

    public function download(Archivo $archivo)
    {
        //Obtiene ruta del archivo
        $rutaArchivo = storage_path('app/' . $archivo->nombre_hash);

        //La respuesta contiene el archivo con el tipo de documento
        return response()->download($rutaArchivo, $archivo->original, ['Content-Type' => $archivo->mime]);
    }

    public function delete(Archivo $archivo)
    {
        $rutaArchivo = storage_path($archivo->nombre_hash);

        //Verifica la existencia del archivo
        if (\Storage::exists($archivo->nombre_hash)) {
            \Storage::delete($archivo->nombre_hash); //Elimina archivo
            $archivo->delete(); //Elimina registro en tabla
        }

        return redirect()->route('archivo.index')->with([
            'mensaje' => 'Evidencia eliminada con exito',
            'clase-alerta' => 'alert-warning'
        ]);
    }

    public function indexa()
    {
        $archivos = Archivo::all();
        return view('archivos.archivoAsigIndex', compact('archivos'));
    }
}
