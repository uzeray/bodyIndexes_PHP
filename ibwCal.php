<?php
    error_reporting(0);

    function ibw($a, $b, $y=23.0){
        $bmi = $b / (($a/100) * ($a/100));
        $idealBmi = $bmi - $y;
        $loseFactor = $idealBmi * (($a/100) * ($a/100));
        $ibw = $b - $loseFactor;
     
        return round($ibw,1);
    
    }
    

?>


<!DOCTYPE html>
 <html language="en">
    <head>
        <meta name="viewport" content="width=device-width, initail-scale=1, maximum-scale=1.0, user-scaleble=no">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ideal Body Weight - IBW Calculator - Weight Loss & Weight Gain - FitPatients</title>
        <link rel="stylesheet" href="tracker.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata">
        <link href="https://fonts.googleapis.com/css2?family=Mansalva&family=Rubik+Distressed&family=Six+Caps&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mansalva&family=Rubik+Distressed&display=swap" rel="stylesheet">
        <link rel="icon" href="/imgs/favicon/favicon.ico" type="image">
        <link rel="shortcut icon" href="/imgs/favicon/android-icon-192x192.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Mansalva&family=Oswald:wght@200&family=Rubik+Distressed&family=Six+Caps&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:wght@500&family=Fjalla+One&family=Mansalva&family=Oswald:wght@200&family=Roboto+Condensed:ital,wght@1,700&family=Rubik+Distressed&family=Six+Caps&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Raleway:ital@1&display=swap" rel="stylesheet">



        <script type="text/javascript">
        
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                    }
                }
                }
            }

        </script>

        
    
    </head>

    <body>

        <div class="wrapper">

            <?php require "header.php"; ?>


            <div class="empty">
                <div class="inEmpty"></div>
            </div>

            <div class="general">

                <h1 class="pageHead">Ideal Body Weight (IBW)</h1>

                <div class="cal">
                    <form action="ibwCal.php">
                        <input type="number" min="10" max="200" name="kg" id="kg" placeholder="Enter Your Currently Body Weight">
                        <input type="number" min="100" max="220" name="cm" id="cm" placeholder="Enter Your Lenght with cm">
                        <input type="submit" name="calculate" id="calculate" value="Calculate">
                    </form>
                </div>


                <?php 
                
                    if(isset($_GET)){

                        $kg = strip_tags($_GET["kg"]);
                        $cm = strip_tags($_GET["cm"]);

                    }

                ?>

                <div class="res">
                    <?php echo ibw($cm, $kg)." " . "/kg ". "Your Ideal Weight" ; ?>
                </div>
            </div>


             
            <?php require "footer.php"; ?>

        </div>

    </body>

</html>