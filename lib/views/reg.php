<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="login-content">
    <div class="login-title">
        <i class="fas fa-user-alt"></i> Register Here
    </div>
    <div class="login-body">
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="Username">Username : </label><br>
            <input type="text" name="username" id="username" class="login-input" required><br>
            <label for="Username">Password : </label><br>
            <input type="password" name="password" id="password" class="login-input" required>
            <input type="submit" value="Login" name="login" class="login-btn">
        </form>
        <hr>
        Don't have an Account ? <a href="lib/views/reg.php">Create One</a>
    </div>
</div>


<?php include("../layouts/footer.php"); ?>
