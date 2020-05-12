@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Descripción Ticket: {{$reporte->titulo}}
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('ID Ticket') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nombre_tarea" value="{{$reporte->id}}"
                                disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nombre_tarea" value="{{$reporte->titulo}}"
                                disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Fecha Inicio') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="fecha_inicio"
                                value="{{$reporte->fecha_inicio->format('d/m/y')}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descripcion"
                            class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                        <div class="col-md-6">
                            <textarea type="text" class="form-control" name="descripcion"
                                disabled> {{$reporte->descripcion}}  </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prioridad" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="prioridad"
                                value="{{$reporte->area->nombre_area}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="categoria"
                            class="col-md-4 col-form-label text-md-right">{{ __('ID Personal Asignado') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="categoria" value="{{$reporte->user_asig_id}}"
                                disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="estatus" class="col-md-4 col-form-label text-md-right">{{ __('Estatus') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="estatus"
                                value="{{$reporte->estatus->nombre_estatus}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="{{route('reporte.edit',$reporte->id)}}" class="btn btn-primary btn">Editar</a>
                            @if (\Gate::allows('informatica'))
                            @can('propietario', $reporte)
                            <form action="{{route('reporte.destroy',$reporte->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn">Eliminar</button>
                            </form>
                            @endif
                            @endcan
                            <a href="{{action('ReporteController@index')}}" class="btn btn-link">
                                Listado
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endsection