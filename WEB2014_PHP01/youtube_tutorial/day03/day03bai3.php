<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->



</head>

<body>

    <h2>Nhập một số bất kỳ ( từ 1 -> 5 )</h2>
    <!-- Form -->
    <form action="day03bai3.php" method="POST">
        <input type="text" name="randnum" id="numInput" placeholder="Nhập một số bất kỳ:  ( từ 1 -> 5 )"> <br>
        <input type="submit" name="showinfo" onclick="return validateForm()" id="" value="Submit">
        <input type="reset" name="resetinfo" id="" value="Reset">
    </form>
    <div class="show-result">
        <p>Bạn đã trúng thưởng X.000.000.000 đồng</p>
        <p>Chúc bạn may mắn lần sau</p>
    </div>

    <?php
        $systemNumber = rand(1,5);
        
        if ( (isset($_POST['showinfo']))&&($_POST['showinfo']) ) {
                
            $randnum = $_POST['randnum'];
            $result = "";
            
            if($systemNumber == $randnum) {
                $result = ' <p>Bạn đã trúng thưởng 1.000.000.000 đồng</p>';
                
            } else {
                $result ='<p>Chúc bạn may mắn lần sau</p>';
                
            }
            echo "The random number system is: $systemNumber";
            echo $result;
        } else {
            echo "Error";
        }


    ?>

    <script>
    // Tại sao validate ở đây không được nhỉ ?
    function validateForm() {
        const randNum = document.getElementById("numInput");
        if (randNum == '') {
            alert("Bạn chưa điền thông tin");
            randNum.focus();
            return false;
        } else if (Number(randNum) > 5 || Number(randNum) < 1) {
            alert("Giá trị bạn nhập không phù hợp từ ( 1 -> 5 )");
            randNum.focus();
            return false;
        }
        return false;
    }
    </script>
</body>

</html>