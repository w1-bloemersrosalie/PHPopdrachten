<?php /**
 * User: Rosalie Bloemers
 * Date: 6-4-2020
 */ ?>
<?php include '../header.php'; ?>
<h1>Uitschrijfformulier KW1C</h1>
<hr>
<?php
echo "<table class='eenvoudig'>";
echo "<tr><td>voor en achternaam</td><td>".$_GET["name"]."</td></tr>";
echo "<tr><td>studentnummer</td><td>".$_GET["studentnumber"]."</td></tr>";
echo "<tr><td>datum van uitschrijving</td><td>".$_GET["date"]."</td></tr>";
echo "<tr><td>reden van uitschrijving</td><td>".$_GET["reasons"]."</td></tr>";
echo "<tr><td>leerjaar</td><td>".$_GET["class"]."</td></tr>";
echo "<tr><td></td><td>".$_GET["reasons2"]."</td></tr>";
echo "<tr><td>de reden van uitschrijving</td><td>".$_GET["message"]."</td></tr>";
echo "</table>";
?>
<?php include '../footer.php' ; ?>
