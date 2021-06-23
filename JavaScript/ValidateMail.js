function validateContactForm() {
    var valid = true;

    let userName = (document.getElementById("userName").value ? document.getElementById("userName").value : "");
    let userEmail = (document.getElementById("userEmail").value ? document.getElementById("userEmail").value : "");
    let subject = (document.getElementById("subject").value ? document.getElementById("subject").value : "");
    let content = (document.getElementById("content").value ? document.getElementById("content").value : "");

    if (userName == "") {
        document.getElementById("label-name").style.color = 'red';
        valid = false;
    }
    if (userEmail == "") {
        document.getElementById("label-email").style.color = 'red';
        valid = false;
    }
    if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        document.getElementById("label-email").style.color = 'red';
        valid = false;
    }

    if (subject == "") {
        document.getElementById("label-subject").style.color = 'red';
        valid = false;
    }
    if (content == "") {
        document.getElementById("content").style.border = 'red';
        valid = false;
    }
    console.log(valid);
    return valid;
}
