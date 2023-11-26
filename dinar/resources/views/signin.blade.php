<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Creacio de usuari</h1>
    <form action=" {{ route('usuaris') }} " method="post">
        <label>Correu Electronic</label>
        <input type="text" name="email">
        <br>
        <label>Contrasenya</label>
        <input type="text" name="passwd">
        <br>
        <input type="checkbox" name="active">
        <label for="active">Acordat de mi</label>
        <br>
        <button type="submit" name="send">Enviar</button>
    </form>
    <a href=" {{ route('signup') }}">Registrar-se</a>
</body>
</html>