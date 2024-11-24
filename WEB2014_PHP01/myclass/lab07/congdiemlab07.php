<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=lab07_myclass", $username, $password);

$data = [
    ["Son ", 30, "Male"],
    ["Ronaldo ", 35, "Male"],

];

try {

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // our SQL statements

    // $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')");
    // $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('Mary', 'Moe', 'mary@example.com')");
    // $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('Julie', 'Dooley', 'julie@example.com')");

    // commit the transaction
    $sql = "INSERT INTO cauthu (tencauthu, tuoi, gioitinh)
     VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    // begin the transaction
    $conn->beginTransaction();
    foreach ($data as $row) {
        # code...
        $stmt->execute($row);
    }
    $conn->commit();
    echo "New records created successfully";
} catch (PDOException $e) {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}

$conn = null;