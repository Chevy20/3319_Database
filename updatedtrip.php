<!DOCTYPE HTML>
<html>
    <?php
    session_start();
    ?>
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
        <div class = "Top">
            <h1 class="MainTitle"> CS 3319 Assignment 3 </h1>
            <h2> Updated Trip</h2>
        </div>
        <div class= "Data">
            <?php
                function stringEndsWith($var,$end){
                    $length = strlen($end);
                    if ($length == 0) {
                        return true;
                    }
                
                    return (substr($var, -$length) === $end);
                }
                $tripName = $_POST['tripnameText'];
                $startDate = $_POST['startdateBox'];
                var_dump($startDate);
                $endDate = $_POST['enddateBox'];
                $imageUrl = $_POST['urlImageText'];
                $tripId = $_SESSION['tripid'];
                
                if($tripName != ""){
                    $query = 'UPDATE bustrip SET tripname ="'.$tripName.'" WHERE tripid ="'.$tripId.'"';
                    $result = mysqli_query($connection,$query);
                    if(!$result){
                        echo "Update Failed";
                    }
                    
                }
                if($startDate != ""){
                    $query = 'UPDATE bustrip SET startdate ="'.$startDate.'" WHERE tripid ="'.$tripId.'"';
                    $result = mysqli_query($connection,$query);
                    if(!$result){
                        echo "Update Failed";
                    }
                }
                if($endDate != ""){
                    $query = 'UPDATE bustrip SET enddate ="'.$endDate.'" WHERE tripid ="'.$tripId.'"';
                    $result = mysqli_query($connection,$query);
                    if(!$result){
                        echo "Update Failed";
                    }
                  
                }
                if($imageUrl != ""){
                    $query = 'UPDATE bustrip SET urlImage ="'.$imageUrl.'" WHERE tripid ="'.$tripId.'"';
                    $result = mysqli_query($connection,$query);
                    if(!$result){
                        echo "Update Failed";
                    }
                    
                }
                
                echo "<h1>Here are the trips:<br></h1>";
                echo "<h1>Each entry is in the form: tripid|tripname|startdate|enddate|country|assignedbus|Image: </h1>";
                $query = 'SELECT * FROM bustrip  WHERE bustrip.tripid="' . $tripId . '"';
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
            mysqli_close($connection);
            ?>
        </div>
        <div class = "Return">
            <button id = "returnHome" > Return to Main Menu</button>
            <button id = "returnLast"> Return to Previous Page</button>
        </div>
	 
	 
    </body>
</html>