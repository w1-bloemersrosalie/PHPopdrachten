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
    <link href= "stylesheet.css "rel="stylesheet" type="text/css"/>

</head>
<body>
<header>
    <h1 class="title">
        <?php echo "Uitwerking van PHP-opdrachten"; ?>
    </h1>
</header>
<?php
$countryName = "Zweden";
$currentAge = 16;

if ($countryName == "Zweden"
    || $countryName=="Nederland"
    || $countryName == "Bulgarije")
{
    if ($currentAge == 18)
    {
        echo "Je woont in $countryName en bent $currentAge. Je mag hier zwakke alcohol drinken";
    }
    elseif($currentAge <= 16)
    {
        echo  "Je woont in $countryName en bent $currentAge. Je mag geen alcohol drinken";
    }
    else
    {
        echo  "Je woont in $countryName en bent $currentAge. Je mag hier alle alcohol drinken";
    }

}
else
{
    if ($currentAge == 16)
    {
        echo "Je woont in $countryName en bent $currentAge. Je mag hier zwakke alcohol drinken";
    }
    elseif($currentAge < 16)
    {
        echo  "Je woont in $countryName en bent $currentAge. Je mag geen alcohol drinken";
    }
    else
    {
        echo  "Je woont in $countryName en bent $currentAge. Je mag hier alle alcohol drinken";
    }
}
?>
<footer>
    <a href="../index.php" class="back">klik hier om terug te gaan</a>
</footer>
</body>