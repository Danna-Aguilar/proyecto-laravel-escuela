<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alumnes </title>
</head>
<body>
    <h1>LISTA DE ALUMNES</h1>
    @if (Session::has('exito'))
    <p>{{Session::get('exito')}}</p>
    @endif
    <a href="{{route('alumnos.create')}}">Crear alumno</a>
        <table>
           <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
           </thead>
           <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->nombre}}</td>
                    <td> 
                    <a href="{{route('alumnos.edit',$alumno->id)}}">Editar</a>
                    <a href="{{route('alumnos.delete',$alumno->id)}}">Eliminar</a>

                    </td>
                </tr>

                @endforeach
           </tbody>
        </table>
</body>
</html>