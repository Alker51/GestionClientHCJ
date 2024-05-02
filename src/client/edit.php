<?php
require($_SERVER['DOCUMENT_ROOT'].'/controller/Client.php');
require($_SERVER['DOCUMENT_ROOT'].'/controller/Html.php');

$html = new Html();

if(!isset($_GET['id'])) {
    
} else {
    $client = new Client();
    $result = $client->getCustomerData($_GET['id']);
}

if(isset($_POST['id']))
    $edited = $client->editCustomer($_POST);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php echo $html->displayHead('../../assets/'); ?>
</head>

<body>
    <?php if($edited) { ?>
        <script type="text/javascript">
            alert('Modification enregistrée(s).');
            window.location = "./index.php";
        </script> ;
    <?php } ?>
    <?php echo $html->displayNavbar();?>
    <h1 data-i18n="add_title"></h1>
    <form action=""  method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <label>
            <p data-i18n="firstname"></p>
            <input type="text" name="firstname" placeholder="<?php echo $result[0][1]; ?>">
        </label>
        <br>
        <label>
            <p data-i18n="lastname"></p>
            <input type="text" name="lastname" placeholder="<?php echo $result[0][2]; ?>">
        </label>
        <br>
        <label>
            <p data-i18n="phone"></p>
            <input type="tel" name="phone" placeholder="<?php echo $result[0][4]; ?>">
        </label>
        <br>
        <label>
            <p data-i18n="email"></p>
            <input type="email" name="email" placeholder="<?php echo $result[0][3]; ?>">
        </label>
        <br>
        <label>
            <p data-i18n="adress"></p>
            <input type="text" name="adress" placeholder="<?php echo $result[0][5]; ?>">
        </label>
        <br>
        <label>
            <p data-i18n="city"></p>
            <input type="text" name="city" placeholder="<?php echo $result[0][6]; ?>">
        </label>
        <br>
        <label>
            <p data-i18n="country"></p>
            <input type="text" name="country" placeholder="<?php echo $result[0][7]; ?>">
        </label>
        <br>
        <label>
            <p data-i18n="iban"></p>
            <input type="text" name="rib" placeholder="<?php echo $result[0][11]; ?>">
        </label>
        <br>
        <label>
            <p data-i18n="bic"></p>
            <input type="text" name="bic" placeholder="<?php echo $result[0][12]; ?>">
        </label>
        <br>
        <label>
            <p data-i18n="submit"></p>
            <input type="submit">
        </label>
    </form>
    <footer>

    </footer>
</body>


</html>