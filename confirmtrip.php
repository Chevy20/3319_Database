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
            <h2> Confrim Page for adding trip</h2>
        </div>
        <div class = "Data">
	<?php
	   $tripid = $_POST["tripid"];
	   $tripname = $_POST["tripname"];
	   $startdate = $_POST["startdate"];
	   $enddate = $_POST["enddate"];
	   $country = $_POST["country"];
	   $assignedbus = $_POST["assignedbus"];
	   $urlImage = $_POST["urlImage"];
	   $query = 'SELECT * FROM bustrip  WHERE bustrip.tripid="' . $tripid . '"';
	   $result=mysqli_query($connection,$query);
	   $row=mysqli_fetch_assoc($result);
	   if(!is_null($row) ){
            	echo "A trip with tripid: ".$tripid." already exists and the database and could not be added.";
	   }
	   else{
		$tripidNum = intval($tripid);
		if($urlImage == ""){
		   $urlImage = NULL;
		   $query = 'INSERT INTO bustrip VALUES ('.$tripidNum.' , "'.$tripname .'","'.$startdate .'","'.$enddate .'","'.$country .'","'.$assignedbus .'",NULL)';
		   
		}
		else{
		   $query = 'INSERT INTO bustrip VALUES ('.$tripidNum.', "'.$tripname .'","'.$startdate .'","'.$enddate .'","'.$country .'","'.$assignedbus .'","'.$urlImage .'")';
		   
		}
		$result=mysqli_query($connection,$query);
                if (!$result) {
                   die("Could not insert booking from database.");
                }
		else{
		   echo "Trip added. Please return to home page";
		}	
		

	   }	
	?>            
        </div>
	<div class = "Return">
            <button id = "returnHome" > Return to Main Menu</button>
        </div>
        
	 
    </body>
</html> 
