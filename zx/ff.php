<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender Selection</title>
</head>
<body>
    <form method="POST">
        <label>
            <input type="radio" name="gender" value="Male" required> Male
        </label>
        <br>
        <label>
            <input type="radio" name="gender" value="Female" required> Female
        </label>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['gender'])) {
            $gender = htmlspecialchars($_POST['gender']);
            echo "<p>You selected: <strong>$gender</strong></p>";
        } else {
            echo "<p>Please select a gender.</p>";
        }
    }
    ?>
</body>
</html>
