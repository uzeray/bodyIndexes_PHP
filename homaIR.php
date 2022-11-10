<?php
    error_reporting(0);

    function homaIR($gVal, $iVal){
        $homaIR = $gVal * $iVal /405;
        return round($homaIR, 1);
    }
    

?>


<!DOCTYPE html>
 <html language="en">
    <head>
        <meta name="viewport" content="width=device-width, initail-scale=1, maximum-scale=1.0, user-scaleble=no">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insulin Sensitivity - HomaIR Calculator - Insulin Resistance - FitPatients</title>
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

                <h1 class="pageHead">Insulin Resistance Rate for Diabetics</h1>

                <div class="cal">
                    <form action="homaIR.php">
                        <input type="number" min="50" max="600" name="glucose" id="glucose" placeholder="Enter Your Fasting Glucose Rate mg/dl">
                        <input type="number" min="1" max="60" name="ins" id="ins" placeholder="Enter Your Fasting Insulin Value μIU/L">
                        <input type="submit" name="calculate" id="calculate" value="Calculate">
                    </form>
                </div>


                <?php 
                
                    if(isset($_GET)){

                        $glucose = strip_tags($_GET["glucose"]);
                        $ins = strip_tags($_GET["ins"]);

                    }

                ?>

                <div class="res">
                    <?php echo homaIR($glucose, $ins); ?>
                </div>
            </div>


             
            <?php require "footer.php"; ?>

        </div>

    </body>

</html>