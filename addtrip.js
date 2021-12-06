window.onload = function(){
   prepareListener();
	
}

function prepareListener(){
   var start = document.getElementById("startdate");
   var end = document.getElementById("enddate");
   var url = document.getElementById("urlImage");
   start.addEventListener('change',setMin);
   end.addEventListener('change',setMax);
   url.addEventListener('change',verifyURL);
}
function setMax(){
    if(document.getElementById("enddate").value){
        document.getElementById("startdate").max = document.getElementById("enddate").value;
    }
}
function setMin(){
    if(document.getElementById("startdate").value){
        document.getElementById("enddate").min = document.getElementById("startdate").value;
    }
}
function verifyURL(){
    if(document.getElementById("urlImage").value.endsWith(".jpg") == false&& document.getElementById("urlImage").value.endsWith(".png")  == false && document.getElementById("urlImage").value.endsWith(".gif") == false){
        alert("The URL you have entered is not valid");
        document.getElementById("urlImage").value = "";
    }
}
