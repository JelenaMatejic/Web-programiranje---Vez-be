<?php
    // Varijable otpočinju $ znakom.
    // Iza $ ne sme naziti broj ili specijalan karakter (_ nije specijalan karakter)

    #region *** Primer varijable
    $name = "Jelena";
    $Name = "Sanja";
    echo $name;
    echo $Name;
    echo "<hr>";
    #endregion

    #region *** Dodeljivanje po vrednosti
    $x = 1;
    $y = $x;
    $x = 3;
    echo $y;
    echo "<hr>";
    #endregion
 
    #region *** Dodeljivanje po referenci sa &
    $x = 1;
    $y = &$x;
    $x = 3;
    echo $y;
    #endregion

    #region *** Ispis promenljivih u okviru stringa
    echo "<p>Hello $name</p>";
    echo '<p>Hello $name</p>'; 
    echo "<p>Hello {$name}</p>";
    echo "Hello " . $name;
    #endregion

    #region *** Skalarni tipovi (bool, int, float, string)
    $completed = true;
    $score = 72;
    $price = 0.99;
    $name = "Jelena";


    echo "<p> $completed " . gettype($completed) . "</p>";
    echo "<p> $score </p>";
    echo "<p> $price </p>";
    echo "<p> $name </p>";

    echo gettype($name);
    var_dump($name);
    var_dump($price);
    echo "<br>";

    $a = "2.45";
    $b = (int)"7"; // Eksplicitna konverzija stringa "7" u integer
    var_dump($a);
    var_dump($b);

    echo "<hr>";
    #endregion

    
    // Računske operacije
    #region *** 1. primer
    $a = 2;
    $b = 3;
    $c = $a + $b;
    echo $c . "<br>";
    #endregion

    #region *** 2. primer
    $a = 2;
    $b = "3";
    $c = $a + $b; // Konvertuje string "3" u int prilikom sabiranja
    echo $c . "<br>";
    #endregion

    #region *** 3. primer
    $a = 2.5;
    $b = "3";
    $c = $a + $b;
    echo $c . "<br>";
    #endregion

    #region *** 4. primer
    $a = "2.5";
    $b = 3;
    $c = $a + $b;
    echo $c . "<br>";
    #endregion

    #region *** 5. primer
    $a = "2.5";
    $b = "3";
    $c = $a + $b;
    echo $c . "<br>";
    echo "<hr>";
    #endregion
    
    #region *** Eksplicitna konverzija
    $i = (int)true;
    echo $i . "<br>";

    $i = (int)5.77; // Odseca deo iza decimalne tacke
    echo $i . "<br>";

    $i = (int)"5.77"; 
    echo $i . "<br>";

    $i = (int)"18asdasdasdads456"; // Odseca sve iza prvog nenumerickog karaktera
    echo $i . "<br>";

    $i = (int)"hjkhjkhjkhk"; 
    echo $i . "<br>";

    $i = (int)null; 
    echo $i . "<br>";

    var_dump($i);
    var_dump(is_int($i));
    #endregion

    #region *** Varljivost float brojeva
    $x1 = 0.23;
    $y1 = 1 - 0.77;
    var_dump($x1, $y1);
    if( $x1 == $y1 ) {
        echo "DA";
    }
    else {
        echo "NE";
    }
    echo "<hr>";

    // Sve što ne može da konvertuje u float, vraća kao 0
    $x = 5;
    var_dump((float)$x);
    $x = 'php';
    var_dump((float)$x);
    $x = 15.5;
    var_dump((float)$x);
    #endregion
    
    #region *** Rad sa stringovima
    $prezime = "Divac";
    $ime_prezime = "Ana $prezime";

    // Heredoc - ispisivanje dugih i često nepreglednih stringova koji mogu sadržati i specijalne karaktere. U okviru ovih stringova možemo ispisivati i promenljive.
    $a = 5;
    $tekst = 
    <<<TEXT
        Ovo je 
        višeredni 
        tekst "!'
        $a
    TEXT;
    echo $tekst;
    echo nl2br($tekst);
    #endregion

    
    #region *** NULL
    // NULL ili null - ispravna su oba za korišćenje
    $a = null;
    echo $a;
    var_dump($a);
    var_dump(is_null($a));

    // Kada promenljive nisu definisane ili kada m uradimo unset dobijamo NULL vrednost
    var_dump($a1);
    $a1 = 111;
    unset($a1);
    var_dump($a1);

    // Null možemo i konvertovati u različite tipove podataka
    $x = NULL;
    var_dump((string)$x);
    var_dump((int)$x);
    var_dump((bool)$x);
    var_dump((array)$x);
    #endregion

    #region *** Zadaci za vežbanje

    // 1. Zadatak
    // Učitati dva cela broja x i y, a zatim im zameniti vrednosti.

    // 2. Zadatak
    // Ulazni podaci su početak i kraj nekog vremenskog intervala, izraženi u satima i minutima: (sat1,min1) i (sat2,min2). Odrediti dužinu vremenskog intervala izraženu u satima i minutima. Pretpostaviti da su oba termina u okviru istog dana.   

    // 3. Zadatak
    // Mirko je u apoteci kupio lek u bočici koja sadrži $n tableta, pri čemu je $n >= 3. Od lekara je dobio uputstvo da taj lek treba da pije po jednu tabletu tri puta dnevno, sve dok ima tableta za ceo dan. Odrediti koliko dana Mirko treba da pije lek, kao i koliko tableta ostaje nesikorišćeno u toku terapije.
    #endregion
    
    ?>