@extends('layouts.app')

@section('content')
    <h1>Lista de Proyectos</h1>
    <a href="{{ route('proyectos.create') }}">Crear Nuevo Proyecto</a>
    <table>
        <thead>
            <tr>
                <th>Nombre Proyecto</th>
                <th>Fuente de Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->NombreProyecto }}</td>
                    <td>{{ $proyecto->fuenteFondos }}</td>
                    <td>{{ $proyecto->MontoPlanificado }}</td>
                    <td>{{ $proyecto->MontoPatrocinado }}</td>
                    <td>{{ $proyecto->MontoFondosPropios }}</td>
                    <td>
                        <a href="{{ route('proyectos.edit', $proyecto->id) }}">Editar</a>
                        <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="http://127.0.0.1:8000/informes/proyectos
">Descargar registro PDF</a>
@endsection
