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
            <h2> This is the trip selection site. You can choose a trip to manage or delete.</h2>
        </div>
        <div class= "Data">
            <h1>Here is the List:<br></h1>
            <?php
                $sortBy = $_POST["sortBy"];
                $order = $_POST["orderBy"];
                $query = "SELECT * FROM bustrip ORDER BY ".$sortBy ." ".$order."";
                $result = mysqli_query($connection,$query);
                if (!$result) {
                        die("databases query failed.");
                    }
                echo "<h2>Which Trip would you like to interface with?</h2> </br>";
                echo "<h3>Display format is tripname | country</h3>";
                echo '<form  action = "managetrip.php" method="post" id="frm" ';
                echo "<br>";
                while ($row = mysqli_fetch_assoc($result)) {
                        echo '<input type="radio" name="trips" value="';
                        echo $row["tripid"];
                        echo '">' . $row["tripname"] . "   |   " . $row["country"] . "<br>";
                }
                
                mysqli_free_result($result);
                mysqli_close($connection)
            ?>
            <input type="submit" name="action" value="Update" >
            <input type="submit" onclick= "return confirm('Are your sure you want to delete that?')" name="action" value="Delete" >
            </form>'
        </div>
        <div class = "Return">
            <button id = "returnHome" > Return to Main Menu</button>
            <button id = "returnLast"> Return to Previous Page</button>
        </div>
	 
	 
    </body>
</html>