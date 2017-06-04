<?php
    $name = $_REQUEST["n"];
    $length = $_REQUEST["l"];
    $weight = $_REQUEST["w"];


    if ($name == "" || $length == "" || $weight == "")
    {
        echo 'Please fill in the necessary information';
    }
    else if (is_numeric($length) && $length > 1 && $length == round($length, 0) && is_numeric($weight) && $weight > 1 && $weight == round($weight, 0))
    {
        echo "Geachte $name,<br><br>";
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
    }
    else
    {
        echo "Please enter a valid length & weight";
    }
?>
