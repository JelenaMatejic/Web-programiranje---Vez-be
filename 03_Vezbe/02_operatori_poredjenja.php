<?php
    $x = 5;
    $y = "5";
    
    var_dump($x == $y); // Poredi po vrednosti
    var_dump($x === $y); // Poredi po tipu i po vrednosti
    var_dump($x != $y); // <> se takođe koristi za različito po vrednosti
    var_dump($x !== $y); // Različito po tipu ili različito po vrednosti
    var_dump($x < $y); 
    var_dump($x > $y);
    var_dump($x <= $y);
    var_dump($x >= $y);

    #region *** Operator $x <=> $y vraća 0 ukoliko su $x i $y jednaki, vraća -1 ukoliko je $x < $y, u suprotnom vraća 1
    var_dump(5 <=> 5);
    var_dump(5 <=> 6);
    var_dump(6 <=> 5);
    #endregion

    #region *** Ternarni operator ?:
    $rezultat = 5===3 ? "True" : "False";
    echo $rezultat;
    #endregion
?>