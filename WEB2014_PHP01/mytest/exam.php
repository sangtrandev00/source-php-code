<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Bootstrap -->
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css'
        integrity='sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q=='
        crossorigin='anonymous' /> -->
    <link rel="stylesheet" href="card.css" />
    <script src="dataTest.js" async></script>
    <title>Final Exam</title>
    <style>


    </style>
</head>

<body>
    <h3>DANH SÁCH VUA PHÁ LƯỚI WC 2022</h3>
    <div id="board">

        <?php
include "./model/connectdb.php";
include "./model/myfunc.php";

$goldenBootRace = [
    ["Cho Geu-sung", "South Korea", 2, "img/Cho Geu-sung.png"],
    ["Kylian Mbappe", "France", 5, "img/Kylian Mbappe.png"],
    ["Goncalo Ramos", "Portugal", 3, "img/Goncalo Ramos.png"],
    ["Lionel Messi", "Argentina", 5, "img/Lionel Messi.png"],
    ["Ritsu Doan", "Japan", 2, "img/Ritsu Doan.png"],
    ["Julián Álvarez", " Argentina ", 4, "img/Julian Alvarez.png"],
];

foreach ($goldenBootRace as $player) {
    # code...
    insertPlayer($player[0], $player[1], $player[2], $player[3]);
}

// createTop3Table();

// $player = [];
// for ($i = 0; $i < count($goldenBootRace); $i++) {
//     // $goldenBootRace[$i] = explode("_", $goldenBootRace[$i]);
//     insertPlayer($goldenBootRace[$i][0], $goldenBootRace[$i][1], $plagoldenBootRaceyer[$i][2], $goldenBootRace[$i][3]);
// }

$playerList = selectTop3();

// var_dump($playerList);
foreach ($playerList as $player) {
    # code...
    echo '
    <div class="card">
    <img id="imgCard" src="' . $player['img'] . '" alt="' . $player['name'] . '" />
    <h1>' . $player['name'] . '</h1>
    <p class="title">' . $player['country'] . '</p>
    <p>' . $player['goals'] . ' Goals</p>
    <div style="margin: 24px 0">
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
    </div>
    <p><button>Vote</button></p>
</div>
  ';
}
?>

    </div>
</body>

</html>