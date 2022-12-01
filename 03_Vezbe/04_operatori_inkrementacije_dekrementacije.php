<?php
    $x = 5;

    #region ***
    // Post inkrement - Prvo vraća vrednost, a onda povećava $x++;
    echo $x++;
    echo $x;

    // Post dekrement - Prvo vraća vrednost, a onda smanjuje $x--;
    #endregion
    
    #region *** 
    // Pre inkrement - Prvo povećava vrednost, a onda vraća vrednost ++$x;
    echo ++$x; 

    // Pre dekrement - Prvo smanjuje vrednost, a onda vraća vrednost --$x;
    #endregion

    #region *** null vrednost
    $x = null;
    echo --$x;
    echo ++$x;
    #endregion
    
    #region *** string vrednosti
    $x = "abc";
    echo ++$x;

    $x = "abz";
    echo ++$x;
    // echo --$x; // Ne radi
    #endregion
?>