{{-- @extends('layouts.app') --}}
@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mis Evidencias</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID Ticket</th>
                            <th>Archivo</th>
                            <th>Acciones</th>
                        </tr>

                        @foreach($archivos as $archivo)
                        @can('asignado', $archivo)
                        <tr>
                            <td>{{ $archivo->id_origen }}</td>
                            <td>{{ $archivo->nombre_original }}</td>
                            <td>
                                <a href="{{ route('archivo.download', $archivo->id) }}"
                                    class="btn btn-sm btn-primary">Descargar</a>
                            </td>
                        </tr>
                        @endcan
                        @endforeach

                    </table>

                </div>
            </div>
        </div>

        @endsection