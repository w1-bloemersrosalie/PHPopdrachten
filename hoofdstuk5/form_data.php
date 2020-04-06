<?php /**
 * User: Rosalie Bloemers
 * Date: 1-4-2020
 */ ?>
<?php include '../header.php'; ?>
<?php
echo "<table class='eenvoudig'>";
echo "<tr><td>Naam bedrijf</td><td>".$_GET["nameCompany"]."</td></tr>";
echo "<tr><td>Voornaam</td><td>".$_GET["name"]."</td></tr>";
echo "<tr><td>Achternaam</td><td>".$_GET["surname"]."</td></tr>";
echo "<tr><td>Telefoonnummer</td><td>".$_GET["Telnumber"]."</td></tr>";
echo "<tr><td>E-mail</td><td>".$_GET["mail"]."</td></tr>";
echo "<tr><td>Bericht</td><td>".$_GET["message"]."</td></tr>";
echo "</table>";
?>
<?php include '../footer.php'; ?>
