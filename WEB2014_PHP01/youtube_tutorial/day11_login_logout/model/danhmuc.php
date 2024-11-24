<?php
// Hàm lấy tất cả danh mục
function getall_menu()
{
    // $kq = '';
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_danhmuc");
    $stmt->execute();
    // return $kq;

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

// Tra cứu pháp trên w3schools
function deletemenu($id)
{
    // Kết nối
    $conn = connectdb();

    // Viết sql
    $sql = "DELETE FROM tb_danhmuc WHERE id=" . $id;
    // use exec() because no results are returned
    // Thực thi xóa
    $conn->exec($sql);
}

function get_one_menu($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_danhmuc WHERE id=" . $id);
    $stmt->execute();
    // return $kq;

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function updatemenu($id, $tendanhmuc)
{

    $conn = connectdb();
    // $sql = "update tb_danhmuc set tendanhmuc = 'danh muc 100 updated' where id = 2";
    $sql = "update tb_danhmuc set tendanhmuc = '" . $tendanhmuc . "' where id = " . $id;
    // update tb_danhmuc set tendanhmuc = "danh muc 100 updated" where id = 2;

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

}

function addmenu($tendanhmuc)
{
    $conn = connectdb();
    $sql = "INSERT INTO tb_danhmuc (tendanhmuc)
        VALUES ('$tendanhmuc')";
    // use exec() because no results are returned
    $conn->exec($sql);
}