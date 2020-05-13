<!DOCTYPE html>
<html>
<head>
</head>

<link href="../stylesheet.css" type="text/css" rel="stylesheet">

<footer>
<?php


include 'variabelen.php';
session_start();
if (isset($_SESSION['username']))
{
    $bezoeker = $_SESSION['username']. "&nbsp;<a href=hoofdstuk6/loguit.php><br>Loguit</a>";
}
else
{
    $bezoeker = "onbekende bezoeker". "&nbsp;<a href= hoofdstuk6/opdracht61.php><br>Login</a>";
}
$year = date("Y");
$hour = date("H");

if ($hour >= 0 && $hour <= 5)
{
    echo "goedennacht!";
}
elseif ($hour >= 5 && $hour <= 12)
{
    echo "goedenochtend!";
}
if ($hour >= 12 && $hour <= 17)
{
    echo "goedenmiddag!";
}
echo "<br> <span>  © $year  $bezoeker </span>
</footer>
</html>";
echo "<a href=\"../index.php\" class=\"back\">klik hier om terug te gaan</a>";
 ?>
