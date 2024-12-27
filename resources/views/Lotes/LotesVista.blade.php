@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Lote de Medicamentos</h1>
    <form action="{{ route('lotes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="medicamento_id" class="form-label">Medicamento</label>
            <select name="medicamento_id" id="medicamento_id" class="form-control" required>
                <option value="">Seleccione un medicamento</option>
                @foreach ($medicamentos as $medicamento)
                    <option value="{{ $medicamento->id }}">{{ $medicamento->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" required>
        </div>
        
        <div class="mb-3">
            <label for="fecha_vencimiento" class="form-label">Fecha de Vencimiento</label>
            <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="fecha_registro" class="form-label">Fecha de Registro</label>
            <input type="date" name="fecha_registro" id="fecha_registro" class="form-control" value="{{ date('Y-m-d') }}" required>
        </div>
        
        <div class="mb-3">
            <label for="origen" class="form-label">Origen</label>
            <input type="text" name="origen" id="origen" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="estatus" class="form-label">Estatus</label>
            <select name="estatus" id="estatus" class="form-control" required>
                <option value="disponible">Disponible</option>
                <option value="agotado">Agotado</option>
                <option value="vencido">Vencido</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
