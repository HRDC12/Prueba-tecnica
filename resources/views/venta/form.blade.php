<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_emision') }}
            {{ Form::date('fecha_emision', $venta->fecha_emision, ['class' => 'form-control' . ($errors->has('fecha_emision') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Emision']) }}
            {!! $errors->first('fecha_emision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_contacto') }}
            {{ Form::date('fecha_contacto', $venta->fecha_contacto, ['class' => 'form-control' . ($errors->has('fecha_contacto') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Contacto']) }}
            {!! $errors->first('fecha_contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_contacto') }}
            {{ Form::text('usuario_contacto', $venta->usuario_contacto, ['class' => 'form-control' ,'value'=>'1'. ($errors->has('usuario_contacto') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Contacto']) }}
            {!! $errors->first('usuario_contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('acuerdo') }}
            {{ Form::text('acuerdo', $venta->acuerdo, ['class' => 'form-control' . ($errors->has('acuerdo') ? ' is-invalid' : ''), 'placeholder' => 'Acuerdo']) }}
            {!! $errors->first('acuerdo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('es_asociado') }}
            {{ Form::text('es_asociado', $venta->es_asociado, ['class' => 'form-control' . ($errors->has('es_asociado') ? ' is-invalid' : ''), 'placeholder' => 'Es Asociado']) }}
            {!! $errors->first('es_asociado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_asociado') }}
            {{ Form::text('nombre_asociado', $venta->nombre_asociado, ['class' => 'form-control' . ($errors->has('nombre_asociado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Asociado']) }}
            {!! $errors->first('nombre_asociado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_no_asociado') }}
            {{ Form::text('nombre_no_asociado', $venta->nombre_no_asociado, ['class' => 'form-control' . ($errors->has('nombre_no_asociado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre No Asociado']) }}
            {!! $errors->first('nombre_no_asociado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>