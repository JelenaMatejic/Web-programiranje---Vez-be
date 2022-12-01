<?php
    require_once "connection.php";

    // g) imenik.php
    // Prikazati sve pacijente po sledećem principu: 
    // - Na početku stranice prikazati sva slova (u abecednom redu), to su slova kojima počinje neko prezime pacijenta. 
    // Na primer, ako u bazi podataka imamo prezimena Perić, Savić, Petrović, Lukić, Belić, Pavlović, Stošić, tada je potrebno prikazati slova B, L, P i S.
    // - Klikom na neko slovo, sidro vodi do tabele u kojoj su prikazani svi pacijenti čije prezime počinje na to slovo. Sve pacijente u okviru iste grupe sortirati po imenu.

    $q = "SELECT DISTINCT LEFT(`prezime`, 1) AS `prvo_slovo`
          FROM `pacijenti`
          ORDER BY `prezime` ASC;";

    $result = $conn->query($q);
    if($result->num_rows > 0) {
        foreach($result as $red) {
            $prvo_slovo = $red['prvo_slovo'];
            echo "<a href='#$prvo_slovo'> $prvo_slovo </a>";
        }
    } else {
        echo "<p>Trenutno u bazi nemate pacijenata</p>";
    }

    // Za svako slovo kreirati tabelu sa podacima pacijenata cije prezime pocinje na to slovo
    $result = $conn->query($q);
    if($result->num_rows > 0) {
        foreach($result as $row) {
            $prvo_slovo = $row['prvo_slovo'];

            // Prikazi tabelicu pacijanata az to konkretno slovo
            echo "<h3 id='$prvo_slovo'> $prvo_slovo </h3>";

            $q2 = "SELECT *
                   FROM `pacijenti`
                   WHERE `prezime` LIKE '$prvo_slovo%' 
                   ORDER BY `ime`";
            $result2 = $conn->query($q2);

            echo "<table border = 1> 
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Visina</th>
                <th>Tezina</th>
                <th>Datum rodjenja</th>
            </tr>";
            if($result2->num_rows > 0) {
                foreach($result2 as $red) {
                    echo "<tr> 
                            <td>$red[ime]</td>
                            <td>$red[prezime]</td>
                            <td>$red[visina]</td>
                            <td>$red[tezina]</td>
                            <td>$red[datum_rodjenja]</td>
                        </tr>";
                }       
            }
            echo "</table>";

        }
    } else {
        echo "<p>Trenutno u bazi nemate pacijenata</p>";
    }

