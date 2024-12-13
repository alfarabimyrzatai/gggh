<?php
// Запускаем сессию для сохранения выбранного языка
session_start();

// Если язык выбран, сохраняем его в сессии
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['language'] = $_POST['language'];
}

// Если язык не выбран, используем язык по умолчанию
$selectedLanguage = isset($_SESSION['language']) ? $_SESSION['language'] : 'ru';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор языка</title>
</head>
<body>
    <h1>Выберите язык</h1>
    <form method="POST" action="">
        <label>
            <input type="radio" name="language" value="ru" <?php if ($selectedLanguage == 'ru') echo 'checked'; ?>>
            Русский
        </label>
        <label>
            <input type="radio" name="language" value="en" <?php if ($selectedLanguage == 'en') echo 'checked'; ?>>
            English
        </label>
        <br>
        <button type="submit">Сохранить</button>
    </form>

    <h2>Выбранный язык: <?php echo ($selectedLanguage == 'ru') ? 'Русский' : 'English'; ?></h2>
</body>
</html>
