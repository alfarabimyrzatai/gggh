<?php
session_start(); // Инициализируем сессию

// Если время захода еще не сохранено, сохраняем текущее время
if (!isset($_SESSION['time_of_entry'])) {
    $_SESSION['time_of_entry'] = time();
}

// Получаем текущее время
$current_time = time();

// Вычисляем, сколько секунд прошло с момента захода
$time_diff = $current_time - $_SESSION['time_of_entry'];

echo "Вы зашли на сайт " . $time_diff . " секунд назад.";
?>
