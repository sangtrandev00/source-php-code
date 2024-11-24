<?php

function taodonhang($madonhang, $tongdonhang, $pttt, $hoten, $diachi, $email, $sodienthoai)
{
    try {
        $conn = connectdb();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Sai ở đây !!!
        // $sql = "INSERT INTO `tb_order` (`madonhang`,`pttt`,`hoten`,`dienthoai`,`email`,`diachi`,`tongdonhang`)
        // VALUES ('" . $madonhang . "','" . $pttt . "','" . $hoten . " ','" . $sodienthoai . " ','" . $email . " ','" . $diachi . " ,' " . $tongdonhang . "  ')
        // ";

        $sql = "INSERT INTO tb_order (madonhang, pttt, hoten, dienthoai, email, diachi, tongdonhang)
        VALUES ('$madonhang', '$pttt', '$hoten', '$sodienthoai','$email','$diachi','$tongdonhang')";

        // use exec() because no results are returned
        $conn->exec($sql);
        $last_id = $conn->lastInsertId(); // phuong thuc nay de lam gi ?
        return $last_id;
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function addtocart($iddh, $idsp, $tensp, $img, $gia, $sl)
{
    $conn = connectdb();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO tb_cart (idsanpham, iddonhang, soluong, dongia,tensp,img)
    VALUES ('$idsp', '$iddh', '$sl', '$gia','$tensp','$img')";

    // use exec() because no results are returned
    $conn->exec($sql);
}

function getshowcart($iddh)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_cart WHERE iddonhang = " . $iddh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function getorderinfo($iddh)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_order WHERE id = " . $iddh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}