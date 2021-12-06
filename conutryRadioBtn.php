<?php
   $query = "SELECT DISTINCT country FROM bustrip";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Which country would you like to search for trips in? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="countries" value="';
        echo $row["country"];
        echo '">' . $row["country"] . "<br>";
   }
   mysqli_free_result($result);
?>