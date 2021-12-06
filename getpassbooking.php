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
            <h1>Here are the bookings:<br></h1>
            <ol>
                <?php
                    $whichOwner= $_POST["passengers"];
                    $query = 'SELECT * FROM passenger, booking WHERE booking.passengerid=passenger.passengerid AND booking.passengerid="' . $whichOwner . '"';
                    $result=mysqli_query($connection,$query);
                    if (!$result) {
                        die("database query2 failed.");
                    }
                    while ($row=mysqli_fetch_assoc($result)) {
                        $booking = '';
                        foreach($row as $value){
                            $booking .= strval($value) . '   |   ';
                        }
                        echo "<li>". $booking . "</li>";
                    }
                    mysqli_free_result($result);
                ?>
            </ol>
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