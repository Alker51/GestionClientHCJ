<?php
require($_SERVER['DOCUMENT_ROOT'].'/controller/Client.php');
require($_SERVER['DOCUMENT_ROOT'].'/controller/Html.php');

$html = new Html();

if(!isset($_GET['id'])) {
    
} else {
    $client = new Client();
    $result = $client->getCustomerData($_GET['id']);
}

if(isset($_POST['state']))
    $client->editCustomer($_POST);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title data-i18n="title"></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="../../assets/style/main.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="../../assets/js/translate.js" type="text/javascript"></script>
</head>

<body>
    <?php echo $html->displayNavbar();?>
    <h1 data-i18n="add_title"></h1>
    <form action=""  method="post">
        <input type="hidden" name="state" value="edited">
        <label>
            <p data-i18n="firstname"></p>
            <input type="text" name="firstname">
        </label>
        <br>
        <label>
            <p data-i18n="lastname"></p>
            <input type="text" name="lastname">
        </label>
        <br>
        <label>
            <p data-i18n="phone"></p>
            <input type="tel" name="phone">
        </label>
        <br>
        <label>
            <p data-i18n="email"></p>
            <input type="email" name="email">
        </label>
        <br>
        <label>
            <p data-i18n="adress"></p>
            <input type="text" name="adress">
        </label>
        <br>
        <label>
            <p data-i18n="city"></p>
            <input type="text" name="city">
        </label>
        <br>
        <label>
            <p data-i18n="country"></p>
            <input type="text" name="country">
        </label>
        <br>
        <label>
            <p data-i18n="username"></p>
            <input type="text" name="username">
        </label>
        <br>
        <label>
            <p data-i18n="pass"></p>
            <input type="password" name="pass">
        </label>
        <label>
            <p data-i18n="passCheck"></p>
            <input type="password" name="passCheck">
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
        <h1> Result: <?php var_dump($result) ?></h1>
    <?php } ?>
    <footer>

    </footer>
</body>


</html>