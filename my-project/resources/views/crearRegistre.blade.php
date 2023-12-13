<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari d'Usuaris</title>
</head>

<body>
    <form action='' method="post">
        <label for="rol">Rol:</label>
        <select name="rol">
            <option value="alumnat">Alumnat</option>
            <option value="professor">Professorat</option>
        </select><br>

        <label for="name">Nom:</label>
        <input type="text" name="name" required><br>

        <label for="surname">Cognom:</label>
        <input type="text" name="surname" required><br>

        <label for="password">Contrasenya:</label>
        <input type="password" name="password" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>