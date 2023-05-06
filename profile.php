<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: account.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-weidth, initial-scale=1.0">
        <title>Личный кабинет</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        
        <header class="header">
            <div class="container">
                <div class="header__body">
                    <a href="#" class="header__logo">
                        <img src="images/header_logo.jpg" alt="">
                    </a>
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <nav class="header__menu">
                        <ul class="header__list">
                            <li>
                                <a href="./index.html" class="header__link">Главная</a>
                            </li>
                            <li>
                                <a href="./aboutme.html" class="header__link">Обо мне</a>
                            </li>
                            <li>
                                <a href="./skills.html" class="header__link">Навыки</a>
                            </li>
                            <li>
                                <a href="./communication.html" class="header__link">Способы связи</a>
                            </li>
                            <li>
                                <a href="./gallery.html" class="header__link">Галлерея</a>
                            </li>
                            <li>
                                <a href="./profile.php" class="header__link">Личный кабинет</a>
                            </li>
                            <li>
                                <a href="./registration.php" class="header__link">Регистрация</a>
                            </li>
                            <li>
                                <a href="./game.html" class="header__link">Игра</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        
        <div class="content">
            <div class="container">
                <div class="profile__content">
                    <img class="profile__img" src="<?= $_SESSION['user']['avatar'] ?>" alt="">
                    <h1 class="profile__h1"><?= $_SESSION['user']['fio'] ?></h1>
                    <ul class="profile__list">
                        <li>
                            <a class="profile__email" href="#"><?= $_SESSION['user']['email'] ?></a>
                        </li>
                        <li>
                            <a class="profile__logout" href="vendor/logout.php" class="logout">Выход</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquary-3.4.1.slim.min.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>