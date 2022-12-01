<?php
    $name = "Ana";
    $$name = "Milica"; // Kao da se druga varijabla zove $Ana

    echo $name, $Ana;
    echo $name, $$name;
    echo "$name, $$name";
    echo "$name, {$$name}";
    echo "$name, ${$name}";
?>