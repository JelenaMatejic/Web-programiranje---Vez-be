<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET forma</title>
</head>
<body>
    <form action="prikaz.php" method="get">
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
            <input type="radio" name="pol" id="" value="m">Muški
            <input type="radio" name="pol" id="" value="z">Ženski
            <input type="radio" name="pol" id="" value="n" checked>Neopredeljen
        </p>
        <p>
            <input type="submit" value="Pošalji">
        </p>
    </form>
</body>
</html>