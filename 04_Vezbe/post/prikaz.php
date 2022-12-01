<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz podataka iz POST forme</title>
</head>
<body>
    <h3>Osoba <?php echo $_POST["ime"] . " " .  $_POST["prezime"]; ?> </h3>
    <h4>Pol: <?php echo $_POST["pol"]; ?></h4>
    <p>
        Znanje programskih jezika:
        <?php
            if(isset($_POST["jezik"])) {
                $jezici = $_POST["jezik"];
                echo "<ul>";
                foreach($jezici as $j) {
                    echo "<li>" . $j . "</li>";
                }
                echo "</ul>";
            }
        ?>
    </p>
    <p>
        Znanje programskih jezika:
        <?php 
            $jezici = $_POST["jezik"];
            $svi_jezici = ["C", "C++", "C#", "Java", "Python", "PHP", "Java Script"];
            echo "<table border='1'>";

            foreach($svi_jezici as $sj){
                echo "<tr>";
                    echo "<td>" . $sj . "</td>";
                    echo "<td>";
                    echo in_array($sj, $jezici) ? "X" : " "; 
                    echo "</td>";
                echo  "</tr>";
            }

            echo "</table>";

        ?>
    </p>
</body>
</html>