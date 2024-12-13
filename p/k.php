<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"])) {
    $name = htmlspecialchars($_POST["name"]);
    echo "<h1>Привет, $name!</h1>";
} else {
?>
    <form method="post" action="">
        <label for="name">Введите ваше имя:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Отправить</button>
    </form>
<?php
}
?>
