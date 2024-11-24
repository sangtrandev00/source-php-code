<?php
include "./connectdb.php";

$servername = "localhost";
$dbname = "lab06_myclass";
$username = "root";
$password = "";
function get_one_cate($id)
{

}

function get_all_cate()
{

}

function addproduct($tensp, $img, $gia, $iddm)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_product (tensp,img,gia,iddm) VALUES ('" . $tensp . "','" . $img . "','" . $gia . "','" . $iddm . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

// function deldm($id){
//     $conn=connectdb();
//     $sql = "DELETE FROM tb_sanpham WHERE id=".$id;
//     // use exec() because no results are returned
//     $conn->exec($sql);
// }
// function updatedm($id,$tendm){
//     $conn=connectdb();
//     $sql = "UPDATE tb_sanpham SET tendm='".$tendm."' WHERE id=".$id;
//     // Prepare statement
//     $stmt = $conn->prepare($sql);
//     // execute the query
//     $stmt->execute();
// }

function get_one_product($id)
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_product WHERE id=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function get_all_product()
{
    global $servername;
    global $dbname;
    global $username;
    global $password;

    // try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM tbl_product";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    //       echo $v;
    //     }
    //   } catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    //   }
    //   $conn = null;
    $finalresult = $stmt->fetchAll();
    return $finalresult;

}