<?php
    $nama_depan= "Adib";
    $nama_tengah= "Fahri";
    $nama_belakang= "Kafabih";
    $kota_lahir="Tangerang";
    $tanggal=05;
    $bulan="Oktober";
    $tahun=2001;
    $jalan= "Jalan KH Wahid Hasyim rt 04/05 no 003";
    $Kelurahan="Jurangmangu Timur";
    $kecamatan="Pondok Aren";
    $kota="Tangerang Selatan";
    $provinsi="Banten";
    $kodepos= "15222";
    $status="Belum Menikah";
    $ipk5=3.81;
    $ipk6=3.82;
    $ipk7=3.83;
    $ipk8=3.84;
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
        .biodata{ flex:auto; width:40%%;float:left;}
        .point{ padding-left :15px ;border-bottom:1px solid #cfcfcf;margin:30px 20px;}
        .point p{margin:10px 0px; margin-left:20px;}
        h1{font-size:28px;}
        h2{font-size:20px;}
        #target{border-bottom:none;}
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="biodata">
            <h1>Biodata</h1>
            <div class="point" id="nama">
                <h2> Nama Lengkap:</h2>
                <p><?php echo "$nama_depan ","$nama_tengah ","$nama_belakang"; ?><p>
            </div>
            <div class="point" id="ttl">
                <h2> TTL:</h2>
                <p><?php echo "$kota_lahir, ","$tanggal ","$bulan ","$tahun."; ?><p>
            </div>
            <div class="point" id="address">
                <h2> Alamat:</h2>
                <p><?php echo "$jalan ","$Kelurahan, ","$kecamatan, ","$kota, ", "$provinsi, ", "$kodepos";  ?><p>
            </div>
            <div class="point" id="status">
                <h2> Status:</h2>
                <p><?php if ($status=="Menikah") {echo "True";} else { echo "False";} ?><p>
            </div>
            <div class="point" id="kabisat">
                <h2> tahun kabisat:</h2>
                <p><?php if ($tahun % 4 == 0) {echo "True";} else { echo "False";} ?><p>
            </div>
            <div class="point" id="target">
                <h2> target IPK:</h2>
                <p>semester 5 :<?php echo " $ipk5";?> <br> semester 6 ;<?php echo " $ipk6";?> <br> semester 7 ;<?php echo " $ipk7";?> <br> semester 7 ;<?php echo " $ipk7";?>   <p>
            </div>
        </div>
    </div>
</body>
</html>