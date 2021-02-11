<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>impresión</title>
</head>
<body>
    <h1>Ingrese el Texto que desea imprimir</h1>
    <form action="{{ route('imprimir') }}" method="post">
        @csrf
        <textarea name="texto"  style="width:400px; height:200px;"></textarea>
        <br>
        <input type="radio" name="result" value="Color" checked> Imprimir a Color 
        <input type="radio" name="result" value="BN"> Imprimir Blanco y Negro
        <br>
        <button type="submit" action="{{ route('imprimir') }}" >Imprimir</button>
    </form>
    
</body>
</html>