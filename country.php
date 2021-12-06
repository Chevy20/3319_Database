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
            <h2> This page will let you search trips by their country</h2>
        </div>
        <div class= "Data">
            <h1>Here are the countries you can search:<br></h1>
            <form action ="getcountry.php" method="post">
                <?php
                include 'conutryRadioBtn.php';
                ?>
                <input type ="submit" value = "Get trips">
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