<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../function/function.php"); ?>

<div class="waiting-content">
    <div class="waiting-title">
        Pending Approval 
        <hr>
    </div>
    <div class="waiting-body">
        Hi <?php user_id(); ?>, <br>
        your account approval is pending <br><br>
        it will takes 10 minutes for approval the account <br>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
