<?php
// Начинаем сессию
session_start();

// Проверка, была ли форма отправлена
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Сохраняем выбранное значение в сессии
    $_SESSION['selected_value'] = $_POST['dropdown'];
}

// Определяем, какое значение было выбрано при последней отправке
$selected = isset($_SESSION['selected_value']) ? $_SESSION['selected_value'] : '';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма с выбранным значением</title>
</head>
<body>

    <form method="POST" action="">
        <label for="dropdown">Выберите опцию:</label>
        <select name="dropdown" id="dropdown">
            <option value="option1" <?php echo $selected == 'option1' ? 'selected' : ''; ?>>Опция 1</option>
            <option value="option2" <?php echo $selected == 'option2' ? 'selected' : ''; ?>>Опция 2</option>
            <option value="option3" <?php echo $selected == 'option3' ? 'selected' : ''; ?>>Опция 3</option>
        </select>
        <button type="submit">Отправить</button>
    </form>

</body>
</html>
