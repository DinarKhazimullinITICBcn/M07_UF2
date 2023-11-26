<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>centres</title>
</head>
<body>
    <h1>LLISTA CENTRES</h1>
    <table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Address</th>
        <th>CP</th>
        <th>City</th>
    </tr>
    @foreach ($centres as $centre)
        <tr>
            <td>{{ $centre['id'] }}</td>
            <td>{{ $centre['name'] }}</td>
            <td>{{ $centre['address'] }}</td>
            <td>{{ $centre['cp'] }}</td>
            <td>{{ $centre['city'] }}</td>
        </tr>
    @endforeach
    </table>
    <a href="{{route('adminVista')}}">ADMIN VISTA</a>
</body>
</html>