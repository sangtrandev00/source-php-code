<?php
include "./myfunc.php";

// print_r(get_all_cates());
$all_cates = get_all_cates();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container {
        display: flex;
    }

    table {
        border-collapse: collapse;
    }

    tr {
        border: 2px solid #ccc;
    }

    th,
    td {
        border: 2px solid #ccc;
        padding: 4px;
    }

    td {}
    </style>
</head>

<body>



    <div class="container">
        <?php
include "./addform.php";
?>
        <table>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
            <?php
foreach ($all_cates as $cateitem) {
    # code...
    echo '
                                            <tr>
                                                <td>' . $cateitem['id'] . '</td>
                                                <td>' . $cateitem['catename'] . '</td>
                                                <td><a href="./cateproduct.php?act=updatecate&id=' . $cateitem['id'] . '">Edit</a> | <a href="./cateproduct.php?act=removecate&id=' . $cateitem['id'] . '">Remove</a></td>
                                            </tr>
                                        ';
}
?>
        </table>
        <?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'updatecate':
            # code...
            if ($_GET['id']) {
                // $catename = $_GET['cateproduct'];
                $id = $_GET['id'];
                $cateitem = get_one_cate($_GET['id']);
                // var_dump($cateitem[0]);
                // updatecate($id, $catename);
                // echo $cateitem[0]['catename'];
                include "./updateform.php";
            }
            break;
        case 'removecate':
            # code...

            if (isset($_GET['id'])) {
                deletecate($_GET['id']);
                // header("./backend/cateproduct.php");
                // header("Refresh:0");
            }

            break;
        case 'updatecateform':
            # code...
            if (isset($_POST['cateupdatebtn']) && $_POST['cateupdatebtn']) {
                $cateid = $_POST['cateid'];
                $catename = $_POST['catename'];
                echo $cateid, $catename;
                updatecate($cateid, $catename);
                // include "./updateform.php";
                header("Refresh:0");
            }

            break;
        case 'addform':
            # code...
            if (isset($_POST['addformbtn']) && $_POST['addformbtn']) {

                $catename = $_POST['categoryname'];
                insertcate($catename);
                header("Refresh:0");
            }

            break;

        default:
            # code...
            break;
    }
}

?>

    </div>




</body>

</html>