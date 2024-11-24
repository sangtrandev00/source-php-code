<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb_lab04";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE tbl_user (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name varchar(50) null,
  address VARCHAR(100) NULL,
  email VARCHAR(30) NULL,
  user VARCHAR(50) not null,
  pass varchar(50) not null,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table user created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;