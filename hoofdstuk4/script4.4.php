<?php /**
 * User: Rosalie Bloemers
 * Date: 25-3-2020
 */ ?>
<?php
//aankomende week met datums tonen
$dagNamen = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag", "zondag");
for ($day = 0; $day <8 ; $day++)
{
    $datumAlsGetal = strtotime("+$day days");
    echo "<br>";
    echo "Dag ";
    $date =date('w', $datumAlsGetal);
    echo " $date is ";
    echo "$dagNamen[$date] ";
    echo date('d-m-Y', $datumAlsGetal);
}
?>
<br> <br>
<?php
// taak3 de week tonen met daar in de strings uit de array//
$DagNaam = array("Vandaag","Morgen","Over-Morgen","Over-Over-Morgen","Over-Over-Over-Morgen","Over-Over-Over-Over-Morgen",
    "Over-Over-Over-Over-Over-Morgen", "Over-Over-Over-Over-Over-Over-Morgen");
$dagNamen = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag", "zondag");
for ($day = 0; $day <8 ; $day++)
{
    $datumAlsGetal = strtotime("+$day days");
    echo "<br>";
    echo "$DagNaam[$day] ";
    $date =date('w', $datumAlsGetal);
    echo " $date is ";
    echo "$dagNamen[$date] ";
    echo date('d-m-Y', $datumAlsGetal);
}
?>
<br>
<br>
<br>
