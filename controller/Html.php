<?php
class Html {
function displayHead(string $pathAssets) : string {
    return '<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title data-i18n="title"></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="'. $pathAssets .'style/main.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="'. $pathAssets .'js/translate.js" type="text/javascript"></script>';
}

    function displayNavbar() : string {
        return '<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">
                <img src="https://ui-avatars.com/api/?name=Gestion+Client&length=2&rounded=true&background=870e0e&color=ffffff"
                    alt="Gestion Client" width="30" height="30" class="d-inline-block align-text-top" />
                <p data-i18n="title"></p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse button-searchbar" id="navbarSupportedContent">
                <ul class="nav nav-underline navbar">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/index.php" data-i18n="navitem_home"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Clients
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item custom-item">
                                <a href="/src/client/index.php" data-i18n="list"></a>
                            </li>
                            <li class="dropdown-item custom-item">
                                <a href="/src/client/add.php" data-i18n="add"></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Commandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sites</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" data-i18n="language">
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="/index.php" onclick="changeLanguage(\'en\')">
                                    <img src="https://flagsapi.com/US/flat/32.png">
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="/index.php" onclick="changeLanguage(\'fr\')">
                                    <img src="https://flagsapi.com/FR/flat/32.png">
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" data-i18n="search"/>
                    <button class="btn btn-outline-success" type="submit" data-i18n="search">
                    </button>
                </form>
            </div>
        </div>
    </nav>';
    }
}
?>