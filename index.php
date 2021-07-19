<?php
$url  = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url, true);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color: #9724B4;background: linear-gradient(#9724B4, #F6BD8C);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: rgba(255,255,255,0);">
        <div class="container"><a class="navbar-brand" href="#" style="font-weight: 500;color: rgb(255,255,255);font-size: 14px;">PantauCovid</a></div>
    </nav>
    <div style="margin-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="border-color: #FF9211;">
                    <h1 style="color: rgb(255,255,255);font-family: 'Abhaya Libre', serif;font-weight: 600;">Pantau Angka <br>Pesebaran Covid 19<br></h1>
                    <p style="color: rgba(255,255,255,0.8);margin-top: 20px;font-size: 14;max-width: 350px;font-weight: 400;">Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus corona..<br></p>
                    <a href="https://covid19.go.id/" class="btn btn-primary" type="button" style="border-color: #ff9211;background-color: #FF9211;border-radius: 20px;height: 42px;width: 150px;box-shadow: 0 4px 8px rgba(0,0,0,0.32);margin-top: 20px;padding-right: 12px;padding-left: 12px;padding-bottom: 7px;">Lebih Lanjut&nbsp; &nbsp;<i class="icon ion-arrow-right-c" style="font-size: 16px;"></i></a></div>
                <div
                    class="col-md-6"><img src="assets/img/Group%201.png" style="min-width: 250px;max-width: 90%;margin-top: 20px;margin-left: 30px;"></div>
        </div>
    </div>
    </div>
    <div style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: rgb(255,255,255);font-family: 'Abhaya Libre', serif;font-weight: 600;font-size: 25px;">Jumlah Kasus Indonesia Saat Ini</h1>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 20px;margin-bottom: 60px;">
        <div class="container" style="background-color: rgba(255,255,255,0.2);border-radius: 20px;">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h1 style="font-size: 16px;color: rgb(255,255,255);margin-top: 20px;">Terkonfirmasi</h1>
                    <h1 style="font-size: 30px;color: #800036;margin-bottom: 20px;"><?= $data[0]['positif'];?><br></h1>
                </div>
                <div class="col-md-4 text-center">
                    <h1 style="font-size: 16px;color: rgb(255,255,255);margin-top: 20px;">Sembuh</h1>
                    <h1 style="font-size: 30px;color: #800036;margin-bottom: 20px;"><?= $data[0]['sembuh'];?><br></h1>
                </div>
                <div class="col-md-4 text-center">
                    <h1 style="font-size: 16px;color: rgb(255,255,255);margin-top: 20px;">Meninggal</h1>
                    <h1 style="font-size: 30px;color: #800036;margin-bottom: 20px;"><?= $data[0]['meninggal'];?><br></h1>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>