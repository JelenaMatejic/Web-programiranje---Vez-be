<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>POST forma</title>
</head>
<body>
    <form action="prikaz.php" method="post">
        <p>
            <label for="">Ime:</label>
            <input type="text" name="ime" id="">
        </p>
        <p>
            <label for="">Prezime:</label>
            <input type="text" name="prezime" id="">
        </p>
        <p>
            <label for="">Pol:</label>
            <input type="radio" name="pol" id="" value="Muški">Muški
            <input type="radio" name="pol" id="" value="Ženski">Ženski
            <input type="radio" name="pol" id="" value="Neopredeljen" checked>Neopredeljen
        </p>
        <p>
            <label for="">Znanje programskih jezika:</label>
            <input type="checkbox" name="jezik[]" id="" value="C">C
            <input type="checkbox" name="jezik[]" id="" value="C++">C++
            <input type="checkbox" name="jezik[]" id="" value="C#">C#
            <input type="checkbox" name="jezik[]" id="" value="Java">Java
            <input type="checkbox" name="jezik[]" id="" value="Python">Python
            <input type="checkbox" name="jezik[]" id="" value="PHP">PHP
            <input type="checkbox" name="jezik[]" id="" value="Java Script">Java Script
        </p>
        <p>
            <input type="submit" value="Pošalji">
        </p>
    </form>
</body>
</html>