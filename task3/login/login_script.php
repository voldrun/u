<?php
require_once('../boot.php');
if (isset($_POST['login']) && isset($_POST['password1'])) {
    $login = $_POST['login'];
    $password = $_POST['password1'];
    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $stmt = get_mysqli()->query($sql);
    if ($stmt) {
        while($row = $stmt->fetch_row()) {
            $_SESSION['login'] = $login;
            $_SESSION['user_id'] = $row[0];
            header("Location: ../form_task3/form.php");
        }
    } else {
        header("Location: login.php");
    }
}
?>