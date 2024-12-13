<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <h1>Введите данные пользователя</h1>
    <form method="POST" action="">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Возраст:</label>
        <input type="number" id="age" name="age" min="0" required><br><br>

        <label for="salary">Зарплата:</label>
        <input type="number" id="salary" name="salary" min="0" step="0.01" required><br><br>

        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST['name']);
        $age = intval($_POST['age']);
        $salary = floatval($_POST['salary']);

        echo "<h2>Полученные данные:</h2>";
        echo "<p>Имя: $name</p>";
        echo "<p>Возраст: $age</p>";
        echo "<p>Зарплата: $salary руб.</p>";
    }
    ?>
</body>
</html>