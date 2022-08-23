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
        document.getElementById('uemail').innerHTML = '<span style="font-size:12px;">Email Cannot be empty</span>';
        document.getElementById('email').style.borderColor = '#ff3f34';
        return false;
    }
    var passuser = document.forms["regform"]["password"].value
    if (passuser == "" || passuser == null) {
        document.getElementById('upwd').style.color = '#ff3f34';
        document.getElementById('upwd').innerHTML = '<span style="font-size:12px;">Password Cannot be empty</span>';
        document.getElementById('password').style.borderColor = '#ff3f34';
        return false;
    }
    var passlength = passuser.length;
    if (passlength < 6) {
        document.getElementById('upwd').style.color = '#ff3f34';
        document.getElementById('upwd').innerHTML = '<span style="font-size:12px;">Password at least 6 characters</span>';
        document.getElementById('password').style.borderColor = '#ff3f34';
        return false;
    }
    var cpassuser = document.forms["regform"]["cpassword"].value
    if (cpassuser == "" || cpassuser == null) {
        document.getElementById('ucpwd').style.color = '#ff3f34';
        document.getElementById('ucpwd').innerHTML = '<span style="font-size:12px;">Password Cannot be empty</span>';
        document.getElementById('cpassword').style.borderColor = '#ff3f34';
        return false;
    }

    



}
