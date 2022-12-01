<?php
    echo time(); // Vraća broj timestemp (broj sekundi od 1970. godine do sada)

    #region *** Zadaci za vežbanje
    // 1. Zadatak: Korišćenjem prethodne funcije, izračunati i na ekranu ispisati koji će timestamp biti sutra u ovo vreme

    // 2. Zadatak: Korišćenjem prethodne funkcije, izračunati i na ekranu ispisati koliko je sekundi prošlo od trenutka Vašeg rođenja
    #endregion

    #region *** date
    // Vreme možemo formatirati na različite načine (najbolje je videti u dokumentaciji)
    // https://www.php.net/manual/en/ref.datetime.php
    echo "<hr>";
    echo date('d/m/Y g:ia');
    #endregion

    #region *** konfiguracioni fajl
    // Vreme koje se prikazuje je ono vreme koje je podešeno u PHP konfiguracionom fajlu- Vremensku zonu koja je setovana možemo promeniti (sve vremenske zone i funkcionalnosti je najbolje pogledati u konfiguracionom fajlu)
    echo "<hr>";
    echo date_default_timezone_get();
    date_default_timezone_set("UTC");
    echo date_default_timezone_get();
    echo date('m/d/Y g:ia');
    #endregion


?>