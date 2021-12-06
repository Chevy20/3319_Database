<!DOCTYPE HTML>
<html>
    <head>
        <link rel ="stylesheet" href = "basestyle.css">
        <meta charset="utf8">
        <title> CS3319 Assignment 3 </title>
        <script src = return.js>  </script>
    </head>   
    <body>
        <?php 
            include 'connectdb.php';
        ?>
        <div class= "Data">
            <h1>Here are the trips:<br></h1>
            <h1>Each entry is in the form: tripid|tripname|startdate|enddate|country|assignedbus|Image: </h1>
            <p>If the entry for imageurl appears blank, it is because there is no specifed image for this trip.</p>
            
            <?php
                function stringEndsWith($var,$end){
                    $length = strlen($end);
                    if ($length == 0) {
                        return true;
                    }
                
                    return (substr($var, -$length) === $end);
                }
                $whichCountry= $_POST["countries"];
                $query = 'SELECT * FROM bustrip  WHERE bustrip.country="' . $whichCountry . '"';
                $result=mysqli_query($connection,$query);
                if (!$result) {
                    die("database query2 failed.");
                }
                while ($row=mysqli_fetch_assoc($result)) {
                    $trip = '';
                    foreach($row as $value){
                        if(stringEndsWith(strval($value),".png")){
                            $image = $value;
                            $imageData = base64_encode(file_get_contents($image));
                            $trip .= 'Image: <br>'.'<img width= 150 height = 150 src="data:image/png;base64,'.$imageData.'">'.'<br>';
                            
                        }
                        elseif(stringEndsWith(strval($value),".jpg")){
                            $image = $value;
                            $imageData = base64_encode(file_get_contents($image));
                            $trip .= 'Image: <br>'.'<img width= 150 height = 150 src="data:image/jpeg;base64,'.$imageData.'">'.'<br>';
                            
                        }
                        elseif(stringEndsWith(strval($value),".gif")){
                            $image = $value;
                            $imageData = base64_encode(file_get_contents($image));
                            $trip .= 'Image: <br>'.'<img width= 150 height = 150 src="data:image/gif;base64,'.$imageData.'">'.'<br>';
                            
                        }
                        elseif(strval($value) === ''){
                            $image = 'https://c.tenor.com/JMucL9NFRXoAAAAC/placeholder-text.gif';
                            $imageData = base64_encode(file_get_contents($image));
                            $trip .= 'Image: <br>'.'<img width= 150 height = 150 src="data:image/gif;base64,'.$imageData.'">'.'<br>';
                        }
                        else{
                            $trip .= strval($value) . '   |   ';
                        }    
                }
                echo $trip;
            }
                mysqli_free_result($result);
            ?>

                <?php
                mysqli_close($connection);
                ?>
        </div>
        <div class = "Return">
            <button id = "returnHome" > Return to Main Menu</button>
            <button id = "returnLast"> Return to Previous Page</button>
        </div>
	 
	 
    </body>
</html> 