@extends('layouts.app')

@section('template_title')
    {{ $noAsociado->name ?? "{{ __('Show') No Asociado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} No Asociado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('no-asociados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $noAsociado->primer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $noAsociado->segundo_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $noAsociado->primer_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Apellido:</strong>
                            {{ $noAsociado->segundo_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Dpi:</strong>
                            {{ $noAsociado->dpi }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $noAsociado->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $noAsociado->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Es Asociado Id:</strong>
                            {{ $noAsociado->es_asociado_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
