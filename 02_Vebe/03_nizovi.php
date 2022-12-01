<?php
    #region *** Definisanje niza
    $programskiJezici1 = ["PHP", "Java", "Python"]; // 1. način
    $programskiJezici2 = array("C", "C++", "C#"); // 2. način
    #endregion

    #region *** Pristupanje elementu niza
    echo $programskiJezici1[1];
    echo $programskiJezici1[-1]; 
    echo programskiJezici1[3]; 

    // Ispitivanje da li postoji element na određenom indeksu
    var_dump(isset($programskiJezici1[3]));
    #endregion

    #region *** Izmena elementa
    $programskiJezici1[1] = "JS";
    echo $programskiJezici1[1];
    #endregion

    #region *** Ispis svih elemenata niza
    print_r($programskiJezici1);
    #endregion

    #region *** Broj elemenata u nizu
    echo count($programskiJezici1);
    #endregion

    #region *** Dodavanje elementa na kraj niza
    // 1. način
    $programskiJezici1[] = "Java";
    print_r($programskiJezici1);

    // 2. način
    array_push($programskiJezici1, "Pascal", "Go");
    print_r($programskiJezici1);
    #endregion

    #region *** Vežbanje
    // U vežbi gde smo kreirali izgled web stranice napraviti korekciju, tako da nazivi kartica u meniju budu elementi niza. Dakle "O meni", "O mom kućnom ljubimcu", "O mojim interesovanjima", "O mom poslu" treba da postanu elementi niza i da se na ekranu prikazuju očitavanjem iz niza. Takođe, ispod menija se nalaze sekcije koje su naslovljene upravo kao i kartice u meniju, tako da i ove naslove sekcija očitavati iz niza.
    #endregion
?>