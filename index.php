<?php include("lib/layouts/header.php"); ?>
<?php include("lib/layouts/nav.php"); ?>
<?php include("lib/function/function.php"); ?>

<div class="login-content">
    <div class="login-title">
        <i class="fas fa-user-alt"></i> Login Here
    </div>
    <div class="login-body">
        <?php 
            if(isset($_POST['login'])){

            }
        ?> 
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" name="loginform" onsubmit="return validatelogin()">
            <label for="Username">Username : </label><br>
            <input type="text" name="loginusername" id="loginusername" class="login-input"><span id="usererror"></span><br>
            <label for="Password">Password : </label><br>
            <input type="password" name="loginpassword" id="loginpassword" class="login-input"><span id="userpasserror"></span>
            <input type="submit" value="Login" name="login" class="login-btn">
        </form>
        <a href="lib/views/reset_pass.php">Forget Password ? </a><br>
        <hr>
        Don't have an Account ? <a href="lib/views/reg.php">Create One</a>
    </div>
</div>

<script src="js/script.js"></script>

<?php include("lib/layouts/footer.php"); ?>
