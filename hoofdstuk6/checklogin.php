<?php /**
 * User: Rosalie Bloemers
 * Date: 22-4-2020
 */ ?>


<?php
$authusers = array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes");

$username = $_POST["username"];
$password = $_POST["password"];


if(isset($_POST['submit']))
{
//dit is een foreach loop waar de ingevulde waardes met de goede inloggevens worden vergeleken
foreach ($authusers as $key => $value)
    {

if ($username == $key && $password == $value)
        {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('location: Welkom.php');
            include "Welkom.php";
            return;
        }
        elseif($username != $key && $password != $value)
        {
            include "opdracht61.php";
        }
    }
}
?>







