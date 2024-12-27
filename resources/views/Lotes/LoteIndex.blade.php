@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Lotes</h1>
    <a href="{{ route('lotes.create') }}" class="btn btn-primary mb-3">Registrar Lote</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Medicamento</th>
                <th>Cantidad</th>
                <th>Fecha de Vencimiento</th>
                <th>Origen</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lotes as $lote)
                <tr>
                    <td>{{ $lote->id }}</td>
                    <td>{{ $lote->medicamento->nombre }}</td>
                    <td>{{ $lote->cantidad }}</td>
                    <td>{{ $lote->fecha_vencimiento }}</td>
                    <td>{{ $lote->origen }}</td>
                    <td>{{ $lote->estatus }}</td>
                    <td>
                        <!-- Botones de acción -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
