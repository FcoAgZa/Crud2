<!DOCTYPE html>
<html>
	<head>
        <title> Edidicion</title>
        <link rel="stylesheet" href="/css/Estilo.css"> 
	</head>
	<body>
    <div class="outer">
        <div class="middle">
            <div class="inner"> 
                <h1 class="Titulos">Editar un Alumno</h1>
                <table>
                    <form action="{{ route('editaalumno_d') }}" method="POST">
                        {{ csrf_field() }}
                        <tr>
                        <td><label for="Nombre">ID</label></td>
                        <td><input type="text" name="id_alumno" id="id_alumno" value="{{ $alumno->id_alumno }}" placeholder="ID alumno"></td>
                        </tr>
                        <tr>
                        <td><label for="Nombre">Nombre</label></td>
                        <td><input type="text" name="nombre" id="nombre" value="{{ $alumno->nombre }}" placeholder="Nombre"></td>
                        </tr>
                        <tr>
                        <td><label for="Apellido aterno">Apellido Paterno</label></td>
                        <td><input type="text" name="apellido_p" id="apellido_p" value="{{ $alumno->apellido_p }}" placeholder="Apellido Paterno"></td>
                        </tr>
                        <tr>
                        <td><label for="Apellido Materno">Apellido Materno</label></td>
                        <td><input type="text" name="apellido_m" id="apellido_m" value="{{ $alumno->apellido_m }}" placeholder="Apellido Materno"></td>
                        </tr>
                        <tr>
                        <td><label for="correo">Correo</label></td>
                        <td-<<input type="text" name="correo" id="correo" value="{{ $alumno->correo }}" placeholder="Correo"></td->
                        </tr>
                        <tr>
                        <td><label for="Edad">Edad</label></td>
                        <td><input type="text" name="edad" id="edad" value="{{ $alumno->edad }}" placeholder="Edad">
                        </td>
                        <tr>
                        <td><label for="Telefono">Telefono</label></td>
                        <td><input type="text" name="telefono" id="telefono" value="{{ $alumno->telefono }}" placeholder="Telefono"></td>
                        </tr>
                        <tr>
                        <td><label for="Grupo">Grupo</label></td>
                        <td><input type="text" name="grupo" id="grupo" value="{{ $alumno->grupo }}" placeholder="Grupo"></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td> <input type="submit" value="Enviar">   </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>