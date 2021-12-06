<?php
    $query = "SELECT T.tripname FROM bustrip AS T WHERE NOT EXISTS (SELECT B.tripid FROM booking AS B WHERE B.tripid = T.tripid)";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Databases query failed!");
    }
    
    while ($row = mysqli_fetch_assoc($result)) {
        
        foreach($row as $value){
            echo strval($value) . "<br>";
        }
        
    }
    mysqli_free_result($result);
    

?>
