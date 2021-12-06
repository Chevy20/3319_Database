<?php
    $query = "SELECT * FROM passenger AS P INNER JOIN passport AS T ON P.passengerId = T.passengerId ORDER BY P.lastname";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Databases query failed!");
    }
    echo "<ol>";
    while ($row = mysqli_fetch_assoc($result)) {
        $person = '';
        foreach($row as $value){

            $person .= strval($value) . '   |   ';
        }
        echo "<li>". $person . "</li>";
    }
    mysqli_free_result($result);
    echo "</ol>";

?>
