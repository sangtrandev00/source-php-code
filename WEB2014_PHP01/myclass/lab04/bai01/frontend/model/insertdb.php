<?php
function insertData($username, $email, $password)
{

    try {
        $conn = connectdb();
        $sql = "INSERT INTO tbl_user (user, email, pass)
    VALUES ('$username', '$email', '$password')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New person created successfully";
        return true;
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}