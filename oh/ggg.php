<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Проверяем, установлен ли флажок
        if (isset($_POST['age_confirm']) && $_POST['age_confirm'] === 'yes') {
            echo '<h2>Доступ разрешён. Добро пожаловать на сайт!</h2>';
        } else {
            echo '<h2>Доступ запрещён. Вам должно быть 18 лет или больше.</h2>';
        }
    } else {
    ?>

    <h1>Подтверждение возраста</h1>
    <form method="post" action="">
        <label>
            <input type="checkbox" name="age_confirm" value="yes"> Мне уже есть 18 лет.
        </label>
        <br><br>
        <button type="submit">Войти</button>
    </form>

    <?php
    }
    ?>
</body>
</html>
