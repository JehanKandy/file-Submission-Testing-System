var pwdcheck = function() {
    var pwd1 = document.getElementById('password').value
    var cpwd = document.getElementById('cpassword').value

    if (pwd1 == "") {
        document.getElementById('uname').style.color = '#ff3f34';
        document.getElementById('uname').innerHTML = '<span></span>'
    }



    if (document.getElementById('password').value == document.getElementById('cpassword').value) {
        document.getElementById('pwdmsg').style.color = '#0f0';
        document.getElementById('pwdmsg').innerHTML = '<span><i class="fas fa-check-circle"></i> Password is Match...!</span>';
    } else {
        document.getElementById('pwdmsg').style.color = '#ff3f34';
        document.getElementById('pwdmsg').innerHTML = '<span><i class="fas fa-window-close"></i> Password not Match...!</span>';
    }
}
