<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="reg-content">
    <div class="login-title">
        <i class="fas fa-user-plus"></i> Register Here
    </div>
    <div class="login-body">
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="Username">Username : </label><br>
            <input type="text" name="username" id="username" class="login-input" required><br>
            <label for="Email">Email : </label><br>
            <input type="email" name="email" id="email" class="login-input" required><br>
            <label for="Password">Password : </label><br>
            <input type="password" name="password" id="password" class="login-input" onkeyup="pwdcheck()" required><br>
            <label for="Cpassword">Confirm Password : </label><br>
            <input type="password" name="cpassword" id="cpassword" class="login-input" onkeyup="pwdcheck()" required>
            <p id="pwdmsg"></p>
            <input type="reset" value="Clear" class="clear-btn">
            <input type="submit" value="Register" name="register" class="reg-btn">
        </form>
        <hr>
        Already have an Account ? <a href="../../index.php">Login</a>
    </div>
</div>


<?php include("../layouts/footer.php"); ?>
