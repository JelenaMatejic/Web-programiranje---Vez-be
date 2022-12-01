<?php
    require_once "connection.php";

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

