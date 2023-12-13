<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat</title>
</head>
<body>
    <h1>LLISTA ALUMNAT</h1>
    <table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>ROL</th>
        <th>EMAIL</th>
    </tr>
    @foreach ($alumnes as $alumne)
        <tr>
            <td>{{ $alumne['id'] }}</td>
            <td>{{ $alumne['name'] }}</td>
            <td>{{ $alumne['surname'] }}</td>
            <td>{{ $alumne['rol'] }}</td>
            <td>{{ $alumne['email'] }}</td>
        </tr>
    @endforeach
    </table>
    <div>
        <a href="{{route('crearAlumne')}}">CREAR ALUMNE</a>
        <a href="{{route('adminVista')}}">ADMIN VISTA</a>
    </div>
</body>
</html>