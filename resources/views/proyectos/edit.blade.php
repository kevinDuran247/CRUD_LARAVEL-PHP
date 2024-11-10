@extends('layouts.app')

@section('content')
    <h1>Editar Proyecto</h1>

    <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="NombreProyecto">Nombre del Proyecto:</label>
            <input type="text" name="NombreProyecto" value="{{ $proyecto->NombreProyecto }}" required>
        </div>
        <div>
            <label for="fuenteFondos">Fuente de Fondos:</label>
            <input type="text" name="fuenteFondos" value="{{ $proyecto->fuenteFondos }}" required>
        </div>
        <div>
            <label for="MontoPlanificado">Monto Planificado:</label>
            <input type="number" name="MontoPlanificado" step="0.01" value="{{ $proyecto->MontoPlanificado }}" required>
        </div>
        <div>
            <label for="MontoPatrocinado">Monto Patrocinado:</label>
            <input type="number" name="MontoPatrocinado" step="0.01" value="{{ $proyecto->MontoPatrocinado }}" required>
        </div>
        <div>
            <label for="MontoFondosPropios">Monto Fondos Propios:</label>
            <input type="number" name="MontoFondosPropios" step="0.01" value="{{ $proyecto->MontoFondosPropios }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
