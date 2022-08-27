<?php 
    include("../function/function.php");
    setcookie('login',NULL,-60*60,'/');
    session_destroy();
    session_unset();
    header("location:../../index.php");
?>