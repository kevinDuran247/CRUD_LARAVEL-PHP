<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe de Proyectos</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1, h2, h3 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 10px; text-align: left; }
    </style>
</head>
<body>
    <h1>Gobierno de El Salvador</h1>
    <h2>ESIT</h2>
    <h3>{{ date('d/m/Y') }}</h3>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre Proyecto</th>
                <th>Fuente de Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->id }}</td>
                    <td>{{ $proyecto->NombreProyecto }}</td>
                    <td>{{ $proyecto->fuenteFondos }}</td>
                    <td>${{ $proyecto->MontoPlanificado }}</td>
                    <td>${{ $proyecto->MontoPatrocinado }}</td>
                    <td>${{ $proyecto->MontoFondosPropios }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
