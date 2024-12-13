<?php
// Инициализация переменных с пустыми значениями
$city = "";
$country = "";

// Если форма была отправлена, обработать данные
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $city = htmlspecialchars($_POST['city']);
    $country = htmlspecialchars($_POST['country']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City and Country Form</title>
</head>
<body>
    <h1>Введите ваш город и страну</h1>
    <form method="post" action="">
        <label for="city">Город:</label>
        <input type="text" id="city" name="city" value="<?php echo $city; ?>" required>
        <br><br>
        <label for="country">Страна:</label>
        <input type="text" id="country" name="country" value="<?php echo $country; ?>" required>
        <br><br>
        <button type="submit">Отправить</button>
    </form>

    <?php if ($city || $country): ?>
        <h2>Вы ввели:</h2>
        <p><strong>Город:</strong> <?php echo $city; ?></p>
        <p><strong>Страна:</strong> <?php echo $country; ?></p>
    <?php endif; ?>
</body>
</html>
