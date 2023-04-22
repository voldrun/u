<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title><?= $title ?></title>
</head>
<body class="container">
        <nav>
            <ol>
                <li>
                    <a href="/task3/index.php">Главная</a>
                </li>
                <li>
                    <a href="/task3/reg/reg.php">Регистрация</a>
                </li>
                <li>
                    <a href="/task3/login/login.php">Вход</a>
                </li>
                <li>
                    <a href="/task3/login/logout.php">Выход</a>
                </li>
                <li>
                    <a href="/task3/form_task3/form.php">Запись на экзамен</a>
                </li>
            </ol>
        </nav>
        <main>
            <h1> <?= $header ?> </h1>
            <div>
                <?= $content ?>
            </div>
        </main>
        <footer>
            <h4>
                Дроботов И.Н.
            </h4>
        </footer>
</body>
</html>