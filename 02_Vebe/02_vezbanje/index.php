<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Moje vežbanje</title>
</head>
<body>
    <header>
        <h1>Dobrodošli na moj sajt!</h1>

        <?php
            $d = date('d');
            $m = date('m');
            $g = date('Y');
        ?>
        <p>Danas je: <?php echo "$d.$m.$g."; ?> </p>
    </header>

    <nav>
        <?php
            $meni = ["O meni", "O mom kućnom ljubimcu", "O mojim interesovanjima", "O mom poslu"];
        ?>
        <ul>
            <li><a href="#"><?php echo $meni[0]; ?></a></li>
            <li><a href="#"><?php echo $meni[1]; ?></a></li>
            <li><a href="#"><?php echo $meni[2]; ?></a></li>
            <li id="desno"><a href="#"><?php echo $meni[3]; ?></a></li>
        </ul>
    </nav>
</body>
</html>