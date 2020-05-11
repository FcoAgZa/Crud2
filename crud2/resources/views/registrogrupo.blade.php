<html> 
<head>
    <title>Registro Grupos</title>
    <link rel="stylesheet" href="/css/Estilo.css"> 

</head>
<h1>Hola</h1>

<form action="{{ route('registrogrupo_datos') }}" method="post" role="form">
    {{ csrf_field() }}
    <label for="Grupo"> Grupo</label>
    <input type="text" name="grupo" id="grupo" required>

    <label for="Turno">Turno</label>
    <select name="turno" id="turno" required>
        <option value="" selected disabled hidden>Turno</option>
        <option value="Vespertino">Vespertino</option>
        <option value="Matutino">Matutino</option>
    </select>

    <label for="Semestre">Semestre</label>
    <select name="semestre" id="semestre" required>
        <option value="" selected disabled hidden>Semestre</option>
        <option value="Primero">Primero</option>
        <option value="Segundo">Segundo</option>
        <option value="Tercero">Tercero</option>
        <option value="Cuarto">Cuarto</option>
        <option value="Quinto">Quinto</option>
        <option value="Sexto">Sexto</option>
    </select>

    <input type="submit" name="Enviar" value="Enviar">
</form>
<div>
    <ul class="menu">
        <li class="menu">
            <a href="{{ url('/index/') }}">Inicio  </a>
        </li>
    </ul>
</div>