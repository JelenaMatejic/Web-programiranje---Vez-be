<?php
    $programaski_jezici = ["PHP", "Java Script", "Python"];

    #region ***  Foreach petlja sintaksa

    foreach($programaski_jezici as $jezik) {
        echo "<p> $jezik </p>";
    }

    // Alternativna sintaksa za foreach petlju
    foreach($programaski_jezici as $jezik): 
        echo $jezik . " ";
    endforeach;

    // Foreach petlja sa indeksiranjem
    foreach($programaski_jezici as $indeks=>$jezik) {
        echo $indeks . " - " . $jezik . " ; ";
    }

    #endregion

    
    /////////////// VEŽBANJE ///////////////

    // 1. ZADATAK
    /*
        Ispod slike (avatara) na stranici ispisati sve elemente niza koji koristimo za ispis u navigacionim karticama.
        Ove elemente ispisivati korišćenjem foreach petlje i to kao naslove najveće veličine <h1>.
    */

    // 2. ZADATAK
    /*
        Naslove iz prethodnog zadatka obojiti nasumičnim bojama (svaki od njih nasumičnom bojom).
        Za nasumične vrednosti možete koristiti funkciju rand(min,max).
    */
?>