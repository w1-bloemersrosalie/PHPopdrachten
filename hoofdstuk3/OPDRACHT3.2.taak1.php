<?php /**
 * User: Rosalie Bloemers
 * Date: 17-2-2020
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

$trafficLightColor = ("green");
$ambulanceComing = false;
$driveOn = false;

if ($trafficLightColor = ("green") and !$ambulanceComing and $driveOn)
{
    echo " <h2 class='groen'>U mag doorrijden.</h2>";

}
else
{
    echo "<h2 class='rood'>U moet stoppen.</h2>";
}

?>

<footer>
    <a href="../index.php" class="back">klik hier om terug te gaan</a>
</footer>
</body>