<?php
require($_SERVER['DOCUMENT_ROOT'].'/controller/Html.php');
$html = new Html();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php echo $html->displayHead('./assets/'); ?>
</head>

<body>
<?php echo $html->displayNavbar();?>
</body>

<footer>

</footer>

</html>