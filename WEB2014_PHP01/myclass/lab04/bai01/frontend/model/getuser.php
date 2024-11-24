<?php

function getuser()
{
    try {
        $conn = connectdb();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT user,pass FROM mydb_lab04");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $finalresult = $stmt->fetchAll();
        return $finalresult;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function is_logined($username, $password)
{
    try {
        $conn = connectdb();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT user,pass FROM tbl_user WHERE user='$username' and pass='$password'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $finalresult = $stmt->fetchAll();
        // var_dump($finalresult);
        if (count($finalresult) > 0) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}