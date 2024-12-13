<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $year = isset($_POST['year']) ? (int)$_POST['year'] : date('Y');
    $month = isset($_POST['month']) ? (int)$_POST['month'] : date('m');
    $day = isset($_POST['day']) ? (int)$_POST['day'] : date('d');

    $inputDate = strtotime("$year-$month-$day");
    $newYearDate = strtotime("$year-12-31");

    if ($inputDate > $newYearDate) {
        $daysUntilNewYear = "Дата должна быть раньше или в пределах текущего года.";
    } else {
        $daysUntilNewYear = (int)(($newYearDate - $inputDate) / (60 * 60 * 24));
    }
} else {
    $year = date('Y');
    $month = date('m');
    $day = date('d');
    $daysUntilNewYear = null;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сколько дней до Нового Года</title>
</head>
<body>
    <h1>Сколько дней осталось до Нового Года?</h1>
    <form method="POST">
        <label for="year">Год:</label>
        <input type="number" id="year" name="year" value="<?php echo $year; ?>" required><br>

        <label for="month">Месяц:</label>
        <input type="number" id="month" name="month" value="<?php echo $month; ?>" min="1" max="12" required><br>

        <label for="day">День:</label>
        <input type="number" id="day" name="day" value="<?php echo $day; ?>" min="1" max="31" required><br>

        <button type="submit">Рассчитать</button>
    </form>

    <?php if ($daysUntilNewYear !== null): ?>
        <h2>
            <?php
            if (is_numeric($daysUntilNewYear)) {
                echo "До Нового Года осталось дней: " . $daysUntilNewYear;
            } else {
                echo $daysUntilNewYear;
            }
            ?>
        </h2>
    <?php endif; ?>
</body>
</html>
