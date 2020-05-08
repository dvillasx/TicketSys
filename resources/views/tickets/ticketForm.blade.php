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
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        @isset($reporte)
                        <h6 class="m-0 font-weight-bold text-primary">Editar Ticket</h6>
                        @else
                        <h6 class="m-0 font-weight-bold text-primary">Nuevo Ticket</h6>
                        @endisset
                    </div>
                    <div class="card-body">
                        @isset($reporte)
                        {!! Form::model($reporte, ['route' => ['reporte.update', $reporte->id], 'method' => 'PATCH'])!!}
                        @else
                        {!! Form::open(['route' => 'reporte.store']) !!}
                        @endisset

                        <div class="form-group row">
                            {!! Form::label('titulo', 'Asunto', ['class' => 'col-md-4 col-form-label
                            text-md-right']);!!}
                            <div class="col-md-6">
                                @isset($reporte)
                                {!! Form::text('titulo', null, ['class' => 'form-control', 'disabled']); !!}
                                @else
                                {!! Form::text('titulo', null, ['class' => 'form-control']); !!}
                                @endisset
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion"
                                class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                {!! Form::textarea('descripcion', null, ['class' => 'form-control','rows' => '2']);
                                !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_id" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    @isset($reporte)
                                    <input type="text" class="form-control" name="area_id"
                                        value="{{$reporte->area->nombre_area ?? null}}" disabled>
                                    @else
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="area_id">Opciones</label>
                                    </div>
                                    {!! Form::select('area_id', $areas ?? '', null, ['class' => 'custom-select']);
                                    !!}
                                    @endisset
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipo_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    @isset($reporte)
                                    <input type="text" class="form-control" name="tipo_id"
                                        value="{{$reporte->tipo->nombre_tipo ?? null}}" disabled>
                                    @else
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="tipo_id">Opciones</label>
                                    </div>
                                    {!! Form::select('tipo_id', $tipos ?? '', null, ['class' => 'custom-select']);
                                    !!}
                                    @endisset


                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prioridad_id"
                                class="col-md-4 col-form-label text-md-right">{{ __('Prioridad') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="prioridad_id">Opciones</label>
                                    </div>
                                    {!! Form::select('prioridad_id', $prioridades ?? '', null, ['class' =>
                                    'custom-select']); !!}
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            {!! Form::label('user_asig_id_l', 'ID Personal Asignado', ['class' => 'col-md-4
                            col-form-label
                            text-md-right']);
                            !!}
                            <div class="col-md-6">
                                {{-- <input type="text" class="form-control" name="user_asig_id" disabled> --}}
                                {!! Form::text('user_asig_id', null, ['class' => 'form-control', 'readonly']); !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                <button type="submit"
                                    class="btn {{isset($reporte) && $reporte != null ? 'btn-primary' : 'btn-success'}}">
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
        </div>
        <script src={{ asset('vendor/jquery-easing/jquery.easing.min.js') }}></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script>
            $(function() {
                    $('select[name=area_id]').change(function() {
                        var url = '{{ url('area') }}' + '/'+ $(this).val() + '/tipo/';

        $.get(url, function(data) {
        var select = $('select[name= tipo_id]');

        select.empty();

        $.each(data,function(key, value) {
        select.append('<option value=' + value.id + '>' + value.nombre_tipo + '</option>');
        });
        });
        });
        });
        </script>

        <script>
            $(function() {
                    $('select[name=area_id]').change(function() {
                        var url = '{{ url('area') }}' + '/'+ $(this).val() + '/asig/';

                        $.get(url, function(data) {   
                            
                            $.each(data,function(key, value) {

                                $('input[name="user_asig_id"]').val(value.user_id);
                            });
                        });
                    });
                    });
        </script>


        @endsection