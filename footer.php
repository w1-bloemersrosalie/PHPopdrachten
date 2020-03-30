<!DOCTYPE html>
<html>
<head>
</head>
<body>
<link href="../stylesheet.css" type="text/css" rel="stylesheet">

<footer>
<?php
echo "<a href=\"../index.php\" class=\"back\">klik hier om terug te gaan</a>";
date_default_timezone_set( " Europe/Amsterdam " ) ;
echo "<footer> $hour  &copy; 2020 Copyrighted by Rosalie Bloemers</footer>";
echo $name;
echo $year;
include 'variabelen.php';

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


?>
</footer>
</body>
</html>