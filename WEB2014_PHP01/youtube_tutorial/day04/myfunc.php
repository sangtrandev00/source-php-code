<?php
// Thư viên cá nhân !!!
function calcTwoNumber($soa, $sob, $pheptinh) {
    // $result = "";
    switch ($pheptinh) {
        case '+':
            # code...
            return $soa + $sob;
            // break;
        case '-':
            return $soa - $sob;
        case '*':
            return $soa - $sob;
        case '%':
            return $soa % $sob;
        default:
            # code...
            break;
    }
}

function calcFactorial($n) {
    $result = 1;
    for($i = 0; $i < $n; $i++) {
        $result*=$i;
    }
    return $result;
}

function isPrimeNumber($n) {
    // int i, so, dem = 0;
	// printf("Xin moi nhap vao so nguyen tu ban phim:");
	// scanf("%d",&so);
	// for ( i=2;i<so;i++) {
	// 	if ( so % i == 0) dem=1;
	// 	break;
	// }
	// if ( dem == 1) {
	// printf("Day khong  la so nguyen to"); }
	// else {
	// 	printf(" Day la so nguyen to");
	// }
    // Cách 1: --> Tìm hiểu thêm cách khác ( truy cứu lại file c hoặc java );

    $count = 0;
    for($i=0;$i<$n;$i++) {
        if($n % $i == 0) {
            $count = 1;
            break;
        } 
    }
    if($count == 1) {
        return true;
    } else {
        return false;
    }

}

// Viết hàm tính cung hoàn đạo

    function calcZodiac($date) {
        $mydate = date_format(date_create($date),"Y/m/d");
        echo "Ngay sinh cua ban: ".$mydate."<br>";
        $month = (int)date("m", strtotime($mydate));
        $day = (int)date("d", strtotime($mydate));
        // echo "month: $month, day: $day";
        $result = "";
        if(($day >= 21 && $month == 3) || ($day <= 19 && $month == 4))
    {
        // cout << " thuoc cung Bach Duong" << endl;
        $result = "Bach Duong";
        
    }
    else if(($day >= 20 && $month == 4) || ($day <= 20 && $month == 5))
    {
        // cout << " thuoc cung Kim Nguu (20/04 - 20/05)" << endl;
        $result = "Kim Nguu";
    }
        
    else if(($day >= 21 &&  $month == 5) || ($day <= 21 && $month == 6))
    {
        $result = "Song Tu";
        // cout << " thuoc cung Song Tu (21/05 - 21/06)" << endl;
    }
    
    else if(($day >= 22 &&  $month == 6) || ($day <= 22 &&  $month == 7))
    {
        $result = "Cu Giai";
        // cout << " thuoc cung Cu Giai" << endl;
    }
    else if(($day >= 23 &&  $month == 7) || ($day <= 22 && $month == 8))
    {
        $result = "Su Tu";
        // cout << " thuoc cung Su Tu" << endl;
    }
    else if(($day >= 23 && $month == 8) || ($day <= 22 &&  $month == 9))
    {
        $result = "Xu Nu";
        // cout << " thuoc cung Xu Nu" << endl;
    }
    else if(($day >= 23 &&  $month == 9) || ($day <= 23 &&  $month == 10))
    {
        $result = "Thien Binh";
        // cout << " thuoc cung Thien Binh" << endl;
    }
    
    else if(($day >= 24 &&  $month == 10) || ($day <= 21 &&  $month == 11))
    {
        $result = "Ho Cap";
        // cout << " thuoc cung Ho Cap" << endl;
    }
                                                                 
    else if(($day >= 22 &&  $month == 11) || ($day <= 21 && $month == 12))
    {
        $result = "Nhan Ma";
        // cout << " cung Nhan Ma" << endl;
    }
                                    
    else if(($day >= 22 &&  $month == 12) || ($day <= 19 && $month == 1))
    {
        $result = "Ma Ket";
        // cout << " cung Ma Ket" << endl;
    }
                                       
    else if(($day >= 20 && $month == 1) || ($day <= 18 &&  $month == 2))
    {
        $result = "Bao Binh";
        // cout << " cung Bao Binh" << endl;
    }
    
    else {
        $result = "Song Ngu";
    }
    // { cout << " thuoc cung Song Ngu" << endl;
        return $result;
    }


?>