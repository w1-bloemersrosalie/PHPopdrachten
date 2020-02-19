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
$elfstedentocht ="Elfstedentocht";
$alvestedetocht ="Alvestêdetocht";
$kilometer ="200";
$schaatstocht ="schaatstocht";
$ijs ="natuurijs";
$KVDFES ="Koninklijke Vereniging De Friese Elf Steden";
$leeuwarden ="Leeuwarden";
$friesland ="Friesland";
$cijfer2 ="15";
$jaartal ="1909";
$cijfer3 ="1";

$verhaal = "De  $elfstedentocht  (Fries: $alvestedetocht)
 is een  $kilometer kilometer lange  $schaatstocht  
 over  $ijs die wordt georganiseerd door de  $KVDFES .
 $leeuwarden , de hoofdstad van  $friesland , is start- en aankomstplaats.
 De  $elfstedentocht  is inmiddels  $cijfer2  maal verreden en
 werd voor het eerst in  $jaartal  gereden en wordt maximaal  $cijfer3 
 keer per winter gehouden. ";

echo "<p>$verhaal</p>"
?>
<footer>
    <a href="../index.php" class="back">klik hier om terug te gaan</a>
</footer>
</body>
