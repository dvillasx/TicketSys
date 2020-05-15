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
                <div class="card shadow mb">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Subir Evidencia</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('archivo.upload') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="reporte_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tickets') }}</label>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="reporte_id">Opciones</label>
                                        </div>
                                        {!! Form::select('reporte_id', $reportes ?? '', null, ['class' =>
                                        'custom-select']);
                                        !!}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Carga de Archivos') }}</label>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="file">Buscar</label>
                                        </div>
                                        <div class="custom-file">
                                            <input name="mi_archivo" type="file" class="custom-file-input"
                                                id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Seleccionar
                                                Archivo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- <div class="form-group row">
                                <label for="tipo_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Carga de Archivo') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-6">
                                    <input name="mi_archivo" type="file">
                                </div>
                            </div>
                    </div> --}}

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">

                            <button type="submit" class="btn btn-success">Subir</button>

                            <a href="{{action('ArchivoController@index')}}" class="btn btn-link">
                                Listado
                            </a>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection