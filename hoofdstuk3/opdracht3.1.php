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
$tocht ="Elfstedentocht";
$tochtfr ="Alvestêdetocht";
$kilometer = 200;
$sport ="schaatstocht";
$soorttocht ="natuurijs";
$vereniging ="Koninklijke Vereniging De Friese Elf Steden";
$stad ="Leeuwarden";
$provincie ="Friesland";
$aantalkeer = 15;
$jaartal =1909;
$hoevaak = 1;

$verhaal = "De  $tocht  (Fries: $tochtfr)
 is een  $kilometer kilometer lange  $sport 
 over  $soorttocht die wordt georganiseerd door de  $veriniging .
 $stad , de hoofdstad van  $provincie , is start- en aankomstplaats.
 De  $tocht  is inmiddels  $aantalkeer  maal verreden en
 werd voor het eerst in  $jaartal  gereden en wordt maximaal  $hoevaak 
 keer per winter gehouden. ";

echo "<p>$verhaal</p>"
?>
<footer>
    <a href="../index.php" class="back">klik hier om terug te gaan</a>
</footer>
</body>
