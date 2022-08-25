<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function reg_user($username, $email, $password){
        $con = Connection();

        $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && email = '$email'";
        
    }
    

?>
