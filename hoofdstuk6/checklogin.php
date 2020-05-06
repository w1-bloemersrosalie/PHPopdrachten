<?php /**
 * User: Rosalie Bloemers
 * Date: 22-4-2020
 */ ?>


<?php
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes");

$Username = $_POST["username"];
$Password = $_POST["password"];

if(isset($_POST['submit']))
{
//dit is een foreach loop waar de ingevulde waardes met de goede inloggevens worden vergeleken
foreach ($authUsers as $key => $value)
    {

if ($authUsers == $key && $Password == $value)
        {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('location: welkom.php');
            include "Welkom.php";

        }
else {
    //$message = "Ongeldige username/wachtwoord
    //{$_POST['username']}, probeer het nog eens.";

    include "opdracht61.php";
}
    }
}
?>;







