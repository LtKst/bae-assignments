<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bae ~ dice ~ Koen Sparreboom</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<h1>Dice rolling in PHP ~ Koen Sparreboom GD1A</h1>

<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <input type="submit" name="rollButton" value="Roll the dice~!">
</form>

<?php
create_image();

function  create_image(){
    for ($i = 0; $i < 5; $i++) {
        print "<img src=dice" . $i . ".png?" . date("U") . ">";

        $rolledValue = rand(1, 6);

        $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
        $background_color = imagecolorallocate($im, 255, 255, 255);
        $dot = imagecolorallocate($im, 0, 0, 0);

        switch ($rolledValue) {
            case 1:
                imagefilledellipse($im, 100, 100, 40, 40, $dot);
                break;
            case 2:
                imagefilledellipse($im, 40, 40, 40, 40, $dot);
                imagefilledellipse($im, 160, 160, 40, 40, $dot);
                break;
            case 3:
                imagefilledellipse($im, 40, 40, 40, 40, $dot);
                imagefilledellipse($im, 100, 100, 40, 40, $dot);
                imagefilledellipse($im, 160, 160, 40, 40, $dot);
                break;
            case 4:
                imagefilledellipse($im, 40, 40, 40, 40, $dot);
                imagefilledellipse($im, 160, 40, 40, 40, $dot);
                imagefilledellipse($im, 40, 160, 40, 40, $dot);
                imagefilledellipse($im, 160, 160, 40, 40, $dot);
                break;
            case 5:
                imagefilledellipse($im, 40, 40, 40, 40, $dot);
                imagefilledellipse($im, 160, 40, 40, 40, $dot);
                imagefilledellipse($im, 100, 100, 40, 40, $dot);
                imagefilledellipse($im, 40, 160, 40, 40, $dot);
                imagefilledellipse($im, 160, 160, 40, 40, $dot);
                break;
            case 6:
                imagefilledellipse($im, 40, 40, 40, 40, $dot);
                imagefilledellipse($im, 160, 40, 40, 40, $dot);
                imagefilledellipse($im, 40, 100, 40, 40, $dot);
                imagefilledellipse($im, 40, 160, 40, 40, $dot);
                imagefilledellipse($im, 160, 100, 40, 40, $dot);
                imagefilledellipse($im, 160, 160, 40, 40, $dot);
                break;
        }

        imagepng($im, "dice".$i.".png");
        imagedestroy($im);
    }
}

if(isset($_POST['submit'])) {
    create_image();
}
?>

</body>
</html>