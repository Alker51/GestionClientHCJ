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
    <h1 data-i18n="client_index_title"></h1>
    <?php if (isset($result)) { ?>
        <table class="customer-table">
            <thead>
                <th>username</th>
                <th>e-mail</th>
                <th></th>
            </thead>
            <tbody>
            <?php foreach ($result as $client) {?>
                <tr>
                    <td><?php echo $client[0] ?></td>
                    <td><?php echo $client[1] ?></td>
                    <td>
                        <button type="button" class="btn btn-outline-primary" data-i18n="edit_button"></button>
                        <button type="button" class="btn btn-outline-danger" data-i18n="delete_button"></button>
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