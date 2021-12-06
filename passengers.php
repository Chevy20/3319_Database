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
            <h2> This page will list information about all the passengers</h2>
        </div>
        <div class= "Data">
            <h2> Here is the data of all passengers with passport information ordered by last name. </h1>
            <p> Each item in the list constitutes a passenger. The data will follow the form: <br> |Passenger ID | First Name | Last Name| Passport Number | Country Of Citizenship | Expriy Date | Birth Date | </P> 
            <?php 
                include 'getpassengers.php';
            ?>
        </div>
        <div class = "Return">
            <button id = "returnHome" > Return to Main Menu</button>
            <button id = "returnLast"> Return to Previous Page</button>
        </div>
    </body>
</html> 