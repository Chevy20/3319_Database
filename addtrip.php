<!DOCTYPE HTML>
<html>
    <head>
        <link rel ="stylesheet" href = "basestyle.css">
        <meta charset="utf8">
        <title> CS3319 Assignment 3 </title>
        <script src = return.js>  </script>
    </head>   
    <body>
        <div class = "Top">
            <h1 class="MainTitle"> CS 3319 Assignment 3 </h1>
            <h2> This page allows you to submit a trip to be added.</h2>
        </div>
        <div class = "Data">
            <h1> Add a Bus Trip</h1>
	    <form action = "confirmtrip.php" method ="post" id="frm">
	    <label for = "tripid">Enter Trip Id:</label>
	    <input type= "text" id ="tripid" name="tripid" required><br>
            <label for = "tripname">Enter Trip Name</label>
	    <input type= "text" id ="tripname" name="tripname" required><br>
	    <label for = "startdate">Select Start Date</label>
            <input type= "date" id="startdate" name="startdate" required><br>
	    <label for = "enddate">Select End Date</label>	    
	    <input type= "date" id="enddate" name="enddate" required><br>
            <label for = "country">Enter Country</label>
	    <input type= "text" id ="country" name="country" required><br>
	    <?php
		echo "Select Bus:<br>";
                include 'connectdb.php';
		$query = 'SELECT *  FROM bus';
		$result = mysqli_query($connection,$query);
		if(!result){
		   die("Cannot get bus data");
		   
		}
		while ($row = mysqli_fetch_assoc($result)) {
                        echo '<input type="radio" name="assignedbus" value="';
                        echo $row["licenseplate"];
                        echo '"required>' . $row["licenseplate"] . "   |   " . $row["capacity"] . "<br>";
                }
		
	    ?>
	    <label for = "urlImage">Enter Image URL (not required):</label>
	    <input type= "text" id ="urlImage" name="urlImage" ><br>
	    <input type ="submit" value= "Add new Trip">
	    

	                
        </div>
    <script src = addtrip.js> </script>	 
    </body>
</html> 
