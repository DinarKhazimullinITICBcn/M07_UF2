<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacio usuario</title>
</head>
<body>
    <h1>{{$textFinal}}</h1>
    <!--Cream el formulari que manda la informacio a ../crear_usuari/index.php amb el metode POST-->
    <form action="../../crear_usuari/index.php" method="POST">
        <label>ID</label>
        <input type="text" name="id">
        <br>
        <label>Nom</label>
        <input type="text" name="name">
        <br>
        <label>Cognom</label>
        <input type="text" name="surname">
        <br>
        <label>
            <select name="ROL">
                <option value="Professorat">Professorat</option>
                <option value="Alumnat">Alumnat</option>
            </select>
        </label>
        <br>
        <label>Contrasenya</label>
        <input type="text" name="passwd">
        <br>
        <label>Correu electronic</label>
        <input type="text" name="email">
        <br>
        <label for="active">Actiu</label>
        <input type="checkbox" name="active">
        <br>
        <button type="submit" name="send">Enviar</button>
    </form>
    <!--Creem un enllac que envi a la pagina de login-->
    <a href="/dinar/signin/Iniciar/sessio/de/l'usuari">Iniciar sessio usuari</a>
</body>
</html>