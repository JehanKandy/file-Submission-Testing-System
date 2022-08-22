<?php include("lib/layouts/header.php"); ?>
<?php include("lib/layouts/nav.php"); ?>

<div class="login-content">
    <div class="login-title">
        <i class="fas fa-user-alt"></i> Login Here
    </div>
    <div class="login-body">
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="Username">Username : </label><br>
            <input type="text" name="username" id="username" class="login-input" required><br>
            <label for="Username">Password : </label><br>
            <input type="password" name="password" id="password" class="login-input" required>
            <input type="submit" value="Login" name="login" class="login-btn">
        </form>
        <a href="lib/views/reset_pass.php">Forget Password ? </a>
    </div>
</div>


<?php include("lib/layouts/footer.php"); ?>
