<?php
require_once "connection.php";

echo "<h3>Pacijenti sa kritičnim BMI</h3>";
$q = "SELECT * FROM pacijenti 
    WHERE ROUND(tezina / POWER(visina / 100, 2), 3) < 18.5 OR ROUND(tezina / POWER(visina / 100, 2), 3) > 30;";

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