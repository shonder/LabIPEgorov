<?php

    session_start();
    require_once 'connect.php';

    $fio = $_POST['fio'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../registration.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `fio`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$fio', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../account.php');

    } 
    else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../registration.php');
    }
?>