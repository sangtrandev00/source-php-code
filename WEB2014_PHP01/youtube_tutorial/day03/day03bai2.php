<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
     if ( (isset($_POST['showinfo']))&&($_POST['showinfo']) ) {
        
        $randnum = $_POST['randnum'];
        $numberList = '';

        // function getNums() {
        //     global $randnum;
        //     for ($i=0 ; $i <$randnum ; $i++) { 
        //         # code...
        //        yield $i;
        //     }
        // }
        
        $sum = 0;
        
        $sumEven = 0;
        
        $sumOdd = 0;
        
        for ($i=0 ; $i <$randnum ; $i++) { 
            # code...
            // yield $i;
            $numberList .= $i .', ';
            $sum += $i;
            if($i % 2 === 0) {
                $sumEven += $i;
            } else {
                $sumOdd += $i;
            }
        }

        // $numberList = join(',', getNums());

        $numberList = substr($numberList, 0,strlen($numberList) - 2);
        // $result = "";
        $result = 
            '<div class="show-result">
                <p class="numbers">Numbers: '.$numberList.'</p>
                <p class="sum">Sum: '.$sum.'</p>
                <p class="sum-evens">Sum evens: '.$sumEven.'</p>
                <p class="sum-odds">Sum odds: '.$sumOdd.'</p>
            </div>';
        }
        echo $result;

?>

</body>

</html>