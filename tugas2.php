<?php
    $Month = ["January", "Fabruary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    $Day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    $Age = 20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>1st week</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *{ margin:0; padding:0; color:#2d2d2d; background-color: #ffffff; font-family:'Raleway';}
        body {box-sizing:border-box;width:;display:flex; align-items:center; justify-content:center;}
        .wrapper{ box-shadow:0 0 20px -5px #cfcfcf;margin:100px 0px;border-radius:50px;border:1px solid #cfcfcf; width:45vw; padding:60px 60px 20px 60px; display:flex; flex-wrap:wrap;}
        .tugas2{ flex:auto; width:40%%;float:left;}
        .point{ padding-left :15px ;border-bottom:1px solid #cfcfcf;margin:30px 20px;}
        .point p{margin:10px 0px; margin-left:20px;}
        h1{font-size:28px;}
        h2{font-size:20px;}
        #target{border-bottom:none;}
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="tugas2">
            <h1>Tugas 2</h1>
            <div class="point" id="hari">
                <h2> Nama Hari:</h2>
                <p><?php echo " $Day[0],", " $Day[1],", " $Day[2],", " $Day[3],", " $Day[4],", " $Day[5],", " $Day[6]."; ?><p>
            </div>
            <div class="point" id="bulan">
                <h2> Nama Bulan:</h2>
                 <p><?php echo " $Month[0],", " $Month[1],", " $Month[2],", " $Month[3],", " $Month[4],", " $Month[5],", " $Month[6],", " $Month[7],", " $Month[8],", " $Month[9],", " $Month[10],"," $Month[11]." ; ?><p>
            </div>
            <div class="point" id="jumlah">
                <h2> Variabel jumlah:</h2>
                <p>banyaknya bulan dalam satu tahun : <?php $jumlah = count($Month); echo $jumlah; ?><p>
            </div>
            <div class="point" id="status">
                <h2> Hasil</h2>
                <p>Jumlah x Usia = <?php $hasil = $jumlah * $Age; echo $hasil; ?><p>
                <p>"<?php if ($hasil%2===0){echo "Merupakan angka genap";}else echo "Merupakan angka ganjil"; ?>"</p>
            </div>

        </div>
    </div>
</body>
</html>