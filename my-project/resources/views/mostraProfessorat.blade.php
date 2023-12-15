<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MostraProfessorat</title>
</head>

<body>
    <!-- View que mostra la informacio depenent del seu id professor -->
    <h2>Informacio del Professor {{ $professor->id }}</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>cognom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $professor->id }}</td>
                <td>{{ $professor->name }}</td>
                <td>{{ $professor->surname }}</td>
                <td>{{ $professor->email }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>