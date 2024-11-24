<?php

// Hàm lấy tất cả danh mục
function checkuser($username, $password)
{
    // $kq = '';
    $conn = connectdb();
    // Lỗi cú pháp ở đây !!!
    $sql = "SELECT * FROM tbl_user WHERE user = '$username' AND pass = '$password'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // return $kq;

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    // Chưa check user
    if (count($kq) > 0) {
        echo "kq: " . var_dump($kq);
        return $kq[0]['role'];
    } else {
        return -1;
    }
    // return $kq;
}

function insertuser($name, $username, $email, $password)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_user (name, user, email,pass)
    VALUES ('$name', '$username', '$email','$password')";
    $conn->exec($sql);
}

function getuserinfo($username, $password)
{
    // $kq = '';
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user = '$username' AND pass = '$password'");
    $stmt->execute();
    // return $kq;
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}