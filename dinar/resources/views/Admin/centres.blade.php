<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
  <h1>LLISTA CENTRES</h1>  
<br>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>CP</th>
        <th>City</th>
    </tr>
    @foreach ($centres as $centre)
    <tr>
        <td>{{ $centre->name }}</td>
        <td>{{ $centre->address }}</td>
        <td>{{ $centre->cp }}</td>
        <td>{{ $centre->city }}</td>
<td><a href="{{ route('modificaCentres',$centre) }}">Modifica</a></td>
<td><a href="{{ route('eliminaCentres',$centre) }}">Elimina</a></td>
    </tr>
    @endforeach
</table>
    <a href="{{ route('crearCentres') }}">ADD CENTRE</a>
    <a href="{{ route('adminVista') }}">ADMIN VISTA</a><br>
</body>
</html>