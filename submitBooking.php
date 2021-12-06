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
            <h1>Booking Confirmation:<br></h1>
                <?php
                    $passenger= $_POST["passengers"];
                    $trip = $_POST["trips"];
                    $price =  $_POST["price"];
                    $query = 'SELECT * FROM booking  WHERE booking.passengerid="' . $passenger . '" AND booking.tripid= "' . $trip . '"';
                    $result=mysqli_query($connection,$query);
                    if (!$result) {
                        die("Query failed");
                    }
                    if (mysqli_num_rows($result) == 0) {
                        $passengerNum= intval($passenger);
                        $tripNum = intval($trip);
                        $priceNum = floatval($price);
                        $query = 'INSERT INTO booking VALUES ('.$passengerNum .','.$tripNum .','.$priceNum .')';
                        $result=mysqli_query($connection,$query);
                        if (!$result) {
                            die("Could not insert booking from database.");
                        }
                        echo "<h1> Booking Added! </h1>";

                    } 
                    else {
                        echo "<script>
                        alert('A booking for this passenger/trip combo already exists! Cannot add');
                        window.location.href='addbooking.php';
                        </script>";
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
