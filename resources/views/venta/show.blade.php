@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? "{{ __('Show') Venta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Emision:</strong>
                            {{ $venta->fecha_emision }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Contacto:</strong>
                            {{ $venta->fecha_contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Contacto:</strong>
                            {{ $venta->usuario_contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Acuerdo:</strong>
                            {{ $venta->acuerdo }}
                        </div>
                        <div class="form-group">
                            <strong>Es Asociado:</strong>
                            {{ $venta->es_asociado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Asociado:</strong>
                            {{ $venta->nombre_asociado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre No Asociado:</strong>
                            {{ $venta->nombre_no_asociado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
