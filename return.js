window.onload = function(){
    prepareListner();
}
function prepareListner(){
    var homeButton = document.getElementById("returnHome");
    var backButton = document.getElementById("returnLast");
    if (homeButton !=  null){
	homeButton.addEventListener("click",returnHome);
    }
    if (backButton !=  null){
	backButton.addEventListener("click",returnLast);
    }
    
    
}
function returnHome(){
    window.location.href="index.html";
}
function returnLast(){
    window.history.back();
}
