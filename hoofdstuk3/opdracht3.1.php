<?php /**
 * User: Rosalie Bloemers
 * Date: 10-2-2020
 * Time:
 * File:
 */ ?>
<!DOCTYPE html>

<html>
<head>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <link href= "stylesheet.css "rel="stylesheet" type="text/css">

</head>
<body>
<header>
    <h1 class="title">
        <?php echo "Uitwerking van PHP-opdrachten"; ?>
    </h1>
</header>
<?php
$word1 ="Elfstedentocht";
$word2 ="Alvestêdetocht";
$word3 ="200";
$word4 ="schaatstocht";
$word5 ="natuurijs";
$word6 ="Koninklijke Vereniging De Friese Elf Steden";
$word7 ="Leeuwarden";
$word8 ="Friesland";
$word9 ="15";
$word10 ="1909";
$word11 ="1";

$verhaal = "De  $word1  (Fries: $word2)
 is een  $word3 kilometer lange  $word4  
 over  $word5  die wordt georganiseerd door de  $word6 .
 $word7 , de hoofdstad van  $word8 , is start- en aankomstplaats.
 De  $word1  is inmiddels  $word9  maal verreden en
 werd voor het eerst in  $word10  gereden en wordt maximaal  $word11 
 keer per winter gehouden. ";

echo "<p>$verhaal</p>"
?>
<footer>
    <a href="../index.php" class="back">klik hier om terug te gaan</a>
</footer>
</body>
