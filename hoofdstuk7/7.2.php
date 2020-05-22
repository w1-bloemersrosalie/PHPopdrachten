<?php /**
 * User: Rosalie Bloemers
 * Date: 16-3-2020
 */ ?>
<?php include '../header.php'; ?>
<?php

// Open de database connectie en ODBC driver
try {
    $pdo = new PDO("odbc:odbc2sqlserver");
} catch (PDOException $e) {
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}

echo "database connectie gelukt";

// Uitvoeren van een SQl query
try {
// Query schrijven
    $sql = 'SELECT * FROM joke';

// Query uitvoeren
    $result = $pdo->query($sql);
} catch (PDOException $e) {
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();

// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{     // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}
echo "<br><br><table>
<tr><td>ID</td><td>Joketext</td><td>Jokeclou</td><td>Jokedate</td></tr>";
foreach($aJokes as $grap)
{
    echo "<tr><td>" .$grap['id']. "</td><td>" .$grap['joketext']. "</td><td>" .$grap['jokeclou']. "</td><td>" .$grap['jokedate']. "</td></tr>";
}
echo "</table>"

?>
<?php include '../footer.php'; ?>