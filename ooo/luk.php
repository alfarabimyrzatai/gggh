<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оставить отзыв</title>
</head>
<body>
    <h1>Оставьте ваш отзыв</h1>

    <?php
    // Переменная для хранения отзыва
    $feedback = "";

    // Проверка, была ли форма отправлена
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Получение отзыва из формы
        $feedback = htmlspecialchars($_POST['feedback']);

        // Проверка, что поле не пустое
        if (!empty($feedback)) {
            echo "<h2>Спасибо за ваш отзыв!</h2>";
            echo "<p>Ваш отзыв: " . $feedback . "</p>";
        } else {
            echo "<p style='color: red;'>Пожалуйста, заполните поле отзыва.</p>";
        }
    }
    ?>

    <form method="post" action="">
        <label for="feedback">Ваш отзыв:</label><br>
        <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br><br>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
