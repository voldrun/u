<?php
$title = 'Вход';
$header = 'Введите логин и пароль для входа Доска объявлений';
$content = file_get_contents('login_content.php');
include('../components/layout.php');
?>