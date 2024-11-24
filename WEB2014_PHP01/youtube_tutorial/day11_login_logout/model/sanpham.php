<?php

function insert_sanpham($iddanhmuc, $tensp, $gia, $hinhanh)
{
    $conn = connectdb();
    $sql = "INSERT INTO tb_sanpham (iddanhmuc, tensp, hinhanh, gia)
        VALUES ('$iddanhmuc', '$tensp', '$hinhanh', '$gia')";
    $conn->exec($sql);
}

// Hàm lấy tất cả danh mục
function getall_sanpham()
{
    // $kq = '';
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_sanpham");
    $stmt->execute();
    // return $kq;

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function delete_sanpham($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM tb_sanpham WHERE id=" . $id;
    $conn->exec($sql);
}

function get_one_sp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_sanpham WHERE id=" . $id);
    $stmt->execute();
    // return $kq;

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function update_sanpham($id, $tensp, $gia, $hinhanh, $iddanhmuc)
{

    $conn = connectdb();
    // $sql = "update tb_danhmuc set tendanhmuc = 'danh muc 100 updated' where id = 2";

    // Tại sao phải có if, else ngay tại đây ?
    if ($hinhanh == "") {
        $sql = "UPDATE tb_sanpham SET tensp = '" . $tensp . "',gia = '" . $gia . "',iddanhmuc = '" . $iddanhmuc . "'  where id = " . $id;
    } else {
        $sql = "UPDATE tb_sanpham SET tensp = '" . $tensp . "',gia = '" . $gia . "',iddanhmuc = '" . $iddanhmuc . "',hinhanh = '" . $hinhanh . "'   where id = " . $id;
    }
    // update tb_danhmuc set tendanhmuc = "danh muc 100 updated" where id = 2;

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

}

// // Tra cứu pháp trên w3schools
// function deletemenu($id) {
//     // Kết nối
//     $conn = connectdb();

//     // Viết sql
//     $sql = "DELETE FROM tb_danhmuc WHERE id=".$id;
//     // use exec() because no results are returned
//     // Thực thi xóa
//     $conn->exec($sql);
// }

// function get_one_menu($id) {
//     $conn = connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tb_danhmuc WHERE id=".$id);
//     $stmt->execute();
//     // return $kq;

//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }

// function updatemenu($id,$tendanhmuc) {

//     $conn = connectdb();
//     // $sql = "update tb_danhmuc set tendanhmuc = 'danh muc 100 updated' where id = 2";
//     $sql = "update tb_danhmuc set tendanhmuc = '".$tendanhmuc."' where id = ".$id;
//     // update tb_danhmuc set tendanhmuc = "danh muc 100 updated" where id = 2;

//     // Prepare statement
//     $stmt = $conn->prepare($sql);

//     // execute the query
//     $stmt->execute() ;

// }

// function addmenu($tendanhmuc) {
//     $conn = connectdb();
//     $sql = "INSERT INTO tb_danhmuc (tendanhmuc)
//     VALUES ('$tendanhmuc')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
// }