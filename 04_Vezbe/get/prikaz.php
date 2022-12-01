<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz podataka iz GET forme</title>
</head>
<body>
    <h3>Zdravo, <?php echo $_GET["ime"]; ?> <?php echo $_GET["prezime"]; ?>!</h3>
    <h4>
        Kao pol uneli ste: 
        <?php 
            $pol = $_GET["pol"];
            if($pol == "m") {
                echo "muški";
            } else if($pol == "z") {
                echo "ženski";
            } else {
                echo "neopredeljen";
            }
        ?> 
    </h4>
</body>
</html>