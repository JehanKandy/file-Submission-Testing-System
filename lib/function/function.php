<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function reg_user($username, $email, $password){
        $con = Connection();

        $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && email = '$email'";
        $check_user_result = mysqli_query($con, $check_user);
        $user_nor = mysqli_num_rows($check_user_result);
        
        $_SESSION['userId'] = $email;
        if($user_nor > 0){
            return "<span style='color:red;'>User Already Exists..!</span>";
        }else{
            $insert_user = "INSERT INTO user_tbl(username,email,pass1,roll,user_status)VALUES('$username','$email','$password','student','1')";
            $insert_user_result = mysqli_query($con,$insert_user);
            header("location:../../index.php");
        }
    }

    function user_id(){
        
    }
    

?>
