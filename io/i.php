<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);

    // Выводим данные на экран
    echo "<h1>Результат:</h1>";
    echo "<p>Имя: $name</p>";
    echo "<p>Возраст: $age</p>";
} else {
?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма ввода имени и возраста</title>
    </head>
    <body>
        <h1>Введите ваше имя и возраст</h1>
        <form method="post" action="">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
            <br><br>
            <label for="age">Возраст:</label>
            <input type="number" id="age" name="age" required>
            <br><br>
            <button type="submit">Отправить</button>
        </form>
    </body>
    </html>
<?php
}
?>

