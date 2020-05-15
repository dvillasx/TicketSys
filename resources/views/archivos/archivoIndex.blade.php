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
                    <div class="card">
                        <div class="card-header">Archivos Cargados</div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Archivo</th>
                                    <th colspan="2">Acciones</th>
                                </tr>

                                @foreach($archivos as $archivo)
                                <tr>
                                    <td>{{ $archivo->id_reporte }}</td>
                                    <td>{{ $archivo->nombre_original }}</td>
                                    <td>
                                        <a href="{{ route('archivo.download', $archivo->id) }}"
                                            class="btn btn-sm btn-primary">Descargar</a>
                                    </td>
                                    <td>
                                        <!-- Formulario para eliminar archivo -->
                                        {!! Form::open(['route' => ['archivo.delete', $archivo->id]]) !!}
                                        <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                            <a href="{{action('ArchivoController@create')}}" class="btn btn-success btn">Subir
                                Evidencia</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection