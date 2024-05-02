<?php
require($_SERVER['DOCUMENT_ROOT'].'/controller/Client.php');
require($_SERVER['DOCUMENT_ROOT'].'/controller/Html.php');

$html = new Html();

if(isset($_POST['username'])) {
    $client = new Client();
    $result = $client->createCustomer($_POST);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php echo $html->displayHead('../../assets/'); ?>
</head>

<body>
    <?php echo $html->displayNavbar();?>
    <h1 data-i18n="add_title"></h1>
    <form action=""  method="post">
        <label>
            <p data-i18n="firstname"></p>
            <input type="text" name="firstname" required>
        </label>
        <br>
        <label>
            <p data-i18n="lastname"></p>
            <input type="text" name="lastname" required>
        </label>
        <br>
        <label>
            <p data-i18n="phone"></p>
            <input type="tel" name="phone" required>
        </label>
        <br>
        <label>
            <p data-i18n="email"></p>
            <input type="email" name="email" required>
        </label>
        <br>
        <label>
            <p data-i18n="adress"></p>
            <input type="text" name="adress" required>
        </label>
        <br>
        <label>
            <p data-i18n="city"></p>
            <input type="text" name="city" required>
        </label>
        <br>
        <label>
            <p data-i18n="country"></p>
            <input type="text" name="country" required>
        </label>
        <br>
        <label>
            <p data-i18n="username"></p>
            <input type="text" name="username" required>
        </label>
        <br>
        <label>
            <p data-i18n="pass"></p>
            <input type="password" name="pass" required>
        </label>
        <label>
            <p data-i18n="passCheck"></p>
            <input type="password" name="passCheck" required>
        </label>
        <br>
        <label>
            <p data-i18n="avatar"></p>
            <input type="url" name="avatar">
        </label>
        <br>
        <label>
            <p data-i18n="submit"></p>
            <input type="submit">
        </label>
    </form>

    <?php if (isset($result)) { ?>
        <h1> Result: <?php echo $result ?></h1>
    <?php } ?>
    <footer>

    </footer>
</body>


</html>