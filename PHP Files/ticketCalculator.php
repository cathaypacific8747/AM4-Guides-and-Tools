<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153514321-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-153514321-1');
    </script>
    <script src="js/script.js "></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/action.css">
    <title>AM4 Calculator - Seats Configuration</title>
</head>

<body class="ticket-calculator">
    <a href="https://scuderiaairlines.github.io/AM4-Guides-and-Tools/index.html" class="back-button-position default-button">Back</a>
    <section>
        <div class="container3">
            <div class="content-all">
                <div class="content-box" id="blur">
                    <h2>Tickets Calculator</h2>
                    <br>
                    <div class="form-box" id="sc-form">
                    <form action="ticketCalculator.php" method="POST">
                        <input type="text" name="dep" placeholder="Departure (IATA/ICAO Code)" value="<?php echo isset($_POST['dep']) ? $_POST['dep'] : '' ?>">
                        <input type="text" name="arr" placeholder="Arrival (IATA/ICAO Code)" value="<?php echo isset($_POST['arr']) ? $_POST['arr'] : '' ?>">      
                        <button class="default-button" name="distance" value="Submit me!">Find Distance</button>
                        <?php include_once("dist.php") ?> 
                    </form>
                    <div class="form-box" id="sc-form">
                        <input type="text" class="sc-input show" id="flightRange" placeholder="Route (km)">
                        <button id="btnCalcTC" class="default-button" onclick="calcTicket()">Calculate</button>
                    </div>
                    </div>
                    <div class="results-box" id="results">
                        <label class="lb">Realism - Price(Y): <output class="out Realism" id="ySeatsR"></output></label>
                        <label class="lb">Realism - Price(J): <output class="out Realism" id="jSeatsR"></output></label>
                        <label class="lb">Realism - Price(F): <output class="out Realism" id="fSeatsR"></output></label>
                        <label class="lb">Easy - Price(Y): <output class="out Easy" id="ySeatsE"></output></label>
                        <label class="lb">Easy - Price(J): <output class="out Easy" id="jSeatsE"></output></label>
                        <label class="lb">Easy - Price(F): <output class="out Easy" id="fSeatsE"></output></label>
                    </div>
                </div>
            </div>
        </div>
    </section>
                    

</script>
</body>

</html>