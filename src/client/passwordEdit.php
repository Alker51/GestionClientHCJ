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
    <link href="../../assets/style/stylePass.css" rel="stylesheet" />
</head>

<body>
    <div class="form-container">
        <form id="form">
            <div class="input-container">
                <input type="password" id="password" aria-describedby="requirements" required />
                <label for="password" data-i18n="passField"></label>
                <button class="show-password" id="show-password" type="button" role="switch" aria-label="Show password" aria-checked="false">Show</button>
            </div>

            <div id="requirements" class="password-requirements">
                <p class="requirement" id="length">Min. 8 characters</p>
                <p class="requirement" id="lowercase">Include lowercase letter</p>
                <p class="requirement" id="uppercase">Include uppercase letter</p>
                <p class="requirement" id="number">Include number</p>
                <p class="requirement" id="characters">Include a special character: #.-?!@$%^&*</p>
            </div>

            <div class="input-container">
                <input type="password" id="confirm-password" required />
                <label for="confirm-password" data-i18n="passConfirm"></label>
            </div>

            <div class="password-requirements">
                <p class="requirement hidden error" id="match">Passwords must match</p>
            </div>

            <div class="submit-container">
                <input type="submit" id="submit" disabled />
            </div>
        </form>
    </div>

    <footer>

    </footer>
</body>

<script src="../../assets/js/scriptPass.js" type="text/javascript" defer></script>
</html>