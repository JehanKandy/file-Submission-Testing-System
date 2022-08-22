var pwdcheck = function() {
    if (document.getElementById('password').value == document.getElementById('cpassword').value) {
        document.getElementById('pwdmsg').style.color = '#0f0';
    }
}
