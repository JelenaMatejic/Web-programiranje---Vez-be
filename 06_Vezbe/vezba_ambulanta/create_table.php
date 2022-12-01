<?php
    require_once "connection.php";

    $q = "CREATE TABLE IF NOT EXISTS pacijenti(
        id INT UNSIGNED,
        ime VARCHAR(50),
        prezime VARCHAR(150),
        visina SMALLINT UNSIGNED,
        tezina FLOAT UNSIGNED,
        PRIMARY KEY(id)
    )";
    $conn->query($q); 
    
    // Ukoliko želim da vidim i sta vraća izvršenje upita
    $resulOfQuery = $conn->query($q); // vraća true ili false u zavisnosti od toga da li je uslešno izvršen upit
    var_dump($resulOfQuery);
    
    if($resulOfQuery) {
        echo "<p>Tabela pacijenti je uspešno dodata u bazu</p>";
    } else {
        $err = $conn->error;
        echo "<p>Došlo je do greške prilikom kreiranja tabele pacijenti: $err</p>";
    }

    // $q = "ALTER TABLE `pacijenti` ADD `datum_rodjenja` DATE AFTER `prezime`;";
    // $q .= "UPDATE `pacijenti` SET `datum_rodjenja`='1987-05-22' WHERE id=1;";
    // $q .= "UPDATE `pacijenti` SET `datum_rodjenja`='1995-02-19' WHERE id=2;";
    // $q .= "UPDATE `pacijenti` SET `datum_rodjenja`='1991-09-04' WHERE id=3;";
    // if($conn->multi_query($q)) {
    //     echo "<p>Uspesno je izvrsen niz upita</p>";
    // } else {
    //     echo "<p>Greska:" . $conn->error . "</p>";
    // }