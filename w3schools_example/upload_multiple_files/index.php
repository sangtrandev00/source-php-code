<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Muliple Files</title>
</head>

<body>
    <h2>Upload multiple files</h2>
    <form action="./index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload[]" id="fileToUploads" accept="" multiple>
        <input type="submit" name="submit" value="Upload Multiple Images" />
    </form>


</body>

</html>

<?php

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $target_dir = "uploads/";

    var_dump($_FILES['fileToUpload']['name']);
    var_dump($_FILES['fileToUpload']);
    $i = 0;
    $image_list = implode(',', $_FILES['fileToUpload']['name']);
    foreach ($_FILES['fileToUpload']['name'] as $file_name) {
        # code...
        $target_file[] = $target_dir . basename($file_name);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file[$i]);
        $i++;
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_pdo";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tbl_images (images)
  VALUES ('$image_list')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

?>