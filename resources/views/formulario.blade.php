<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>
<body>
    <h1>FORMULARIO DE USUARIO</h1>
    <form method="POST" action="/procesar">

        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label>Edad:</label>
        <input type="number" name="edad"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>