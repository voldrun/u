<?php
session_start();
require_once('../boot.php');
$user_id = $_SESSION['user_id'];
$selected_lesson = '';
if ($_POST['select-lesson'] == 1) $selected_lesson = "Программирование в UNIX";
if ($_POST['select-lesson'] == 2) $selected_lesson = "Программные технологии ИНТЕРНЕТ";
if ($_POST['select-lesson'] == 3) $selected_lesson = "Разработка приложений на Java";
if ($_POST['select-lesson'] == 4) $selected_lesson = "Функциональное программирование";
$text = 'Уважаемый '.$_POST['name'].' '.$_POST['surname'].'!
Ждем вас на экзамен по '.$selected_lesson .' в '.$_POST['time'].'. 
Экзамен пройдет в форме '.$_POST['control'].'.';
$comment = $_POST['comment'] ?? '';
$sql = "INSERT INTO registers (id, user_id, text, comment) VALUES (NULL, $user_id, '$text', '$comment')";
$stmt = get_mysqli()->query($sql);
if (get_mysqli()->affected_rows) {
    echo 'Успешно!';
    echo '<a href="/task3/">На главную</a>';
}
else {
    echo 'Ошибка!';
}
?>