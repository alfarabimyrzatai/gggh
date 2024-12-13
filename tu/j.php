<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сумма трёх чисел</title>
</head>
<body>
    <h1>Введите три числа</h1>
    <form method="post" action="">
        <label for="number1">Число 1:</label>
        <input type="number" id="number1" name="number1" required><br><br>

        <label for="number2">Число 2:</label>
        <input type="number" id="number2" name="number2" required><br><br>

        <label for="number3">Число 3:</label>
        <input type="number" id="number3" name="number3" required><br><br>

        <button type="submit">Вычислить сумму</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Получение значений из формы
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];

        // Вычисление суммы
        $sum = $number1 + $number2 + $number3;

        // Вывод результата
        echo "<h2>Сумма: $sum</h2>";
    }
    ?>
</body>
</html>
