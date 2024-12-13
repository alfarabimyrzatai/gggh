<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City and Country Form</title>
</head>
<body>
    <?php
        // Инициализация переменных
        $city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : '';
        $country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';
    ?>

    <form method="POST" action="">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="<?php echo $city; ?>" required>
        <br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="<?php echo $country; ?>" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h2>Submitted Data:</h2>
        <p><strong>City:</strong> <?php echo $city; ?></p>
        <p><strong>Country:</strong> <?php echo $country; ?></p>
    <?php endif; ?>
</body>
</html>
