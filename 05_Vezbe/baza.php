<?php
    // kreiranje objekta konekcije
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "ambulanta";

    $conn = new mysqli($servername, $username, $password, $db);

    if($conn->connect_error) {
        die("Greška prilikom konektovanja na bazu podataka: " . $conn->connect_error);
    } else {
        echo "Uspešno ste se konektovali na bazu podataka " . $db;


        // Izvršenje jednog upita
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

        // Vežbanje:
        // Kreirati php fajl koji će u tabeli pacijenti u bazi ambulanta izvršiti sledeće višestruke upite:
        // - Dodati novu kolonu datum_rodjenja tipa DATE posle kolone prezime,
        // - Izmeniti postojeće redove tako što im se upiše vrednost polja datum_rodjenja.

        // $q = "ALTER TABLE `pacijenti` ADD `datum_rodjenja` DATE AFTER `prezime`;";
        // $q .= "UPDATE `pacijenti` SET `datum_rodjenja`='1987-05-22' WHERE id=1;";
        // $q .= "UPDATE `pacijenti` SET `datum_rodjenja`='1995-02-19' WHERE id=2;";
        // $q .= "UPDATE `pacijenti` SET `datum_rodjenja`='1991-09-04' WHERE id=3;";
        // if($conn->multi_query($q)) {
        //     echo "<p>Uspesno je izvrsen niz upita</p>";
        // } else {
        //     echo "<p>Greska:" . $conn->error . "</p>";
        // }

        // Prikaz podataka iz baze
        $q = "SELECT * FROM pacijenti";
        $result = $conn->query($q); // vraća objekat kao tabelicu sa redovima

        // Ako SELECT upit vrati vieš od 1 reda, onda ima smisla ispisivati te redove
        if($result->num_rows > 0) {
            // vraća tekući red kao asocijativni niz
            // $red = $result->fetch_assoc(); 
            // print_r($red);
            // echo "<p style='color: red;'>" . $red['ime'] . " " , $red['prezime'] . "</p>";


            // zelim da vracam svaki red iz tabele, dokle god ima redova
            // fetch assoc vraca red iz tabele, ukoliko red postoji ili vraca 0 ukoliko red ne postoji
            while($red = $result->fetch_assoc()) {
                echo "<p>";
                echo $red['ime'] . " ";
                echo $red['prezime'];
                echo "</p>";
            }

            // ispis kao UL
            $q = "SELECT * FROM pacijenti";
            $result = $conn->query($q); // vraća objekat kao tabelicu sa redovima
            echo "<ul>";
            while($red = $result->fetch_assoc()) {
                echo "<li>" . $red['ime'] . " " . $red['prezime'] . "</li>";
            }
            echo "</ul>";

            // Zadatak: Tabelarno prikazati sve pacijente iz tabele pacijenti (id, ime, prezime, visina i težina)


            $q = "SELECT * FROM pacijenti";
            $result = $conn->query($q);

            echo "<table border = 1>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Visina</th>
                <th>Tezina</th>
            </tr>";

            if($result->num_rows > 0) {
                    while ($red = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>$red[ime] </td>
                                <td>$red[prezime] </td>
                                <td>$red[visina] </td>
                                <td>$red[tezina] </td>
                            </tr>
                    ";                 
                }
            }
            echo "</table>";
        } else {
            echo "<p>Nema podataka za zadati upit!</p>";
        }

    }
?> 