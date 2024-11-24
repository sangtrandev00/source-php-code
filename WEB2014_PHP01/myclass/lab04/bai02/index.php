<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <p>
            <label for="username">Name*</label> <br>
            <input type="text" name="username" id="">
        </p>
        <p>
            <input type="submit" name="submit" value="submit">
        </p>
    </form>

    <?php
if (isset($_POST['submit']) && $_POST['submit']) {
    // get username data
    $username = $_POST['username'];
    if (empty($username) || strlen($username) < 3) {
        echo "<p>Error: Name requires a minimum of 3 characters</p>";
    } else {
        echo "username: $username";
    }
}
?>

</body>

</html>