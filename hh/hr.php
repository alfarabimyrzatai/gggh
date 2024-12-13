<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>
<body>
    <h1>Форма отправки</h1>
    <form action="result.php" method="get">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="age">Возраст:</label>
        <input type="number" id="age" name="age">
        <br>
        <button type="submit">Отправить (GET)</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST['name']);
        $age = intval($_POST['age']);
        $salary = floatval($_POST['salary']);

        echo "<h2>Полученные данные:</h2>";
        echo "<p>Имя: $name</p>";
        echo "<p>Возраст: $age</p>";
    }
    ?>
</body>
</html>
