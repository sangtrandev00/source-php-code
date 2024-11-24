<?php
include "./func.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add category</title>
    <style>

    </style>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h3>CATEGORY</h3>
        <div class="form-group">
            <label for="" class="form-label">Category Name</label>
            <input type="text" name="catename" class="form-control">
            <br>
            <input type="submit" name="addcatebtn" class="form-btn" value="Submit">
        </div>
    </form>

    <?php

if (isset($_POST['addcatebtn']) && $_POST['addcatebtn']) {
    insertCategory($_POST['catename']);
}

?>

</body>

</html>