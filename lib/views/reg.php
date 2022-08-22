<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="reg-content">
    <div class="login-title">
        <i class="fas fa-user-alt"></i> Register Here
    </div>
    <div class="login-body">
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="Username">Username : </label><br>
            <input type="text" name="username" id="username" class="login-input" required><br>
            <label for="Email">Email : </label><br>
            <input type="email" name="email" id="email" class="login-input" required>
            <label for="Password">Username : </label><br>
            <input type="text" name="username" id="username" class="login-input" required><br>
            <label for="Username">Password : </label><br>
            <input type="password" name="password" id="password" class="login-input" required>
            <input type="submit" value="Login" name="login" class="login-btn">
        </form>
        <hr>
        Already have an Account ? <a href="../../index.php">Login</a>
    </div>
</div>


<?php include("../layouts/footer.php"); ?>
