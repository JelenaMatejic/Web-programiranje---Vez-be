<?php
    #region *** IF
    $poeni = 95;
    if($poeni > 90) {
        echo "Ocena 10";
    }

    if($poeni > 90) 
        echo "Ocena 10";

    #endregion
    
    #region *** IF - ELSE
    $god = 18;
    if($god >= 18) {
        echo "Punoletna osoba";
    } 
    else {
        echo "Maloletna osoba";
    }
    #endregion

    #region *** IF - ELSEIF - ELSE
    // IF - ELSE IF - ELSE
    $temp = -22;
    if($temp >= 100) {
        echo "Voda isparava";
    } 
    else if($temp > 0) {
        echo "Voda je u tečnom stanju";
    }
    else {
        echo "Voda se ledi";
    }
    #endregion
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Ovde ne možemo koristiti else if konstrukciju, već isključivo elseif -->
    <?php $temp = -22; ?>
    <?php if($temp >= 100): ?>
        <p>Voda isparava</p>
    <?php elseif($temp > 0): ?>
        <p>Voda je u tečnom stanju</p> 
    <?php else: ?>
        <p>Voda je u tečnom stanju</p> 
    <?php endif ?>

</body>
</html>

<?php

        /////////////// VEŽBANJE ///////////////
        
        // 1. ZADATAK
        /*
            U header sekciji, pre ispisa datuma dodati ispis trenutnog dana na srpskom jeziku (pondeljak, utorak, sreda,...)
            U ovu svrhu možete koristiti PHP funkciju date('w'); koja vraća dan u nedelji (0 - nedelja, 1 - ponedeljak,...)
            Takođe u ovu svrhu možete koristiti i PHP funkciju date('N'); koja vraća dan u nedelji (1 - ponedeljak, 2 - utorak,...)
            Takođe u ovu svrhu možete koristiti i PHP funkciju date('l'); koja vraća naziv dana u nedelji (na engleskom jeziku)
        */

        // 2. ZADATAK
        /*
            Napraviti promenljivu i dodeliti joj jedan karakter (npr. "m", "z", "o",...).
            Vrednost ove promenljive treba da predstavlja pol osobe.
            Ukoliko je unet karakter "z" ili karakter "f", na ekranu ispod navigacionog menija prikazati avatar žene i uokviriti sliku punom linijom debljine 3px crvene boje. 
            Ukoliko je unet karakter "m", na ekranu ispod navigacionog menija prikazati avatar muškarca i uokviriti sliku punom linijom debljine 3px zelene boje.
            U svim ostalim slučajevima prikazati avatar po izboru i uokviriti sliku punom linijom debljine 3px žute boje.
        */
?>