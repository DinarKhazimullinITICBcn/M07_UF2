<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorat</title>
</head>
<body>
    <!-- View que mostra la informacio de professor -->
    <h1>LLISTA PROFESSORAT</h1>
    <table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>ROL</th>
        <th>EMAIL</th>
    </tr>
    @foreach ($professors as $professor)
        <tr>
            <td>{{ $professor['id'] }}</td>
            <td>{{ $professor['name'] }}</td>
            <td>{{ $professor['surname'] }}</td>
            <td>{{ $professor['rol'] }}</td>
            <td>{{ $professor['email'] }}</td>
            <td><a href="{{route('modificaProfessorat', $professor)}}">Modificar</a></td>
            <td><a href="{{route('eliminarProfessorat', $professor)}}">Eliminar</a></td>
            <td><a href="{{route('mostraProfessorat', $professor)}}">Mostrar</a></td>
        </tr>
    @endforeach
    </table>
    <a href="{{route('crearProfessorat')}}">ADD Professor</a>
    <a href="{{route('adminVista')}}">ADMIN VIEW</a>


</body>
</html>