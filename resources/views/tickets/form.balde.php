<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_fecha" class="form-label">{{ __('Fecha') }}</label>
            <select name="id_fecha" class="form-control @error('id_fecha') is-invalid @enderror" id="id_fecha" required>
                <option value="" disabled selected>Selecciona una fecha</option>
                @foreach($fechas as $fecha)
                    <option value="{{ $fecha->id }}" {{ old('id_fecha', $ticket->id_fecha ?? '') == $fecha->id ? 'selected' : '' }}>{{ $fecha->fecha }}</option>
                @endforeach
            </select>           
            {!! $errors->first('id_fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="total" class="form-label">{{ __('Total') }}</label>
            <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $ticket->total ?? '') }}" id="total" placeholder="Total">
            {!! $errors->first('total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="id_venta" class="form-label">{{ __('Venta Id') }}</label>
            <select name="id_venta" class="form-control @error('id_venta') is-invalid @enderror" id="id_venta" required>
                <option value="" disabled selected>Selecciona una venta</option>
                @foreach($ventas as $venta)
                    <option value="{{ $venta->id }}" {{ old('id_venta', $ticket->id_venta ?? '') == $venta->id ? 'selected' : '' }}>{{ $venta->id }}</option>
                @endforeach
            </select>           
            {!! $errors->first('id_venta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="id_empleado" class="form-label">{{ __('Empleado') }}</label>
            <select name="id_empleado" class="form-control @error('id_empleado') is-invalid @enderror" id="id_empleado" required>
                <option value="" disabled selected>Seleccione un empleado</option>
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->id }}" {{ old('id_empleado', $ticket->id_empleado ?? '') == $empleado->id ? 'selected' : '' }}>{{ $empleado->nombre }}</option>
                @endforeach
            </select>           
            {!! $errors->first('id_empleado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
