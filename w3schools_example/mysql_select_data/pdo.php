<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

// class TableRows extends RecursiveIteratorIterator
// {
//     public function __construct($it)
//     {
//         parent::__construct($it, self::LEAVES_ONLY);
//     }

//     public function current()
//     {
//         return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
//     }

//     public function beginChildren()
//     {
//         echo "<tr>";
//     }

//     public function endChildren()
//     {
//         echo "</tr>" . "\n";
//     }
// }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
    //     echo $v;
    // }
    $finalresult = $stmt->fetchAll();
    var_dump($finalresult);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";