<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari d'Usuaris</title>
</head>

<body>
     <!-- Formulari per afegir la informació del professor -->
    <form action="{{route('inserirProfessorat')}}" method="post">

        <label for="name">Nom:</label>
        <input type="text" name="name" required><br>

        <label for="surname">Cognom:</label>
        <input type="text" name="surname" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Enviar">
    </form>
    <a href="{{route('professorat')}}">Professorat</a>
</body>

</html>