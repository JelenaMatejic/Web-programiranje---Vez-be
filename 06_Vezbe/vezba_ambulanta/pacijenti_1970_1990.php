<?php
require_once "connection.php";
$q = "SELECT * FROM pacijenti WHERE YEAR(datum_rodjenja) BETWEEN 1970 AND 1990";
$result = $conn->query($q);

echo "<h3>Pacijenti rođeni između 1970. i 1990.</h3>";
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