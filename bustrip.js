window.onload = function(){
    prepareListner();
}

//Comment
function prepareListner(){
   var sortTrip = document.getElementById("sortByTrip");
   var sortCountry = document.getElementById("sortByCountry");
   var asc = document.getElementById("ordAsc");
   var dsc =  document.getElementById("ordDsc");
   var addTrip = document.getElementById("addtrip");
   listBtn = document.getElementById("genList");
   sortTrip.addEventListener("click",makeListBtn);
   sortCountry.addEventListener("click",makeListBtn);
   asc.addEventListener("click",makeListBtn);
   dsc.addEventListener("click",makeListBtn);
   addTrip.addEventListener("click",navAddTrip);
}
function makeListBtn(){
    if((document.getElementById("sortByTrip").checked||document.getElementById("sortByCountry").checked )&&(document.getElementById("ordAsc").checked||document.getElementById("ordDsc").checked)){
        document.getElementById("genList").style.visibility = "visible";
    }
    
}
function navAddTrip(){
    location.href="addtrip.php";
}
