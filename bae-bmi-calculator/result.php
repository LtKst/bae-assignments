<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP BMI Calculator ~ Koen Sparreboom ~ GD1A</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container-daddy">
        <div class="container">
            <h1>Het resultaat van uw BMI</h1>

            <?php
                $length = $_POST["length"];
                $weight = $_POST["weight"];
                
                if (isset($_POST["name"]))
                {
                    $name = $_POST["name"];
                }
                else
                {
                    $name = "";
                }
            
                if (isset($_POST["gender"]))
                {
                    $gender = $_POST["gender"];
                } 
                else
                {
                    $gender = "";
                }

                if (isset($_POST["name"]) || isset($_POST["gender"]))
                {
                    echo "Geachte $gender $name,<br><br>";
                }
            
                echo "Uw lengte is <u><b>$length</b></u> cm <br>";
                echo "Uw gewicht is <u><b>$weight</b></u> kg <br><br>";

                $bmi = round(($weight / ($length * $length))*10000, 1);

                echo "Dat betekent dat uw BMI <u><b>$bmi</b></u> is.";
            
                switch ($bmi)
                {
                    case ($bmi < 18.5):
                        $result = "Helaas betekent dit dat u ondergewicht bent.";
                        $color = "#00FFFF";
                        break;
                        
                    case ($bmi >= 18.5 && $bmi <25):
                        $result = "Gefeliciteerd, dit betekent dat u een goed gewicht heeft!";
                        $color = "#00FF00";
                        break;
                    case ($bmi >= 25 && $bmi < 30):
                        $result = "Dit betekent dat u een klein beetje overgewicht bent.";
                        $color = "#ffff00";
                        break;
                    case ($bmi >= 30 && $bmi < 35):
                        $result = "U heeft klasse een obesitas.";
                        $color = "#ffba1c";
                        break;
                    case ($bmi >= 35 && $bmi < 40):
                        $result = "U heeft klasse twee obesitas.";
                        $color = "#ff8d1c";
                        break;
                    case ($bmi >= 40);
                        $result = "U heeft morbide obesitas.";
                        $color = "#ff1c1c";
                        break;
                }
            
            
                echo "<hr><div class='circle' style='background-color: $color'></div>$result";
            ?>
        </div>
    </div>

</body>

</html>
