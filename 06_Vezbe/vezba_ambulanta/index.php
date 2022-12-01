<?php
    require_once "connection.php";
    // require_once "create_table.php"; // Ovaj fajl možemo i zakomentarisati, nakon to smo privog puta kreirali sve tabele koje su zadate ovim fajlom
    require_once "select_query.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambulanta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Ambulanta</h1>
    <nav>
        <p>
            <a class = "button" href="sortiranje_pacijenata.php">Sortirani pacijenti</a>
            <a class = "button" href="pacijenti_1970_1990.php">Pacijenti rodjeni izmedju 1970 i 1990</a>
            <a class = "button" href="natprosecno_teski.php">Natprosecno teski</a>
        </p>
        <p>
            <a class = "button" href="visina_ispod_proseka.php">Pacijenti sa visinom ispod proseka</a>
            <a class = "button" href="maloletni.php">Maloletni pacijenti</a>
            <a class = "button" href="bmi.php">Pacijenti sa nezdravom tezinom</a>
        </p>
        <p>
            <a class = "button" href="imenik.php">Imenik</a>
        </p>
    </nav>
</body>
</html>