<?php

// $student_list = array(["1", "Tran Nhat Sang", "PS20227", 4.5], ["2", "Nguyen Van A", "PS20227", 6], ["3", "Tran Van B", "PS20227", 9.0]);

$student_list = array(
    ["id" => 1, "name" => "Tran Nhat Sang", "mssv" => "PS20227", "Diem" => 4.5],
    ["id" => 2, "name" => "Tran Van Lan", "mssv" => "PS20228", "Diem" => 7],
    ["id" => 3, "name" => "Tran Thi Yen Nhi", "mssv" => "PS20229", "Diem" => 8],
);

$new_student = ["id" => 100, "name" => "Tran Van C", "mssv" => "PS20230", "Diem" => 9];

// $newlist = array_merge(array_slice($student_list, 0, 2), [$new_student], array_slice($student_list, -1));

array_splice($student_list, 1, 0, [$new_student]);

var_dump($student_list);

var_dump($final_list);

function connectdb()
{
    $servername = "localhost";
    $username = "asm_myclass";
    $password = "trannhatsang10";

    try {

        $conn = new PDO("mysql:host=$servername;dbname=mytest_3_12", $username, $password);

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // echo "Connected successfully";

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $conn;

}

function insertData($id, $hoten, $mssv, $diem)
{
    try {
        $conn = connectdb();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tbl_student (id,name, mssv, diem)
        VALUES ('$id', '$hoten', '$mssv','$diem')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

foreach ($student_list as $student) {
    if ($student[3] >= 5) {
        // $final_list[] = $student;
        insertData($student[0], $student[1], $student[2], $student[3]);
    }
}

foreach ($final_list as $student) {
    # code...
    insertData($student[0], $student[1], $student[2], $student[3]);
}