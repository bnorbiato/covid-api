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
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

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
                        <h3 class="title-detail">cases</h3>
                        <div class="numbers">
                            <p><strong>New confirmed: </strong><?=$covid->Global->NewConfirmed?></p>
                            <p><strong>Total confirmed: </strong><?=$covid->Global->TotalConfirmed?></p>
                        </div>
                    </div>
                    <div class="col-4">
                        <h3 class="title-detail">deaths</h3>
                        <div class="numbers">
                            <p><strong>New deaths: </strong><?=$covid->Global->NewDeaths?></p>
                            <p><strong>Total deaths: </strong><?=$covid->Global->TotalDeaths?></p>
                        </div>
                    </div>
                    <div class="col-4">
                        <h3 class="title-detail">recovered</h3>
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
                <div class="title">
                    <h3 class="outline">what do you need to know</h3>
                </div>

                <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'Symptons')">symptons</button>
                    <button class="tablinks" onclick="openTab(event, 'Protection')">protection</button>
                    <button class="tablinks" onclick="openTab(event, 'Treatments')">treatments</button>
                </div>

                <div id="Symptons" class="tabcontent">
                    <h3>Stay home if you feel unwell.</h3>
                    <p>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization</p>
                    <br>
                    <p><strong>Most common symptoms:</strong><br>
                                - fever;<br>
                                - dry cough;<br>
                                - tiredness.<br>
                        <strong>Less common symptoms:</strong><br>
                                - aches and pains;<br>
                                - sore throat;<br>
                                - diarrhoea;<br>
                                - conjunctivitis;<br>
                                - headache;<br>
                                - loss of taste or smell;<br>
                                - a rash on skin, or discolouration of fingers or toes.<br>
                        <strong>Serious symptoms:</strong><br>
                                - difficulty breathing or shortness of breath;<br>
                                - chest pain or pressure;<br>
                                - loss of speech or movement.<br>
                        <br>Seek immediate medical attention if you have serious symptoms. Always call before visiting your doctor or health facility.
                        <br>People with mild symptoms who are otherwise healthy should manage their symptoms at home.
                        On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days.</p>
                </div>

                <div id="Protection" class="tabcontent">
                    <h3>Wear a mask. Clean your hands. Keep a safe distance. Save lives.</h3>
                    <p>Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local health authority.</p>
                    <p><br><strong>To prevent the spread of COVID-19:</strong><br>
                                - Clean your hands often. Use soap and water, or an alcohol-based hand rub; <br>
                                - Maintain a safe distance from anyone who is coughing or sneezing; <br>
                                - Wear a mask when physical distancing is not possible; <br>
                                - Don’t touch your eyes, nose or mouth; <br>
                                - Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze; <br>
                                - Stay home if you feel unwell; <br>
                                - If you have a fever, cough and difficulty breathing, seek medical attention.
                        <br>Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.</p>
                    <br><h3>Masks</h3>
                    <p>Masks can help prevent the spread of the virus from the person wearing the mask to others. Masks alone do not protect against COVID-19, and should be combined with physical distancing and hand hygiene. Follow the advice provided by your local health authority.
                </div>

                <div id="Treatments" class="tabcontent">
                    <h3>Self care.</h3>
                    <p>To date, there are no specific vaccines or medicines for COVID-19. Treatments are under investigation, and will be tested through clinical trials.</p>
                    <p>If you feel sick you should rest, drink plenty of fluid, and eat nutritious food. Stay in a separate room from other family members, and use a dedicated bathroom if possible. Clean and disinfect frequently touched surfaces.</p>
                </div>


            </div>
        </div>
    

        <!-- Optional JavaScript -->
        <!-- Tabs -->
        <script>
            function openTab(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>