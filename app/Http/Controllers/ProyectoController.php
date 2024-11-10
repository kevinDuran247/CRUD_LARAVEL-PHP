<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
{
    // Validación
    $request->validate([
        'NombreProyecto' => 'required|string|max:255',
        'fuenteFondos' => 'required|string|max:255',
        'MontoPlanificado' => 'required|numeric',
        'MontoPatrocinado' => 'required|numeric',
        'MontoFondosPropios' => 'required|numeric',
    ]);

    // Crear el proyecto
    Proyecto::create($request->all());

    // Redireccionar a la lista de proyectos
    return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente.');
}


    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'NombreProyecto' => 'required|string|max:255',
            'fuenteFondos' => 'required|string|max:255',
            'MontoPlanificado' => 'required|numeric',
            'MontoPatrocinado' => 'required|numeric',
            'MontoFondosPropios' => 'required|numeric',
        ]);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado con éxito.');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado con éxito.');
    }
}
