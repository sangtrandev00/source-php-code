<?php

function taodonhang($madonhang, $pttt, $iduser, $hoten, $dienthoai, $email, $diachi, $tongdonhang)
{
    try {
        $conn = connectdb();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tb_order (madonhang, pttt, iduser, hoten, dienthoai, email, diachi, tongdonhang)
            VALUES ('$madonhang', '$pttt', '$iduser', '$hoten', '$dienthoai', '$email', '$diachi',$tongdonhang)";
        // use exec() because no results are returned
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        echo "New record created successfully. Last inserted ID is: " . $last_id;
        return $last_id;
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function addtoorderdetail($idsp, $iddh, $soluong, $dongia, $tensp, $img)
{
    try {
        $conn = connectdb();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tb_cart (idsanpham, iddonhang, soluong, dongia, tensp, img)
        VALUES ('$idsp', '$iddh', '$soluong', '$dongia', '$tensp', '$img')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function getshoworderdetail($iddh)
{
    try {
        $conn = connectdb();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tb_cart where iddonhang = " . $iddh);
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $ketqua = $stmt->fetchAll();
        return $ketqua;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}

function getorderinfo($iddh)
{
    try {
        $conn = connectdb();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tb_order where id = " . $iddh);
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $ketqua = $stmt->fetchAll();
        return $ketqua[0];
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}