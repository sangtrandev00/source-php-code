<?php
function themdm($tendm)
{
    $conn = connectdb();
    $sql = "INSERT INTO tb_danhmuc (tendm) VALUES ('" . $tendm . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function deldm($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM tb_danhmuc WHERE id=" . $id;
    // use exec() because no results are returned
    $conn->exec($sql);
}
function updatedm($id, $tendm)
{
    $conn = connectdb();
    $sql = "UPDATE tb_danhmuc SET tendm='" . $tendm . "' WHERE id=" . $id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}
function getonedm($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_danhmuc WHERE id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function getall_dm()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_danhmuc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}