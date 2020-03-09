<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
date_default_timezone_set( " Europe/Amsterdam " ) ;
echo "<footer>   &copy;2020 Copyrighted by Rosalie Bloemers $hour</footer>";
echo $name;
echo $year;
include 'variabelen.php';
echo "<a href=\"../index.php\" class=\"back\">klik hier om terug te gaan</a>";

$hour = date("H");

if ($hour >= 0 && $hour <= 5)
{
    echo "goedennacht!";
}
if ($hour >= 5 && $hour <= 12)
{
    echo "goedenochtend!";
}
if ($hour >= 12 && $hour <= 17)
{
    echo "goedenmiddag!";
}
else
{
    echo "goedenmiddag!";
}
?>

</body>
</html>