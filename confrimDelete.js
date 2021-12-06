window.onload = function(){
    prepareListner();
}
function prepareListner(){
    var frm = document.getElementById('frm');
    frm.addEventListener("submit", onFormSubmission);
}
function onFormSubmission(e){
    var flag = confirm("Do you really want to delete? Press okay for yes, cancel for no.");
    return flag;
}

