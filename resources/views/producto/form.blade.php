<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_producto') }}
            {{ Form::text('tipo_producto', $producto->tipo_producto, ['class' => 'form-control' ,'id'=>'rosa'. ($errors->has('tipo_producto') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Producto']) }}
            {!! $errors->first('tipo_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <div class="form-group">
              <select class="form-control" id="producto" name="producto" onchange="ShowSelected();">
                @foreach ($tipo_producto as $tipo)
                <option value = "{{$tipo->id}}">{{$tipo->nombre}}</option>    
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
    function ShowSelected()
    {
    /* Para obtener el valor */
    var cod = document.getElementById("producto").value;
    document.getElementById('rosa').value = cod; 
    }
</script>