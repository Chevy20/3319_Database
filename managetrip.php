
<!DOCTYPE HTML>
<html>
    <?php
    session_start();
    ?>
    <head>
        <link rel ="stylesheet" href = "basestyle.css">
        <meta charset="utf8">
        <title> CS3319 Assignment 3 </title>
	       
        
    </head>   
    <body>
        <?php 
            include 'connectdb.php';
        ?>
        <div class = "Top">
            <h1 class="MainTitle"> CS 3319 Assignment 3 </h1>
            <?php
                if ($_POST['action'] == 'Update') {
                    echo "<h2> Manage a trip</h2>";
                    echo "<h2> You can change the trip name, start/end date, and the image url if there is none for the trip </h2>";
                } else if ($_POST['action'] == 'Delete') {
                    echo "<h2> Delete a trip</h2>";
                    echo "<h2> Trying to delete requested trip</h2>";
                } 
            ?>
        </div>
        <div class= "Data">
	    
            <?php
                if ($_POST['action'] == 'Update') {
                    $_SESSION['tripid'] = $_POST['trips'];      
                    echo "Enter desired changes. Any fields left blank will be ignored when updating record.<br>";
                    echo '<div class="edits">';
                    echo '<form  action = "updatedtrip.php" method="post" id="frm" ';
                    echo "<br>";
                    echo '<label for="tripnameText" id ="namelbl">Enter Trip Name:</label>';
                    echo "<input type='text' id='tripnameText' name='tripnameText' ><br>";
                    echo '<label for="startdateBox" id ="startlbl">Enter Start Date:</label>';
                    echo "<input type='date' id='startdateBox' name='startdateBox'><br>";
                    echo '<label for="enddateBox" id ="endlbl">Enter End Date:</label>';
                    echo "<input type='date' id='enddateBox' name='enddateBox'><br>";
                    echo '<label for="tripnameText" id ="piclbl">Enter Image URL:</label>';
                    echo "<input type='text' id='urlImageText' name='urlImageText'> <br>";
		    echo '<input type="submit" onclick= "return confirm("Are you sure these are the edits you want?")" name="sendEdits">';
		    
                } 
                ?>
                </div>
                
                </form>
                <?php
                if ($_POST['action'] == 'Delete') {
                    $trip = $_POST['trips'];
                    $query = 'DELETE FROM bustrip WHERE bustrip.tripid="' . $trip. '"';
                    $flag = 1;
                    try {
                        $result =  mysqli_query($connection,$query);                     
                        if(!$result) {
                            $error = "You cannot delete this row";
                            throw new Exception($error);
                        }    
                   } 
                    catch (Exception $e) {
                        echo 'Could not delete because there are bookings for tripid: '.$trip.'';
                        $flag = 0;
                    }
		    if ($flag != 0){
		    
			echo 'Deleted trip with trip id: '.$trip.'';
		    }
                    

                }
                mysqli_close($connection);
            ?>
        </div>
        <div class = "Return"> 
            <button id = "returnHome" > Return to Main Menu</button>
            
        </div>
	 
	 
    </body>

<script src = updatetrip.js></script>

</html>
