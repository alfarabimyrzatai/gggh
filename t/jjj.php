<?php
session_start(); // Стартуем сессию
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма ввода данных</title>
</head>
<body>
    <h1>Введите свои данные</h1>
    <form action="save_data.php" method="POST">
        <label for="surname">Фамилия:</label>
        <input type="text" id="surname" name="surname" required><br><br>
        
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="age">Возраст:</label>
        <input type="number" id="age" name="age" required><br><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>
