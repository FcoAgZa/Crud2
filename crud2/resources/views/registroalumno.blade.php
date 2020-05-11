<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro Alumnos</title>
        <link rel="stylesheet" href="/css/Estilo.css"> 
    </head>
    <body>
        <div class="outer">
            <div class="middle">
                <div class="inner"> 
                    <h1 class="Titulos">Registro de Alumnos</h1>
                    <table>
                        <form action="{{ route('registroalumno_datos') }}" method="post" role="form">
                            {{ csrf_field() }}
                            <tr>
                                <td><label for="Nombre">Nombre</label> </td>
                                <td><input type="text" name="nombre" id="nombre" required></td>
                            </tr>
                            <tr>
                                <td><label for="Apellido Paterno">Apellido Paterno</label> </td>
                                <td><input type="text" name="apellido_p" id="apellido_p" required></td>
                            </tr>
                            <tr>
                                <td><label for="Apellido Materno">Apellido Materno</label></td>
                                <td><input type="text" name="apellido_m" id="apellido_m"></td>
                            </tr>
                            <tr>
                                <td><label for="Edad">Edad</label></td>
                                <td><input type="text" name="edad" id="edad" required></td>
                            </tr>
                            <tr>
                                <td><label for="Correo">Correo</label></td>
                                <td><input type="text" name="correo" id="correo" required></td>
                            </tr>
                            <tr>
                                <td><label for="Telefono">Telefono</label></td>
                                <td><input type="text" name="telefono" id="telefono"></td>
                            </tr>
                            <tr>
                                <td><label for="Grupo">Grupo</label></td>
                                <td><select name="grupo" id="grupo" required>
                                    <option value="" selected disabled hidden>Grupo</option>
                                    @foreach($grupos as $grupo)
                                        <option value="{{$grupo->id_grupo}}">{{$grupo->grupo}}</option>
                                    @endforeach
                                </select></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="enviar"></td>
                            </tr>
                        </form>
                    </table>
                    <div>
                        <ul class="menu">
                            <li class="menu">
                                <a href="{{ url('/index/') }}">Inicio  </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>