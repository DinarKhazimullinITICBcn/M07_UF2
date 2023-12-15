<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Formulari per actualitzar la informació del professor -->
    <h2>Modificar informacio del Professor {{ $professor->id }}</h2>
    <form action="{{ route('actualitzarProfessorat', $professor)}}" method="post">
    <label for="name">Nom:</label>
        <input type="text" name="name" value="{{ $professor->name }}" required><br>

        <label for="surname">Cognom:</label>
        <input type="text" name="surname" value="{{ $professor->surname }}" required><br>

        <label for="email">Correu electrònic:</label>
        <input type="email" name="email" value="{{ $professor->email }}" required><br>

        <button type="submit">Actualitzar Informació</button>
    </form>


</body>

</html>