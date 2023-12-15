<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MostrarAlumne</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>ROL</th>
        <th>EMAIL</th>
    </tr>
        <tr>
            <!--Mostra la informacio rebuda per el controller d'una sola instancia de alumne-->
            <td>{{ $alumne['id'] }}</td>
            <td>{{ $alumne['name'] }}</td>
            <td>{{ $alumne['surname'] }}</td>
            <td>{{ $alumne['rol'] }}</td>
            <td>{{ $alumne['email'] }}</td>
        </tr>
    </table>
    <a href="{{ route('alumnat') }}">Tornar a la seccio alumnes</a>
</body>
</html>