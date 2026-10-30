<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
<?php
$a = 17;
$b = 5;
$a += 3;
$a *=5;
?>
    <table>
        <tr>
        <th>Operación</th>
        <th>Resultado</th>
        <th>Tipo</th>
        </tr>
        <tr>
            <td><p>Suma</p></td>
            <td><?= $a + $b ?></td> 
            <td><?= gettype($a + $b)?></td> 
        </tr>
        <tr>
            <td><p>Resta</p></td>
            <td><?= $a - $b ?></td> 
            <td><?= gettype($a - $b)?></td> 
        </tr>
        <tr>
            <td><p>Producto</p></td>
            <td><?= $a * $b ?></td> 
            <td><?= gettype($a * $b)?></td> 
        </tr>
    <tr>
            <td><p>División</p></td>
            <td><?= $a / $b ?></td> 
            <td><?= gettype($a / $b)?></td> 
        </tr>
        <tr>
            <td><p>Resto</p></td>
            <td><?= $a % $b ?></td> 
            <td><?= gettype($a % $b)?></td> 
        </tr>
        <tr>
            <td><p>Potencia</p></td>
            <td><?= $a ** $b ?></td> 
            <td><?= gettype($a * $b)?></td> 
        </tr>
        <tr>
            <td><p>intdic()</p></td>
            <td><?= intdiv($a,$b) ?></td> 
            <td><?= gettype(intdiv($a,$b))?></td> 
        </tr>
    </table>
    <p>$a == "17" -> <?= var_dump($a=="17")?> </p><br>
    <p>$a === "17" -> <?= var_dump($a==="17")?></p> <br>
    <p>$a<=>$b -> <?= var_dump($a<=>$b)?> </p><br>
    <p>$b<=>$a -> <?= var_dump($b<=>$a)?></p>

<?php //Da error la división con un fatal error ?>
</body>
</html>