<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('primer_nombre') }}
            {{ Form::text('primer_nombre', $noAsociado->primer_nombre, ['class' => 'form-control' . ($errors->has('primer_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
            {!! $errors->first('primer_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_nombre') }}
            {{ Form::text('segundo_nombre', $noAsociado->segundo_nombre, ['class' => 'form-control' . ($errors->has('segundo_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Nombre']) }}
            {!! $errors->first('segundo_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_apellido') }}
            {{ Form::text('primer_apellido', $noAsociado->primer_apellido, ['class' => 'form-control' . ($errors->has('primer_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
            {!! $errors->first('primer_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_apellido') }}
            {{ Form::text('segundo_apellido', $noAsociado->segundo_apellido, ['class' => 'form-control' . ($errors->has('segundo_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
            {!! $errors->first('segundo_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dpi') }}
            {{ Form::text('dpi', $noAsociado->dpi, ['class' => 'form-control' . ($errors->has('dpi') ? ' is-invalid' : ''), 'placeholder' => 'Dpi']) }}
            {!! $errors->first('dpi', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nit') }}
            {{ Form::text('nit', $noAsociado->nit, ['class' => 'form-control' . ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('nit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $noAsociado->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('es_asociado_id') }}
            {{ Form::text('es_asociado_id', $noAsociado->es_asociado_id, ['class' => 'form-control' . ($errors->has('es_asociado_id') ? ' is-invalid' : ''), 'placeholder' => 'Es Asociado Id']) }}
            {!! $errors->first('es_asociado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>