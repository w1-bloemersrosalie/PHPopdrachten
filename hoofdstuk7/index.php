
<?php include '../header.php'; ?>
<?php

// Inladen functies bestand
include("functions.php");

// Lege Array aanmaken voor de results
$aJokes = array();

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
// Als ik een woord of letter opzoek, voert hij dit stuk code uit
// Als de button nog niet is geklikt voert hij het andere stukje code uit bij de else functie.

if (isset($_GET['jokesearch']))
{
    $SearchedJoke = $_GET['jokesearch'];
    $query = 'SELECT * FROM joke WHERE joketext LIKE \'%'.$SearchedJoke.'%\'';
}
else
{
    $query = "SELECT * FROM joke";
}
$jokes = executeQuery($query);

echo "<p> $query </p>";
?>
<!-- formulier bij het zoeken van grappen bij het joke tabel -->
<form method="get">
    <label>
        Zoekterm:
    </label>
    <input type="text" id="jokesearch" name="jokesearch">
    <input type="submit" value="Zoeken">
</form>
<hr>
<table border="1px solid black">
    <th>JokeId</th>
    <th>Joketext</th>
    <th>Jokeclou</th>
    <th>Jokedate</th>
</table>
<?php
// Resultaten rij voor rij ophalen
while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
{
    $aJokes[] = $row;
}

?>
<?php

// Genereert een HTML tabel met de waardes van een SQL database genaamd ijdb.
// Die jokes laat zien, de id, het begin, de mop, en de jokedatum

echo "<table >";
echo "<tr><th>Jokeid</th><th>Joketext</th><th class='JokeSearchCSS'>Jokeclou</th><th class='JokeSearchCSS'>Jokedate</th></tr>";
foreach($aJokes as $grap)
{
    echo "<tr><td class='jokeData'>".$grap['id']."</td><td class='jokeData'>".$grap['joketext']."</td><td class='jokeData'>".$grap['jokeclou']."</td><td class='jokeData'>".$grap['jokedate']."</td></tr>";
}
echo "</table>";
?>
<br>
<?php include '../footer.php'; ?>


