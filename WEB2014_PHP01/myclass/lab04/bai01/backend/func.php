<?php
function connectdb()
{
    $servername = "localhost";
    $username = "asm_myclass";
    $password = "trannhatsang10";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=mydb_lab04", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch (PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
    }

    return $conn;
}

// connectdb();

function insertCategory($catename)
{
    try {
        $conn = connectdb();
        $sql = "INSERT INTO tbl_category (catename)
        VALUES ('$catename')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New cate created successfully";
        return true;
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}

function getallcates()
{

    try {
        $conn = connectdb();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT catename FROM tbl_category");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $finalresult = $stmt->fetchAll();
        return $finalresult;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function insert_product($proname, $description, $price, $cate, $dest)
{
    try {
        $conn = connectdb();
        $sql = "INSERT INTO tbl_product (proname,description,price,catename,image)
        VALUES ('$proname','$description','$price','$cate','$dest')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New product created successfully";
        return true;
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}