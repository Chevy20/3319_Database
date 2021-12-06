<!DOCTYPE HTML>
<html>
    <head>
        <link rel ="stylesheet" href = "addbooking.css">
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
            <h2> This page will let you add a booking</h2>

        </div>
        <form action ="submitBooking.php" method = "post" id = "frm">
            <div class = Container>
                <div class= "Pass">
                    <?php
                        include 'passengerRadioBtn.php';
                    ?>
                </div>
                <div class= "Trip">
                    <?php
                        include 'tripRadioButton.php';
                    ?>
                </div>
                <div class= "Price">
                    <label for="price">Price:</label>
                    <input type="text" id="price" name = "price" required><br>
                </div>
            </div>
            <input type ="submit" value = "Add Booking">
        </form>
    </body>
</html> 