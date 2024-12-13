<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $lastName = htmlspecialchars($_POST['last_name']);
    $firstName = htmlspecialchars($_POST['first_name']);
    $middleName = htmlspecialchars($_POST['middle_name']);

    // Выводим введенные данные
    echo "<h2>Введенные данные:</h2>";
    echo "<p>Фамилия: $lastName</p>";
    echo "<p>Имя: $firstName</p>";
    echo "<p>Отчество: $middleName</p>";
} else {
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма ввода</title>
</head>
<body>
    <h1>Введите свои данные</h1>
    <form method="post" action="">
        <label for="last_name">Фамилия:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="first_name">Имя:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="middle_name">Отчество:</label><br>
        <input type="text" id="middle_name" name="middle_name" required><br><br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>
<?php
}
?>
