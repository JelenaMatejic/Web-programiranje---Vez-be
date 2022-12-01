<?php
    #region *** Definisanje asocijativnog niza
    $programskiJezici = 
    [
        "php" => "8.0", 
        "python" => "3.9"
    ];
    #endregion

    #region *** Ispis svih vrednosti elemenata asocijativnog niza
    print_r($programskiJezici);
    #endregion

    #region *** Pristupanje elementima asocijativnog niza
    echo $programskiJezici["php"];
    echo $programskiJezici["js"]; // Ne možemo pristupati elementu čiji ključ nije definisan
    #endregion

    #region *** Menjanje vrednosti elementima asocijativnog niza
    // $programskiJezici["php"] = "8.1"; 
    // $programskiJezici["c#"] = "9.0";
    // print_r($programskiJezici);
    #endregion

    #region *** Podnizovi asocijativnih nizova
    $programskiJezici = [
        "php" => [
            "isOpenSource" => true,
            "lastVersion" => "8.0",
            "extension" => ".php"
        ],
        "python" => "3.9"
    ];
    #endregion

    #region *** Pristup asocijativnom nizu unutar asocijativnog niza
    echo $programskiJezici["php"]["extension"];
    #endregion

    #region *** Kastovanje ključeva
    $niz = 
    [
        true => "a", 
        1 => "b", 
        "1" => "c", 
        1.8 => "d"
    ];
    print_r($niz);
    #endregion

    #region *** Ne treba mešati asocijativne i obične nizove
    $niz = ["a", "b", 100 => "c", "d", "e"];
    print_r($niz);
    #endregion

?>