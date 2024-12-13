<?php
// Инициализируем массив значений чекбоксов
$checkboxes = [
    'checkbox1' => false,
    'checkbox2' => false,
    'checkbox3' => false
];

// Если форма отправлена, обновляем состояния чекбоксов
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($checkboxes as $key => $value) {
        $checkboxes[$key] = isset($_POST[$key]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox State</title>
</head>
<body>
    <form method="post">
        <label>
            <input type="checkbox" name="checkbox1" <?php echo $checkboxes['checkbox1'] ? 'checked' : ''; ?>> Checkbox 1
        </label><br>
        <label>
            <input type="checkbox" name="checkbox2" <?php echo $checkboxes['checkbox2'] ? 'checked' : ''; ?>> Checkbox 2
        </label><br>
        <label>
            <input type="checkbox" name="checkbox3" <?php echo $checkboxes['checkbox3'] ? 'checked' : ''; ?>> Checkbox 3
        </label><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
