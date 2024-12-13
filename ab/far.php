<?php
$arr = ['a', 'b', 'c', 'd', 'e'];

foreach ($arr as $key => $value) {
    // Создаем ссылку для каждого элемента массива
    echo "<a href='?item=$key'>$value</a><br>";
}

if (isset($_GET['item'])) {
    // Проверяем, если параметр 'item' передан в GET запросе
    $itemIndex = $_GET['item'];
    
    // Проверяем, существует ли такой индекс в массиве
    if (isset($arr[$itemIndex])) {
        echo "Вы выбрали элемент: " . $arr[$itemIndex];
    } else {
        echo "Элемент не найден.";
    }
}
?>
