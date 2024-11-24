<?php
include '../model/connectdb.php';
include '../model/myfunc.php';
if (isset($_GET['id'])) {
    deleteData($_GET['id']);
    header("location: ../practice01.php");
}