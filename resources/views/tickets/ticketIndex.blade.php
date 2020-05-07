{{-- @extends('layouts.app') --}}
@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mis Ticktes</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Asunto</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Fecha Inicio</th>
                                    <th scope="col">Estatus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reportes as $reporte)
                                <tr>
                                    <th scope="row">{{$reporte->id}}</th>
                                    <td>
                                        <a href="{{route('reporte.show',$reporte->id)}}">
                                            {{$reporte->titulo}}
                                        </a>
                                    </td>
                                    <td>{{$reporte->descripcion}}</td>
                                    <td>{{$reporte->fecha_inicio->format('d/m/y')}}</td>
                                    <td>{{$reporte->estatus_id}}</td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <a href="{{action('ReporteController@create')}}" class="btn btn-success btn">Crear</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection