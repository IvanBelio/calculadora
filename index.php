<?php

include ("funciones.php");

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<fieldset>
    <legend>Calculadora</legend>
    <form action="funciones.php" method="post">
        <input type="text" name="op1" id="op1" placeholder="Operador 1">
        <select name="operador" id="operador">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="op2" id="op2" placeholder="Operador 2">
        <input type="submit" value="Calcular" name="submit">
    </form>
</fieldset>
</body>
</html>