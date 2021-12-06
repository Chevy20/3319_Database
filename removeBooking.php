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
            <h1>The Booking has been deleted:<br></h1>
            
            <?php
                $key = $_POST["bookings"];
                $ids = explode(" ",$key);
                $query = 'DELETE FROM booking  WHERE booking.passengerid="' . $ids[0] . '" AND booking.tripid= "' . $ids[1] . '"';
                $result=mysqli_query($connection,$query);
                if (!$result) {
                    die("Could not delete booking from database.");
                }
                mysqli_close($connection);
            ?>
        </div>
        <div class = "Return">
            <button id = "returnHome" > Return to Main Menu</button>
        </div>
	 
	 
    </body>
</html> 