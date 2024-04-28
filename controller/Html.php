<?php
class Html {
    function displayNavbar() {
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