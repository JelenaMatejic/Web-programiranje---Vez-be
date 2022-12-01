<?php
require_once "connection.php";

echo "<h3>Pacijenti visoki ispod proseka</h3>";
$q = "SELECT * FROM pacijenti WHERE visina < (SELECT AVG(visina) FROM pacijenti)";

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