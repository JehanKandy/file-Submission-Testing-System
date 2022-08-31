<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_loged.php"); ?>
<?php
if (empty($_SESSION['LoginSession'])) {
    header('location:../../index.php');
}
?>
<link rel="stylesheet" href="../../css/style.css">

<?php include("../layouts/footer.php");?>
