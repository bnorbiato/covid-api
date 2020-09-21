<?php
$url = "https://api.covid19api.com/summary";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$covid = json_decode(curl_exec($ch));
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">

        <title>covid19 api</title>
    </head>

    <body>
        <div class="menu">
            <div class="container">
                <h2>covid19 status</h2>
                <p class="subtitle">see and follow statistics from around the world</p>
            </div>
        </div>

        <div class="cases">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <h3>cases</h3>
                        <div class="numbers">
                            <p><strong>New confirmed: </strong><?=$covid->Global->NewConfirmed?></p>
                            <p><strong>Total confirmed: </strong><?=$covid->Global->TotalConfirmed?></p>
                        </div>
                    </div>
                    <div class="col-4">
                        <h3>deaths</h3>
                        <div class="numbers">
                            <p><strong>New deaths: </strong><?=$covid->Global->NewDeaths?></p>
                            <p><strong>Total deaths: </strong><?=$covid->Global->TotalDeaths?></p>
                        </div>
                    </div>
                    <div class="col-4">
                        <h3>recovered</h3>
                        <div class="numbers">
                            <p><strong>New recovered: </strong><?=$covid->Global->NewRecovered?></p>
                            <p><strong>Total recovered: </strong><?=$covid->Global->TotalRecovered?></p>
                        </div>
                    </div>
                </div>
                <div class="link-list">
                    <a href="countries.php" class="more">click here to see all countries</a>
                </div>
            </div>
        </div>

        <div class="orientations">
            <div class="container">
                <h3>orientations</h3>
            </div>
        </div>
    

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>