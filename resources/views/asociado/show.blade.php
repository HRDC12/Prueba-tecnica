@extends('layouts.app')

@section('template_title')
    {{ $asociado->name ?? "{{ __('Show') Asociado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asociado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asociados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $asociado->primer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $asociado->segundo_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $asociado->primer_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Apellido:</strong>
                            {{ $asociado->segundo_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Dpi:</strong>
                            {{ $asociado->dpi }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $asociado->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $asociado->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $asociado->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Es Asociado Id:</strong>
                            {{ $asociado->es_asociado_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
