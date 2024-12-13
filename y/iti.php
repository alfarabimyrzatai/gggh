<?php
// Запускаем сессию
session_start();

// Проверяем, если форма была отправлена
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Сохраняем данные в сессии как массив
    $_SESSION['user_data'] = [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'extra' => $_POST['extra']  // Дополнительное поле
    ];
    
    // Перенаправляем на вторую страницу для отображения данных
    header('Location: display.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма ввода данных</title>
</head>
<body>
    <h2>Введите ваши данные</h2>
    <form method="POST">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="age">Возраст:</label>
        <input type="number" name="age" id="age" required><br><br>
        
        <label for="salary">Зарплата:</label>
        <input type="number" name="salary" id="salary" required><br><br>
        
        <label for="extra">Дополнительная информация:</label>
        <input type="text" name="extra" id="extra"><br><br>
        
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
