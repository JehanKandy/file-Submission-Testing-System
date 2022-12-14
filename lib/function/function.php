<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function reg_user($username, $email, $password){
        $con = Connection();

        $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && email = '$email'";
        $check_user_result = mysqli_query($con, $check_user);
        $user_nor = mysqli_num_rows($check_user_result);
        
        $_SESSION['userId'] = $username;
        if($user_nor > 0){
            return "<span style='color:red;'>User Already Exists..!</span>";
        }else{
            $insert_user = "INSERT INTO user_tbl(username,email,pass1,roll,is_pending,user_status)VALUES('$username','$email','$password','student','1','0')";
            $insert_user_result = mysqli_query($con,$insert_user);
            header("location:../views/waiting.php");            
        }
    }

    function user_id(){
        $con = Connection();
        $userid = strval($_SESSION['userId']);
        echo $userid;
    }

    function login_user($login_username, $login_password){
        $con = Connection();

        $login_user = "SELECT * FROM user_tbl WHERE username = '$login_username' && pass1 = '$login_password' && is_pending = '0' && user_status = '1'";
        $login_user_result = mysqli_query($con,$login_user);
        $login_user_nor = mysqli_num_rows($login_user_result);
        $login_user_row = mysqli_fetch_assoc($login_user_result);

        if($login_user_nor > 0){
            if($login_user_row['roll'] == 'student'){
                setcookie('login',$login_user_row['email'],time()+60*60,'/');
                $_SESSION['LoginSession'] = $login_user_row['email'];
                header("location:lib/routes/student.php");
            }
            elseif($login_user_row['roll'] == 'admin'){
                setcookie('login',$login_user_row['email'],time()+60*60,'/');
                $_SESSION['LoginSession'] = $login_user_row['email'];
                header("location:lib/routes/admin.php");
            }
        }else{
            return "<span style='color:red;'>No recodes Found...!</span>";
        }
    }

    function login_id(){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);
        $get_user_id = "SELECT * FROM user_tbl WHERE email = '$email'";
        $get_user_id_result = mysqli_query($con,$get_user_id);
        $get_user_row = mysqli_fetch_assoc($get_user_id_result);

        echo $get_user_row['username'];
    }
    

?>
