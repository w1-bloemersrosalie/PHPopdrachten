<?php /**
 * User: Rosalie Bloemers
 * Date: 25-3-2020
 */ ?>
<?php
$dagNamen = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag", "zondag");
for ($day = 0; $day <8 ; $day++)
{
    $datumAlsGetal = strtotime("+$day days");
    echo "<br>";
    echo "Dag ";
    echo date('w', $datumAlsGetal);
    echo " is ";
    echo "$dagNamen[$day] ";
    echo date('d-m-Y', $datumAlsGetal);
}
?>
<br> <br>
<?php
// taak3//
$DagNaam = array("Vandaag","Morgen","Over-Morgen","Over-Over-Morgen","Over-Over-Over-Morgen","Over-Over-Over-Over-Morgen",
    "Over-Over-Over-Over-Over-Morgen", "Over-Over-Over-Over-Over-Over-Morgen");
$dagNamen = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag", "zondag");
for ($day = 0; $day <8 ; $day++)
{
    $datumAlsGetal = strtotime("+$day days");
    echo "<br>";
    echo "$DagNaam[$day] ";
    echo " is ";
    echo "$dagNamen[$day] ";
    echo date('d-m-Y', $datumAlsGetal);
}
?>
<br>
<br>
<br>
