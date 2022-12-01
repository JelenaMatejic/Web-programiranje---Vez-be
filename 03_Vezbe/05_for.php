<?php
    #region *** for petlja
    for($i=0; $i<5; $i++) {
        echo $i . " ";
    }

    // Prethodnu petlju možemo zapisati
    for($i=0; $i<5; print $i, $i++) {
    }
    #endregion

    #region *** Beskonačna for petlja
    /*
    for(;;) {
    }
    */
    #endregion

    #region *** For petlja u iteraciji stringovima
    $tekst = "Zdravo svete!";
    for($i=0; $i<strlen($tekst); $i++) {
        echo $tekst[$i];
    }

    for($i=0; $i<count($tekst); $i++) {
        echo $tekst[$i];
    }
    #endregion

    #region *** For petlja u iteraciji nizom
    $tekst = ["Z", "d", "r", "a", "v", "o"];
    for($i=0; $i<count($tekst); $i++) {
        echo $tekst[$i];
    }

    // Da se ne bi u svakoj iteraciji ponovno izračunavala dužina niza, u samoj petlji možemo kreirati promenljivu koja će jednom izračunati dužinu niza i čuvati tu vrednost.
    for($i=0, $d=count($tekst); $i < $d ;$i++) {
        echo $tekst[$i];
    }
    #endregion

    
    // ZADATAK
    /*
        U trenutnoj verziji zadatka se u navigaciji ispisuju elementi niza tako što očitavamo jedan po jedan element.
        Korigovati ovaj deo, tako što ćete vršiti kretanje kroz niz for petljom.
    */    
    
?>