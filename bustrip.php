<!DOCTYPE HTML>
<html>
    <head>
        <link rel ="stylesheet" href = "bustrip.css">
        <meta charset="utf8">
        <title> CS3319 Assignment 3 </title>
        <script src = "return.js">  </script>
        <script src = "bustrip.js">  </script>
    </head>   
    <body>
        <div class = "Top">
            <h1 class="MainTitle"> CS 3319 Assignment 3 </h1>
            <h2> This page will take you to the trip management site or allow you to add a trip.</h2>
        </div>
        <div class= "DataWrap">
            <div class = "List">
		<h1>Select Trip To Manage</h1>
                <form action = "triplist.php" method = "post" id = "frm1">
                    <input type="radio" name="sortBy" value="tripname" id ="sortByTrip"> Sort By Trip
                    <input type="radio" name="sortBy" value="country" id ="sortByCountry"> Sort By Country<br>
                    <input type="radio" name="orderBy" value="ASC" id ="ordAsc"> Ascending Order
                    <input type="radio" name="orderBy" value="DESC" id ="ordDsc"> Descending Order
                    <input type ="submit" value = "Get Trip List" id ="genList">
                </form>
            </div>
            <div class = "Add">
                <h1> Add a bustrip</h1>
                <button type = "button" id="addtrip">Add New Trip</button>
            </div>
        </div>
	 
    </body>
</html> 
