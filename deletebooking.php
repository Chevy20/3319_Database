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
        <div class = "Top">
            <h1 class="MainTitle"> CS 3319 Assignment 3 </h1>
            <h2> This page will let you delete a booking</h2>
        </div>
        <div class= "Data">
            <h1>Here bookings you can delete:<br></h1>
            <p>The format is passengerid | tripid | price|. <br> </p>
            <form onSubmit="return confirm('Are you sure you wish to delete?');" action = "removeBooking.php" method="post" >
                <?php
                    include 'delBookRadioBtn.php';
                ?>
                <input type ="submit" value = "Delete Booking">
            </form>
            <?php
                mysqli_close($connection)
            ?>
        </div>
        <div class = "Return">
            <button id = "returnHome" > Return to Main Menu</button>
            <button id = "returnLast"> Return to Previous Page</button>
        </div>
	 
    </body>
</html> 