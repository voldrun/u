<?php
session_start();
require_once('../boot.php');
$title = 'Задание 3';
$header = 'Запись на экзамен';
if (isset($_SESSION['login'])) {
    $registers = '';
    $sql = "SELECT text FROM registers";
    $stmt = get_mysqli()->query($sql);
    while($row = $stmt->fetch_row()) {
        $registers .= '<p>'.$row[0].'</p>';
    }
    $content = file_get_contents('form_content.php');
    $content .= '<div class="d-none" id="registers-list">
                    <strong>Список участников</strong>
                    '.$registers.'
                 </div>
                 <button type="button" class="btn btn-primary mb-3 mt-3" id="registers-list-btn">Показать/скрыть список участников</button> 
                <script>
                function toggleList() {
                    document.getElementById("registers-list").classList.toggle("d-none");
                }
                const toggleBtn = document.getElementById("registers-list-btn");
                toggleBtn.addEventListener("click", toggleList);
                </script>';
}
else {
    $content = "страница доступна только после авторизации!";
}
include('../components/layout.php');
?>