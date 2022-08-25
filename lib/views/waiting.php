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
        Hi <?php user_id(); ?>
        your account approval is pending
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
