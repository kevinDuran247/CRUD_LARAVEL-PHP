@extends('layouts.app')

@section('content')
    <h1>Crear Proyecto</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf <!-- Token CSRF -->

        <div class="mb-3">
            <label for="nombre_proyecto" class="form-label">Nombre del Proyecto</label>
            <input type="text" class="form-control" id="nombre_proyecto" name="NombreProyecto" required>
        </div>

        <div class="mb-3">
            <label for="fuente_fondos" class="form-label">Fuente de Fondos</label>
            <input type="text" class="form-control" id="fuente_fondos" name="fuenteFondos" required>
        </div>

        <div class="mb-3">
            <label for="monto_planificado" class="form-label">Monto Planificado</label>
            <input type="number" class="form-control" id="monto_planificado" name="MontoPlanificado" required>
        </div>

        <div class="mb-3">
            <label for="monto_patrocinado" class="form-label">Monto Patrocinado</label>
            <input type="number" class="form-control" id="monto_patrocinado" name="MontoPatrocinado" required>
        </div>

        <div class="mb-3">
            <label for="monto_fondos_propios" class="form-label">Monto Fondos Propios</label>
            <input type="number" class="form-control" id="monto_fondos_propios" name="MontoFondosPropios" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Proyecto</button>
    </form>
@endsection
