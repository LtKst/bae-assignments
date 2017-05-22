<?php
	$num1 = $num2 =$num3 =$num4 ="";//geef een waarde bij opstarten script
	$operand = "";//geef een waarde bij opstarten script
	if(isset($_GET['num1']) && isset($_GET['num2'])&& isset($_GET['num3']) && isset($_GET['num4']) && isset($_GET['operand']))
	{
		$num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];
        $num4 = $_GET['num4'];
		$operand = $_GET['operand'];
	}

	function calc($num1,  $num2,  $num3,  $num4, $operand)
	{
		switch($operand)
		{
                
            case "+":
                return ($num1 + $num2 + $num3 + $num4);
                break;

            case "-":
                return ($num1 - $num2 - $num3 - $num4);
                break;
                
            case "*":
                return ($num1 * $num2 * $num3 * $num4);
                break;

            case "/":
                if ($num1 != 0 && $num2 != 0 && $num3 != 0 && $num4 != 0)
                    return ($num1 / $num2 / $num3 / $num4);
                else
                    return("Delen door nul kan niet.");
                break;
                
            default:
                return ("Geen of verkeerde operand $operand ingevoerd");
                break;
		}
	}

	function printSource(){
		echo "<h1>De source code:</h1>";
		show_source("index.php");
	 }
?>

<!DOCTYPE html>
<html lang="en">
	  <head>
		<meta charset="utf-8">
		<title>functions</title>
		<style type="text/css">
				body 	{background-color:silver; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;}
				input   {color:blue;}
				p    	{color:green;font-weight: bold;}
				legend  {color:blue; font-size: 200%;}
				fieldset{width: 250px;}
		</style>
	  </head>
	  <body>
		<div>Koen Sparreboom ~ GD1A</div>
          
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
			<fieldset>
				<legend>Berekening</legend>
				<p>A: <input type="text" name="num1" placeholder = "getal" value="<?php echo $num1 ?>"></p>
				<p>B: <input type="text" name="num2" placeholder="getal" value="<?php echo $num2 ?>"</p>
                <p>C: <input type="text" name="num3" placeholder="getal" value="<?php echo $num3 ?>"</p>
                <p>B: <input type="text" name="num4" placeholder="getal" value="<?php echo $num4 ?>"</p>
				<p>Bewerking +-*/: <input type="text" size = "8" placeholder = "bewerking" name="operand" value = "<?php echo $operand ?>"></p>
				<p><input type="submit" name="versturen" value="Versturen"></p>
			</fieldset>
			<p><?php echo "Het resultaat $operand: ". calc($num1,  $num2,  $num3,  $num4, $operand); ?></p>
		</form>
          
		Bonus: voeg code toe om delen door nul te voorkomen.<br>
		Als er gedeeld wordt door 0 moet je een waarschuwing
		laten zien bijvoorbeeld "delen door 0 kan niet."<br>
		<hr>
		<?php printSource(); ?>
	  </body>
</html>
