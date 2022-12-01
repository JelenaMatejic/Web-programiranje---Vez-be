<?php
    #region *** Ugradjene PHP konstante
    echo PHP_VERSION;
    echo "<br>";
    echo __LINE__;
    echo "<br>";
    echo __FILE__;
    echo "<hr>";
    #endregion

    //define('name', 'value');

    
    #region *** Definisanje konstante
    define("STATUS", "plaćeno");
    echo STATUS;
    #endregion

    #region *** Redefinisanje konstante
    const STATUS = "neplaćeno";
    echo STATUS;
    #endregion

    echo "<hr>";

    #region *** Promena vrednosti konstante
    $iks = 5;
    define("X", $iks);
    echo X;
    $iks = 6;
    echo X; // i dalje ispisuje 5 jer je X konstanta
    $iks++;
    echo X; // i dalje ispisuje 5 jer je X konstanta
    #endregion

    echo "<hr>";
    
    #region *** Definisanje konstante 2
    $a = 1;
    define("STATUS_" . $a, "plaćeno");
    $a++;
    define("STATUS_" . $a, "plaćeno");
    echo STATUS_1, " ", STATUS_2;
    #endregion

    
    #region *** Uslovno definisanje konstante
    if(true) {
        define("HELLO", "Hello world");
    }
    echo HELLO;

    if(false) {
        define("HELLO_", "Hello world");
    }
    echo HELLO_;
    #endregion    
    
?>