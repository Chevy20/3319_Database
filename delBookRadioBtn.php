<?php
   $query = "SELECT * FROM booking";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Which booking are you trying to delete? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="bookings" value="';
        echo $row["passengerid"] ." ".$row["tripid"] ;
        echo '">' . $row["passengerid"] . " " . $row["tripid"] . " " .$row["price"]. "<br>";
   }
   mysqli_free_result($result);
?>