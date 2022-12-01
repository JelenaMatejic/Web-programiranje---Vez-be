<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortiranje pacijenata</title>
</head>
<body>
    <?php
            require_once "connection.php";
    ?>

    <h3>Pacijenti sortirani po visini</h3>
    <?php
        $q = "SELECT * FROM pacijenti ORDER BY visina DESC" ;
             $result = $conn->query($q);
             echo "<table border = 1> 
             <tr>
                 <th>Ime</th>
                 <th>Prezime</th>
                 <th>Visina</th>
                 <th>Tezina</th>
             </tr>";
            if($result->num_rows > 0) {
                  
                    while ($red = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>$red[ime] </td>
                            <td>$red[prezime] </td>
                            <td>$red[visina] </td> 
                            <td>$red[tezina] </td>
                        </tr>
                    ";               
                }
            }
            echo "</table>";
    ?>

    <h3>Pacijenti sortirani po težini</h3>
    <?php
        $q = "SELECT * FROM pacijenti ORDER BY tezina DESC" ;
            $result = $conn->query($q);
            echo "<table border = 1> 
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Visina</th>
                <th>Tezina</th>
            </tr>";
           if($result->num_rows > 0) {
                 
                   while ($red = $result->fetch_assoc()) {
                   echo "<tr>
                           <td>$red[ime] </td>
                           <td>$red[prezime] </td>
                           <td>$red[visina] </td> 
                           <td>$red[tezina] </td>
                       </tr>
                   ";               
               }
           }
           echo "</table>";
    ?>

    <h3>Pacijenti sortirani po datumu rođenja</h3>
    <?php
        $q = "SELECT * FROM pacijenti ORDER BY YEAR(datum_rodjenja) DESC" ;
        $result = $conn->query($q);
        echo "<table border = 1> 
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Visina</th>
            <th>Tezina</th>
            <th>Datum rodjenja</th>
        </tr>";
        if($result->num_rows > 0) {
             
               while ($red = $result->fetch_assoc()) {
               echo "<tr>
                       <td>$red[ime] </td>
                       <td>$red[prezime] </td>
                       <td>$red[visina] </td> 
                       <td>$red[tezina] </td>
                       <td>$red[datum_rodjenja] </td>
                   </tr>
               ";               
           }
        }
        echo "</table>";
    ?>
    
</body>
</html>