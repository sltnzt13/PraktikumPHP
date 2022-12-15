<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swicth</title>
</head>
<body>
    <h2> Penggunaan Kontrol Swicth</h2>
    <?php
    $angka moto=3;
    echo("Angka mulu $angka moto<br>");
    switch($angka_moto)
    {
        case 0: echo("Huruf mutu E"); break;
        case 1: echo("Huruf mutu D"); break;
        case 2: echo("Huruf mutu C"); break;
        case 3: echo("Huruf mutu B"); break;
        case 4: echo("Huruf mutu A"); break;
        default: echo("Huruf mutu tidak dikenali");
    }
    ?>
</body>
</html>