<?php
    // &&, ||, !, and, or, xor

    #region *** && - vraća true ukoliko su oba izraza tačna
    var_dump(true && false);
    #endregion

    #region *** || - vraća true ukoliko je makar jedan od izraza tačan
    var_dump(true || false);
    var_dump(0 || false);

    function hello(){
        echo "HELLO!!! <br>";
        return false;
    }
    var_dump(hello() || true);
    var_dump(true || hello());
    #endregion

    #region *** ! - unarni operator negacije
    var_dump(!true);
    #endregion

    #region *** razlika između and i && je u tome da and nema prioritet nad =
    $x = true and false;
    var_dump($x);
    #endregion

    #region *** && ima prioritet nad =
    $x = true && false;
    var_dump($x);
    #endregion
?>