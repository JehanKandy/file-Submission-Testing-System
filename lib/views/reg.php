<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav.php"); ?>
<link rel="stylesheet" href="../../css/style.css">


<div class="reg-content">
    <div class="login-title">
        <i class="fas fa-user-plus"></i> Register Here
    </div>
    <div class="login-body">
        <?php 
            include("../function/function.php");
            if(isset($_POST['register'])){
                $result = reg_user($_POST['username'],$_POST['email'],md5($_POST['password']));
                echo $result;
            }
        
        ?>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" name="regform" onsubmit="return validateform()">
            <label for="Username">Username : </label><br>
            <input type="text" name="username" id="username" class="login-input" "><span id="uname"></span><br>
            <label for="Email">Email : </label><br>
            <input type="email" name="email" id="email" class="login-input" "><span id="uemail"></span><br>
            <label for="Password">Password : </label><br>
            <input type="password" name="password" id="password" class="login-input" ><span id="upwd"></span><br>
            <label for="Cpassword">Confirm Password : </label><br>
            <input type="password" name="cpassword" id="cpassword" class="login-input" ><span id="ucpwd"></span><br>
            <p id="passerror"></p>
            <input type="reset" value="Clear" class="clear-btn">
            <input type="submit" value="Register" name="register" class="reg-btn">
        </form>
        <hr>
        Already have an Account ? <a href="../../index.php">Login</a>
    </div>
</div>

<script src="../../js/script.js"></script>

<?php include("../layouts/footer.php"); ?>
