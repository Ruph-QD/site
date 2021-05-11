function validateContactForm() {
    var valid = true;
    for (let k =0; k<document.getElementsByClassName("input-field").length; k++) {
        document.getElementsByClassName("input-field")[k].style.border = '1px solid #e0dfdf';
    }
    let userName = (document.getElementById("userName").value ? document.getElementById("userName").value : "");
    let userEmail = (document.getElementById("userEmail").value ? document.getElementById("userEmail").value : "");
    let subject = (document.getElementById("subject").value ? document.getElementById("subject").value : "");
    let content = (document.getElementById("content").value ? document.getElementById("content").value : "");

    document.getElementsByClassName("info").innerHTML = "";

    if (userName == "") {
        document.getElementById("userName").style.border = '1px solid #e66262';
        valid = false;
    }
    if (userEmail == "") {
        document.getElementById("userEmail").style.border = '#e66262 1px solid';
        valid = false;
    }
    if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        document.getElementById("userEmail").style.border = '#e66262 1px solid';
        valid = false;
    }

    if (subject == "") {
        document.getElementById("subject").style.border = '#e66262 1px solid';
        valid = false;
    }
    if (content == "") {
        document.getElementById("content").style.border = '#e66262 1px solid';
        valid = false;
    }
    console.log(valid);
    return valid;
}