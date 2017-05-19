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
            <h1>Bereken uw <a href="https://nl.wikipedia.org/wiki/Queteletindex" target="_new">body mass index (BMI)</a></h1>
            <h2><span class="required">*</span> betekent dat het veld verplicht is</h2>

            <form action="result.php" method="post">
                <span class="required">* </span>Wat is uw naam?
                <br>
                <input required type="text" name="name">
                <hr>
                <br>Bent u een man of vrouw?
                <br>
                <input type="radio" name="gender" value="heer">Man
                <input type="radio" name="gender" value="mevrouw">Vrouw
                <hr>
                <br> <span class="required">* </span> Wat is uw lengte in CM?
                <br>
                <input required type="number" name="length">
                <hr>
                <br> <span class="required">* </span> Wat is uw gewicht in hele kilogrammen?
                <br>
                <input required type="number" name="weight">
                <br><br>
                <input type="submit">
            </form>
        </div>
    </div>
</body>

</html>
