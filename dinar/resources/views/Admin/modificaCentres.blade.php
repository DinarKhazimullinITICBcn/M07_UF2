<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre Centres</title>
</head>
<body>
<form action="{{ route('update',$centre) }}" method="POST">
@csrf

  <label for="name">Nou nom:</label>
  <input type="text" id="name" name="name" value="{{ old('name', $centre->name) }}" required><br><br>

  <label for="adress">Nova adreça:</label>
  <input type="text" id="adress" name="adress" value="{{ old('adress', $centre->adress) }}"><br><br>

  <label for="CP">Nou CP:</label>
  <input type="text" id="cp" name="cp" value="{{ old('cp', $centre->cp) }}"><br><br>

  <label for="city">Nova Ciutat:</label>
  <input type="text" id="city" name="city" value="{{ old('city', $centre->city) }}"><br><br>
  <input type="submit" value="Guarda">
</form>
<br>
    <a href="{{ route('centres') }}">CENTRES</a><br>
    
</body>
</html>
