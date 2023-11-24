<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>BENVINGUT/DA ADMIN</h1>
    <div>
        <a href="{{ route('centres') }}">Centres</a>
        <a href="{{ route('alumnat') }}">Alumnat</a>
        <a href="{{ route('professorat') }}">Professorat</a>
    </div>
    <a href="{{ route('signin') }}">Log out</a>
</body>
</html>