function validateform() {
    var usern = document.forms["regform"]["username"].value
    if (usern == "" || usern == null) {
        document.getElementById('uname').style.color = '#ff3f34';
        document.getElementById('uname').innerHTML = '<span style="font-size:12px;">Username connot be empty</span>';
        document.getElementById('username').style.borderColor = '#ff3f34';
        return false;
    }
    var useremail = document.forms["regform"]["email"].value
    if (useremail == "" || useremail == null) {
        document.getElementById('uemail').style.color = '#ff3f34';
        document.getElementById('uemail').innerHTML = '<span>Email Cannot be empty</span>';
        return false;
    }

    var usernlength = usern.length;
    if (usernlength > 5 && usernlength < 20) {
        let textusern = document.getElementById('usernlength').innerHTML;
        document.getElementById('usernlength').style.color = '#0f0';
        document.getElementById('usernlength').innerHTML = '<i class="fas fa-exclamation-triangle"></i> Username at least 5 characters', '<i class="fas fa-exclamation-triangle"></i> Username at least 5 characters';
    }

}


var pwdcheck = function() {
    if (document.getElementById('password').value == document.getElementById('cpassword').value) {
        document.getElementById('pwdmsg').style.color = '#0f0';
        document.getElementById('pwdmsg').innerHTML = '<span><i class="fas fa-check-circle"></i> Password is Match...!</span>';
    } else {
        document.getElementById('pwdmsg').style.color = '#ff3f34';
        document.getElementById('pwdmsg').innerHTML = '<span><i class="fas fa-window-close"></i> Password not Match...!</span>';
    }
}
