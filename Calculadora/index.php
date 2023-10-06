<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadora.php" method="post">
        <input type="text" name="operador1" value="" placeholder="Operador 1">
        <input type="text" name="operador2" value="" placeholder="Operador 2">
        <input type="submit" value="Enviar" name="enviar">
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
    </form>
</body>
</html> 