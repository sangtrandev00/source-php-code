<?php
    // 1. SV tao mot mang voi cac so tu nhien ngau nhien

    $array = array(1,2,3,4,5,6,7,8,9,10,11);
    // echo var_dump($array);
    // 2. SV viết hàm tính tổng giá trị của mảng

    function sumArray($array) {
        $sum = 0;
        foreach ($array as $key => $value) {
            $sum+=$value;
        }
        return $sum;
    }
    $sumArray = sumArray($array);
    // echo "<br>Tong gia tri cua mang la: $sumArray";

    // 3. SV viết hàm tính tổng các phần tử của mảng là số lẻ

    function sumOddArray($array) {
        $sumOdds = 0;
        foreach ($array as $key => $value) {
            if($value % 2 !=0) {
                $sumOdds +=$value;
            }
        }
        return $sumOdds;
    }

    $sumOdds = sumOddArray($array);
    // echo "<br>Tổng các phần tử của màng là số lẻ là: $sumOdds";

    // 4. SV viết hàm tính tổng phần tử của mảng là số lẻ
    function sumEvenArray($array) {
        $sumEven = 0;
        foreach ($array as $key => $value) {
            if($value % 2 == 0) {
                $sumEven +=$value;
            }
        }
        return $sumEven;
    }

    $sumEven = sumEvenArray($array);
    // echo "<br>Tổng các phần tử của màng là số chẵn là: $sumEven";
    
    // 5. Xóa phần tử n bất kỳ, hiển thị mảng còn lại.

    // function deleteItem($position, $array) {
    //     // $newArray = array();
    //     array_splice($array, $position, 1);
    //     // echo "<br>new Array: ".var_dump($newArray);
    // }
    array_splice($array, 3, 1);
    // Xóa phần tử thứ array tại index = 3 (value = 3);
    // deleteItem(3,$array);
    // echo "<br>Array: ".var_dump($array);
    
?>