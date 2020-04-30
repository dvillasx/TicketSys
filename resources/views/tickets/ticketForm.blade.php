@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
                <div class="card-header">Nuevo Ticket</div>
                <div class="card-body">
                    @isset($tarea)
                    {!! Form::model($tarea, ['route' => ['reporte.update', $tarea->id], 'method' => 'PATCH']) !!}
                    @else
                        {!! Form::open(['route' => 'reporte.store']) !!}
                    @endisset
                        <div class="form-group row">
                            {!! Form::label('titulo', 'Asunto', ['class' => 'col-md-4 col-form-label text-md-right']); !!}
                            <div class="col-md-6">
                                {!! Form::text('titulo', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                {!! Form::textarea('descripcion', null, ['class' => 'form-control','rows' => '2']); !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_id" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="area_id">Opciones</label>
                                    </div>
                                    {!! Form::select('area_id', $areas ?? '', null, ['class' => 'custom-select']); !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipo_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="area_id">Opciones</label>
                                    </div>
                                    {!! Form::select('tipo_id', $tipos ?? '', null, ['class' => 'custom-select']); !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prioridad_id" class="col-md-4 col-form-label text-md-right">{{ __('Prioridad') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="area_id">Opciones</label>
                                    </div>
                                    {!! Form::select('prioridad_id', $prioridades ?? '', null, ['class' => 'custom-select']); !!}
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            
                                <button type="submit" class="btn {{isset($tarea) && $tarea != null ? 'btn-primary' : 'btn-success'}}" >
                                    {{ __('Guardar Ticket') }}
                                </button>

                                
                                <a href="{{action('ReporteController@index')}}" class="btn btn-link">
                                    Listado
                                </a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @endsection
