<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <h2 class="title">Nhập thông tin đăng ký</h2>
    <form action="bai2form.php" method="post">
        <input type="text" name="mssv" id="idStudent" placeholder="MSSV..."> <br>
        <input type="text" name="ten" id="nameStudent" placeholder="Ten..."> <br>
        <input type="text" name="email" id="emailStudent" placeholder="Email..."> <br>
        <input type="text" name="dienthoai" id="phoneNumber" placeholder="Dien thoai..."> <br>
        <input type="submit" name="dangky" value="Show Result">
        <!-- onclick="return validateForm()" -->
    </form>
    <?php

// Xét 2 trường hợp ( nếu nó có tồn tại và có được click!!!)
// Có cần vế thứ 2 không nhỉ ???
if (isset($_POST['dangky']) && $_POST['dangky']) {
    $mssv = $_POST['mssv'];
    $name = $_POST['ten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];

    if($mssv != '' && $name != '' && $email != '' && $dienthoai != '' ) {
            $kq = '
                <h2 class="title">Kết quả tìm kiếm</h2>
                <p>
                    Tên: <span class="">' . $name . '</span>
                </p>
                <p>
                    MSSV: <span>' . $mssv . '</span>
                </p>
                <p>
                    Email: <span>' . $email . '</span>
                </p>
                <p>
                    Điện thoại: <span>' . $dienthoai . '</span>
                </p>
                    ';
            echo $kq;
    } else {
        echo "Please enter your field in the input forms";
    }

    
}
    // Dùng isset trong trường hợp này được không nhỉ ???
    // Nếu nút đó có tồn tại chưa ? và có được click hay chưa ?
    // echo "$mssv, $name, $email, $dienthoai";
?>
    <script>
    function validateForm() {
        // event.preventDefault();
        const idStudent = document.getElementById("idStudent");
        const nameStudent = document.getElementById("nameStudent");
        const emailStudent = document.getElementById("emailStudent");
        const phoneNumber = document.getElementById("phoneNumber");
        if (idStudent.value == "") {
            alert("Please enter your id: ");
            idStudent.focus(); // Nhảy lại vị trí đó
            return false;
        } else if (nameStudent.value == "") {
            alert("Please enter your name: ");
            nameStudent.focus(); // Nhảy lại vị trí đó
            return false;
        } else if (emailStudent.value == "") {
            alert("Please enter your email: ");
            emailStudent.focus(); // Nhảy lại vị trí đó.
        } else if (phoneNumber.value == "") {
            alert("Please enter your phone number: ");
            phoneNumber.focus(); // Nhảy lại vị trí đó.
        }
        // if (emailStudent.value == "") {
        //     alert("Please enter your email: ");
        // }
        // if (phoneNumber.value == "") {
        //     alert("Please enter your phone number: ");
        // }
        return true;

    }
    </script>


</body>

</html>