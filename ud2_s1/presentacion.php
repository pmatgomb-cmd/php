<?php
$nombre = "Pablo";
$edad = 19;
$ciudad = "Alhaurín el Grande";
$mascota = "gata";
$frase = "Me llamo $nombre ,";
$frase .= "tengo $edad años";
$frase .= " y vivo en $ciudad";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentacion</title>
</head>
<body>
    <p><? echo "Me llamo $nombre, tengo $edad años y vivo en $ciudad"?></p>
    <p><? echo 'Me llamo ' . $nombre . ', tengo ' . $edad . ' años y vivo en ' . $ciudad?></p>
    <p><? echo $frase?></p>
</body>
</html>