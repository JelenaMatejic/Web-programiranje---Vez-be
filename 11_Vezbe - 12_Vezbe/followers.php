<?php
    require_once 'header.php';
    require_once 'connection.php';

    // echo $_SESSION['id'];
    if(empty($_SESSION['id'])) {
        header('Location: login.php');
    }

    $id = $_SESSION['id'];

    $q = "SELECT u.id, CONCAT(p.name, ' ', p.surname) AS 'fullname', u.username
          FROM users AS u
          INNER JOIN profiles AS p
          ON u.id = p.user_id
          WHERE u.id != $id";

    $res = $conn->query($q);
    if($res->num_rows == 0) {
        echo "<p>No users in database</p>";
    } else {
        echo "<table>
                <tr>
                    <td>ID</td>
                    <td>Full name</td>
                    <td>Username</td>
                    <td>Action</td>
                </tr>
            ";
        
            foreach($res as $row) {
                $friend_id = $row['id'];

                // Ispitujemo da li pratim korisnika
                $q1 = "SELECT *
                       FROM followers
                       WHERE sender_id = $id AND recever_id = $friend_id";

                // Ovaj upit kao rezultat vraća broj redova koji može biti:
                // - 0 u slučaju kada ja ne pratim tog korisnika
                // - 1 u slučaju kada ja pratim tog korisnika
                $res1 = $conn->query($q1);
                $row1 = $res1->num_rows; // 0 ili 1

                // Ispitujemo da li mene prati korisnik
                $q2 = "SELECT *
                       FROM followers
                       WHERE sender_id = $friend_id AND recever_id = $id";
                // Ovaj upit kao rezultat vraća broj redova koji može biti:
                // - 0 u slučaju kada korisnik ne prati mene
                // - 1 u slučaju kada korisnik prati mene
                $res2 = $conn->query($q2);
                $row2 = $res2->num_rows; // 0 ili 1

                // Ako ja ne pratim korisnika
                if($row1 == 0) { 
                    // Treba da stoji Follow ako ni korisnik ne prati mene
                    // Treba da stoji Follow back ako korisnik već prati mene
                    if($row2 == 0) {
                        $status = "Follow";
                    } else {
                        $status = "Follow back";
                    }
                }
                // Ako ja pratim korisnika
                else {
                    $status = "Unfollow"; // Uopšteno, treba da otpratim korisnika
                }

                echo "<tr>
                        <td>$friend_id</td>
                        <td>$row[fullname]</td>
                        <td>$row[username]</td>
                        <td><a href='followers.php?friend=$friend_id'>$status</a></td>
                    </tr>";
            }
        
        echo "</table>";
    }

?>