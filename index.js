window.onload = function(){
    prepareListner();
}
function prepareListner(){
    var buttons = document.getElementsByClassName("button");
    for(var i = 0; i <buttons.length; i++){
        buttons[i].addEventListener('click',navigatePage);
    }
    
}
function navigatePage(){
    switch(this.id){
        case "busTripButton":
            window.location.href="bustrip.php";
            break;
        case "seachCountryButton":
            window.location.href="country.php";
            break;
        case "addBookingButton":
            window.location.href="addbooking.php";
            break;
        case "deleteBookingButton":
            window.location.href="deletebooking.php";
            break;
        case "searchBookingButton":
            window.location.href="searchbooking.php";
            break;
        case "tripWithoutBookingButton":
            window.location.href="nobooking.php";
            break;
        case "passengersButton":
            window.location.href="passengers.php";
            break;
    }
}