<?php
// Массив доступных языков
$languages = array('ru' => 'Русский', 'en' => 'English', 'de' => 'Deutsch');

// Проверка, был ли выбран язык
if (isset($_POST['language'])) {
    $selected_language = $_POST['language'];
    echo "Выбранный язык: " . $languages[$selected_language];
}
?>

<form method="post" action="">
    <label for="language">Выберите язык:</label>
    <select name="language" id="language">
        <?php
        // Заполнение выпадающего списка языками
        foreach ($languages as $code => $language) {
            echo "<option value=\"$code\">$language</option>";
        }
        ?>
    </select>
    <input type="submit" value="Отправить">
</form>
