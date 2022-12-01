<?php
    require_once "connection.php";

    // Svaki put kada uradite INSERT query, ZAKOMENTARIŠITE ga da ne bi došlo do dupliranja unosa prilikom svakog novog učitanjava .php stranice
    // $q = "INSERT INTO `pacijenti`(`id`, `ime`, `prezime`, `visina`, `tezina`) 
    //       VALUES (1,'Novak','Djokovic',188,77.5);";

    // $resulOfQuery = $conn->query($q);
    // if($resulOfQuery) {
    //     echo "<p>Uspešno dodat pacijent u tabelu pacijenti</p>";
    // } else {
    //     $err = $conn->error;
    //     echo "<p>Došlo je do greške prilikom dodavanja acijenta u tabelu pacijenti: $err</p>";
    // }

    // Ako porecemo vise upita
    // $q = "INSERT INTO `pacijenti`(`id`, `ime`, `prezime`, `visina`, `tezina`) 
    //       VALUES (2,'Nikola','Jokic',211,129);";
    // $q .= "INSERT INTO `pacijenti`(`id`, `ime`, `prezime`, `visina`, `tezina`) 
    //        VALUES (3,'Aleksandar','Atanasijevic',200,92.0);";

    // $resulOfMultiQuery = $conn->multi_query($q);
    // if($resulOfMultiQuery) {
    //     echo "<p>Uspesno dodati pacijenti</p>";
    // } else {
    //     echo "<p>Greska:" . $conn->error . "</p>";
    // }