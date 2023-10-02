<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('primer_nombre') }}
            {{ Form::text('primer_nombre', $asociado->primer_nombre, ['class' => 'form-control' . ($errors->has('primer_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
            {!! $errors->first('primer_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_nombre') }}
            {{ Form::text('segundo_nombre', $asociado->segundo_nombre, ['class' => 'form-control' . ($errors->has('segundo_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Nombre']) }}
            {!! $errors->first('segundo_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_apellido') }}
            {{ Form::text('primer_apellido', $asociado->primer_apellido, ['class' => 'form-control' . ($errors->has('primer_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
            {!! $errors->first('primer_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_apellido') }}
            {{ Form::text('segundo_apellido', $asociado->segundo_apellido, ['class' => 'form-control' . ($errors->has('segundo_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
            {!! $errors->first('segundo_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dpi') }}
            {{ Form::text('dpi', $asociado->dpi, ['class' => 'form-control' . ($errors->has('dpi') ? ' is-invalid' : ''), 'placeholder' => 'Dpi']) }}
            {!! $errors->first('dpi', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nit') }}
            {{ Form::text('nit', $asociado->nit, ['class' => 'form-control' . ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('nit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $asociado->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="display: none">
            {{ Form::label('producto_id') }}
            {{ Form::text('producto_id', $asociado->producto_id, ['class' => 'form-control', 'id'=>'producto_id-input', 'value'=>'2' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
            {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="form-group">
                {{ Form::label('Producto:') }}
              <select class="form-control" id="producto" name="producto" onchange="elejirProducto();">
                @foreach ($productos as $producto)
                <option value = "{{$producto->id}}">{{$producto->nombre}}</option>    
                @endforeach
              </select>
            </div>
        </div>

  
        <div class="form-group" style="display: none">
            {{ Form::label('es_asociado_id') }}
            {{ Form::text('es_asociado_id', $asociado->es_asociado_id, ['class' => 'form-control', 'id'=> 'es_asociado_id', 'value' =>'1' . ($errors->has('es_asociado_id') ? ' is-invalid' : ''), 'placeholder' => 'Es Asociado Id']) }}
            {!! $errors->first('es_asociado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <div class="form-group">
                {{ Form::label('¿Es Asociado?') }}
              <select class="form-control" id="es_asociado" name="es_asociado" onchange="ShowSelected();">
                @foreach ($es_asociado as $es_asociad)
                <option value = "{{$es_asociad->id}}">{{$es_asociad->nombre}}</option>    
                @endforeach
              </select>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

<script type="text/javascript">
    function elejirProducto()
    {
    /* Para obtener el valor */
    var cod = document.getElementById("producto").value;
    document.getElementById('producto_id-input').value = cod; 
    }
    
    function ShowSelected()
    {
    /* Para obtener el valor */
    var cod = document.getElementById("es_asociado").value;
    document.getElementById('es_asociado_id').value = cod; 
    }
</script>