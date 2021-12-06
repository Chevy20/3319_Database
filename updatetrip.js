
window.onload = function(){
    prepareListener();
}



function prepareListener(){
    var startDate = document.getElementById("startdateBox");
    var endDate = document.getElementById("enddateBox");
    var imgUrl = document.getElementById("urlImageText");
    if(startDate != null){

	startDate.addEventListener('change',setMin);
    }
    if (endDate!=null){

	endDate.addEventListener('change',setMax);	
    }
    if (imgUrl != null){

	imgUrl.addEventListener('change',verifyURL);
    }


    
    
    
    var homeButton = document.getElementById("returnHome");
    var backButton = document.getElementById("returnLast");
    if (homeButton !=  null){
        homeButton.addEventListener("click",returnHome);
    }
    if (backButton !=  null){
        backButton.addEventListener("click",returnLast);
    }
}
function setMax(){
    if(document.getElementById("enddateBox").value){
        document.getElementById("startdateBox").max = document.getElementById("enddateBox").value;
    }
}
function setMin(){
    if(document.getElementById("startdateBox").value){
        document.getElementById("enddateBox").min = document.getElementById("startdateBox").value;
    }
}
function verifyURL(){
    if(document.getElementById("urlImageText").value.endsWith(".jpg") == false&& document.getElementById("urlImageText").value.endsWith(".png")  == false && document.getElementById("urlImageText").value.endsWith(".gif") == false){
        alert("The URL you have entered is not valid");
        document.getElementById("urlImageText").value = "";
    }
}
function returnHome(){
    window.location.href="index.html";
}
function returnLast(){
    window.history.back();
}
