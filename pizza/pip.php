<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Form</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $greet = isset($_POST['greet']);

        if ($greet) {
            echo "<h1>Привет, $name!</h1>";
        } else {
            echo "<h1>До свидания, $name!</h1>";
        }
    } else {
    ?>

    <form method="POST" action="">
        <label for="name">Введите ваше имя:</label>
        <input type="text" id="name" name="name" required>

        <label for="greet">Приветствовать:</label>
        <input type="checkbox" id="greet" name="greet">

        <button type="submit">Отправить</button>
    </form>

    <?php
    }
    ?>
</body>
</html>
