<?php
// Определяем текущий год
$currentYear = date("Y");

// Проверяем, отправлена ли форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем год из формы
    $year = isset($_POST['year']) ? (int)$_POST['year'] : $currentYear;

    // Проверяем, является ли год високосным
    if (($year % 4 === 0 && $year % 100 !== 0) || $year % 400 === 0) {
        $result = "Год $year является високосным.";
    } else {
        $result = "Год $year не является високосным.";
    }
} else {
    // Если форма не отправлена, используем текущий год
    $year = $currentYear;
    $result = '';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка високосного года</title>
</head>
<body>
    <h1>Проверка високосного года</h1>
    <form method="post" action="">
        <label for="year">Введите год:</label>
        <input type="number" id="year" name="year" value="<?php echo htmlspecialchars($year); ?>" required>
        <button type="submit">Проверить</button>
    </form>

    <?php if (!empty($result)): ?>
        <p><?php echo htmlspecialchars($result); ?></p>
    <?php endif; ?>
</body>
</html>
