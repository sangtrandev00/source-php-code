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

function getuserinfobyid($iduser)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE id = '$iduser'");
    $stmt->execute();
    // return $kq;
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function get_all_user($role)
{
    try {
        $conn = connectdb();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE role = '$role'");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
}

function delete_user($iduser)
{
    try {
        $conn = connectdb();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to delete a record
        $sql = "DELETE FROM tbl_user WHERE id=" . $iduser;

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Record deleted successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

function updateuser($iduser, $urlavatar, $name, $email, $phonenumber, $address)
{
    try {
        $conn = connectdb();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE tbl_user SET avatar='$urlavatar', name='$name', email='$email', phonenumber='$phonenumber',address='$address'  WHERE id=" . $iduser;

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
function insertnewuser($urlavatar, $name, $email, $phonenumber, $address, $username, $password)
{
    try {

        $conn = connectdb();
        $sql = "INSERT INTO tbl_user (name, address,email, phonenumber, user,pass,role, avatar)
        VALUES ('$name', '$address', '$email','$phonenumber','$username','$password',0,'$urlavatar')";
        $conn->exec($sql);
        // echo "add data successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
function insertnewadmin($urlavatar, $name, $email, $phonenumber, $address, $username, $password)
{
    try {

        $conn = connectdb();
        $sql = "INSERT INTO tbl_user (name, address,email, phonenumber, user,pass,role, avatar)
        VALUES ('$name', '$address', '$email','$phonenumber','$username','$password',1,'$urlavatar')";
        $conn->exec($sql);
        // echo "add data successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

function updatepass($iduser, $newpass)
{
    try {
        $conn = connectdb();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE tbl_user SET pass='$newpass'  WHERE id=" . $iduser;

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}