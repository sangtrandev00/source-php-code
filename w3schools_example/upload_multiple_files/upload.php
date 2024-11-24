<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <table width="100%">
            <tr>
                <td>Select Photo (one or multiple):</td>
                <td><input type="file" name="files[]" multiple /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">Note: Supported image format: .jpeg, .jpg, .png, .gif</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Create Gallery"
                        id="selectedButton" /></td>
            </tr>
        </table>
    </form>
    <?php
           if(isset($_POST['submit'])&& $_POST['submit']) {
            $error = array();
            $extension = array("jpeg", "jpg", "png", "gif");
            foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {
                $file_name = $_FILES["files"]["name"][$key];
                $file_tmp = $_FILES["files"]["tmp_name"][$key];
                $ext = pathinfo($file_name, PATHINFO_EXTENSION);

                if (in_array($ext, $extension)) {
                    if (!file_exists("photo_gallery/" . $txtGalleryName . "/" . $file_name)) {
                        move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], "photo_gallery/" . $txtGalleryName . "/" . $file_name);
                    } else {
                        $filename = basename($file_name, $ext);
                        $newFileName = $filename . time() . "." . $ext;
                        move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], "photo_gallery/" . $txtGalleryName . "/" . $newFileName);
                    }
                } else {
                    array_push($error, "$file_name, ");
                }
            }
           }
?>
</body>

</html>