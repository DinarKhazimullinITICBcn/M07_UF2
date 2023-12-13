<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear alumne</h1>
    <form action="{{ route('inserirAlumne') }}" method="POST">
        <label>Nom</label>
        <input type="text" name="name">
        <br>
        <label>Surname</label>
        <input type="text" name="surname">
        <br>
        <label>Email</label>
        <input type="text" name="email">
        <br>
        <input type="checkbox" name="active">
        <label for="active">Acordat de mi</label>
        <br>
        <button type="submit" name="send">Enviar</button>
    </form>
    <a href="{{ route('alumnat') }}">Tornar a la seccio alumnes</a>
</body>
</html>