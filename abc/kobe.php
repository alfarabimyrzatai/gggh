<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Определение дня недели</title>
</head>
<body>
    <form method="POST">
        <label for="day">День:</label>
        <select name="day" id="day">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>

        <label for="month">Месяц:</label>
        <select name="month" id="month">
            <?php
            $months = [
                1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 4 => 'Апрель', 5 => 'Май', 6 => 'Июнь',
                7 => 'Июль', 8 => 'Август', 9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь'
            ];
            foreach ($months as $number => $month) {
                echo "<option value=\"$number\">$month</option>";
            }
            ?>
        </select>

        <label for="year">Год:</label>
        <select name="year" id="year">
            <?php
            for ($i = 1990; $i <= 2025; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>

        <button type="submit">Определить день недели</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        // Проверка на корректность данных
        if (checkdate($month, $day, $year)) {
            // Формирование даты в формате YYYY-MM-DD
            $date = "$year-$month-$day";
            // Определение дня недели
            $dayOfWeek = date('l', strtotime($date));
            $dayOfWeekRu = [
                'Monday' => 'Понедельник',
                'Tuesday' => 'Вторник',
                'Wednesday' => 'Среда',
                'Thursday' => 'Четверг',
                'Friday' => 'Пятница',
                'Saturday' => 'Суббота',
                'Sunday' => 'Воскресенье'
            ];
            echo "<p>Выбранная дата: $dayOfWeekRu[$dayOfWeek]</p>";
        } else {
            echo "<p>Некорректная дата. Пожалуйста, выберите правильную дату.</p>";
        }
    }
    ?>
</body>
</html>
