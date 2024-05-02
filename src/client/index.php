<?php
require($_SERVER['DOCUMENT_ROOT'].'/controller/Client.php');
require($_SERVER['DOCUMENT_ROOT'].'/controller/Html.php');

    $client = new Client();
    $result = $client->listCustomer();

    $html = new Html();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php echo $html->displayHead('../../assets/'); ?> 
</head>

<body>
    <?php echo $html->displayNavbar();?>
    <h1 data-i18n="client_index_title"></h1>
    <?php if (isset($result)) { ?>
        <table class="customer-table">
            <thead>
                <th>Avatar</th>
                <th>Username</th>
                <th>E-mail</th>
                <th></th>
            </thead>
            <tbody>
            <?php foreach ($result as $client) {?>
                <tr>
                    <td><img src="<?php echo $client[10] ?>" width="50%" alt="avatar user"></td>
                    <td><?php echo $client[8] ?></td>
                    <td><?php echo $client[3] ?></td>
                    <td>
                        <a href="./edit.php?id=<?php echo $client[0] ?>">
                            <button type="button" class="btn btn-outline-primary" data-i18n="edit_button"></button>
                        </a>
                        <a href="#">
                            <button type="button" class="btn btn-outline-danger" data-i18n="delete_button"></button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    <footer>

    </footer>
</body>


</html>