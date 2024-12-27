@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Medicamentos</h1>
    <a href="{{ route('medicamentos.create') }}" class="btn btn-primary mb-3">Registrar Medicamento</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Presentación</th>
                <th>Unidad de Medida</th>
                <th>Cantidad Disponible</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicamentos as $medicamento)
                <tr>
                    <td>{{ $medicamento->id }}</td>
                    <td>{{ $medicamento->nombre }}</td>
                    <td>{{ $medicamento->presentacion }}</td>
                    <td>{{ $medicamento->unidad_medida }}</td>
                    <td>{{ $medicamento->cantidad_disponible }}</td>
                    <td>{{ $medicamento->estatus }}</td>
                    <td>
                        <!-- Botones de acción -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
