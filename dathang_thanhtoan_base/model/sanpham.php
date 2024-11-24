<?php

function themsp($tensp, $img, $gia, $iddm)
{
    $conn = connectdb();
    $sql = "INSERT INTO tb_sanpham (tensp,img,gia,iddm) VALUES ('" . $tensp . "','" . $img . "','" . $gia . "','" . $iddm . "')";
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

function getonesp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_sanpham WHERE id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function getall_sp()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_sanpham");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}