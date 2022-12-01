<?php
    #region *** WHILE sintaksa
    $i = 0;
    while($i <= 5) {
        echo $i++ . " ";
    }

    // while alternativna sintaksa
    $i = 0;
    while($i <= 5):
        echo $i++ . " ";
    endwhile;
    #endregion

    #region *** break
    $i = 0;
    while(true) {
        echo $i++ . " ";
        if($i > 5){
            break;
        }
    }

    // break na više nivoa
    $i = 0;
    while(true) {
        echo $i++ . " ";
        while($i < 5){
            echo $i++ . " ";
            break 2;
        }
    }
    #endregion

    #region *** while - continue
    $i = 0;
    while($i <= 5) {
        if($i%2 == 0) {
            $i++;
            continue;
        }
        $i++;
        echo $i;
    }
    #endregion

    #region *** do - while
    $i = 10;
    do {
        echo $i++ . " ";
    }while($i <= 5);
    #endregion
?>