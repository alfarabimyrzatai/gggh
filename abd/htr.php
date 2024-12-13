<?php
// Стартуем сессию
session_start();

// Проверяем, отправлены ли числа
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем числа из формы
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;

    // Сохраняем числа в сессию
    $_SESSION['num1'] = $num1;
    $_SESSION['num2'] = $num2;

    echo "Числа сохранены в сессии!";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сохранить числа</title>
</head>
<body>
    <h1>Введите два числа</h1>
    <form method="POST">
        <label for="num1">Число 1:</label>
        <input type="number" name="num1" required>
        <br><br>
        <label for="num2">Число 2:</label>
        <input type="number" name="num2" required>
        <br><br>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
