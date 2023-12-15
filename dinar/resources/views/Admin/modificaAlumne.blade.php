<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Alumne</title>
</head>
<body>
    <h1>Modifica l'alumne</h1>
    <table>
    <!--
        Aquesta es una taula que envia informacio a la ruta de actualitzar amb la instancia a
        actualitzar del alumne. Esta feta de manera que es vegi la part que no es modifica
        i la que si es pot modificar.
    -->
    <form action="{{route('actualitzarAlumne', $alumne)}}" method=“post”>
        <tr>
            <td>ID</td>
            <td><?php echo $alumne['id']; ?></td>
            <td><?php echo $alumne['id']; ?></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><?php echo $alumne['name']; ?></td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>SURNAME</td>
            <td><?php echo $alumne['surname']; ?></td>
            <td><input type="text" name="surname"></td>
        </tr>
        <tr>
            <td>ROL</td>
            <td><?php echo $alumne['rol']; ?></td>
            <td><?php echo $alumne['rol']; ?></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><?php echo $alumne['email']; ?></td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" value="enviar"></td>
        </tr>
    </form>
    <a href="{{ route('alumnat') }}">Tornar a la seccio alumnes</a>
</table>
</body>
</html>