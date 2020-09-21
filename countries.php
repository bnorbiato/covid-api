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

        <title>countries - covid19 api</title>
    </head>

    <body>
        <div class="menu">
            <div class="container">
                <h2>covid19 status</h2>
                <div class="breadcrumber">
                    <span><a href="index.php" class="white">home</a> > </span><span><a href="index.php" class="white">countries</a></span>
                </div>
            </div>
        </div>

        <div class="countries">
            <div class="container">
                <div class="search">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="search by country or numbers" class="search">
                </div>

                <ul id="myUL" class="row">
                    <?php
                        foreach($covid->Countries as $country) { ?>
                            <li class="col-4 countries">
                                <a href="#" class="cards">
                                    <h3><?= $country->Country?></h3>
                                    <p><strong>New confirmed: </strong><?= $country->NewConfirmed?></p>
                                    <p><strong>Total confirmed: </strong><?= $country->TotalConfirmed?></p>
                                    <p><strong>New deaths: </strong><?= $country->NewDeaths?></p>
                                    <p><strong>Total deaths: </strong><?= $country->TotalDeaths?></p>
                                    <p><strong>Total recovered: </strong><?= $country->TotalRecovered?></p>
                                </a>
                            </li>     
                    <?php } ?>
                </ul>
            </div>
        </div>
    

        <!-- Optional JavaScript -->
        <!-- Search -->
        <script>
            function myFunction() {
                // Declare variables
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById('myInput');
                filter = input.value.toUpperCase();
                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName('li');
                
                // Loop through all list items, and hide those who don't match the search query
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    txtValue = a.textContent || a.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                    } else {
                    li[i].style.display = "none";
                    }
                }
            }
        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>