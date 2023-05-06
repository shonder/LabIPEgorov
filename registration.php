<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-weidth, initial-scale=1.0">
        <title>Регистрация</title>
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
                                <a href="./account.php" class="header__link">Личный кабинет</a>
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
                <div class="form__registr">
                    <form class="registr" action="vendor/signup.php" method="post" enctype="multipart/form-data">
                        <label>ФИО</label>
                        <input type="text" name="fio" placeholder="Введите свое полное имя">
                        <label>Логин</label>
                        <input type="text" name="login" placeholder="Введите свой логин">
                        <label>Почта</label>
                        <input type="email" name="email" placeholder="Введите адрес своей почты">
                        <label>Изображение профиля</label>
                        <input type="file" name="avatar">
                        <label>Пароль</label>
                        <input type="password" name="password" placeholder="Введите пароль">
                        <label>Подтверждение пароля</label>
                        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
                        <button type="submit">Зарегистрироваться</button>
                        <p class="registr__p">
                            У вас уже есть аккаунт? - <a class="registr__link" href="/account.php">авторизируйтесь</a>!
                        </p>
                        <?php
                            if ($_SESSION['message']) {
                                echo '<p class="registr__msg"> ' . $_SESSION['message'] . ' </p>';
                            }
                            unset($_SESSION['message']);
                        ?>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquary-3.4.1.slim.min.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>