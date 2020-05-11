<!DOCTYPE html>
<html>
	<head>
        <title> Inicio || Bienvenido </title>
        <link rel="stylesheet" href="/css/Estilo.css"> 
	</head>
	<body>
       
        <h1 class="Titulos">Bienvenido, Sistema CRUD</h1>

        <table class="container">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Grupo</th>
                </tr>
            </thead>
            <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->apellido_p}}</td>
                    <td>{{$alumno->apellido_m}}</td>
                    <td>{{$alumno->correo}}</td>
                    <td>{{$alumno->edad}}</td>
                    <td>{{$alumno->telefono}}</td>
                    <td>{{ $alumno->grupo }}</td>
                    
                    <td>
                        <a href="{{ route('editaalumno', $alumno->id_alumno) }}">
                            Editar  
                        </a>   
                        <a href="{{ route('borrar', $alumno->id_alumno) }}" onclick="return confirm('Borrar?');">
                            Borrar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <ul class="menu">
                <li class="menu">
                    <a href="{{ url('/registroalumno/') }}">Registro de Alumnos</a>
                </li>
                <li class="menu">
                    <a href="{{ url('/registrogrupo/') }}">Registro de Grupos</a>
                </li>
            </ul>
        </div>
    </body>
</html>