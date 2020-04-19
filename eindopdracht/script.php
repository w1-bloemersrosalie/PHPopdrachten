<?php /**
 * User: Rosalie Bloemers
 * Date: 19-4-2020
 */ ?>

<?php
//dit is de code voor het laten zien van het formulier
$show = true;

//de empty en message zijn leeg omdat tijdens een if else statement de variabelen worden gevuld
$empty = "";
$message = "";

//hieronder staat de code voor het ophalen van de gegevens die ingevuld zijn
$Username = $_POST["Username"];
$Password = $_POST["Password"];

//hieronder staat de code voor als de gebruiker nog niets heeft ingevuld
if (empty($Username) || empty($Password))
{
    $empty = "Vul alle velden in.";
};
//dit is de array
$users = array(
    "PartyPerson1" => "Coca-cola",
    "PartyPerson2" => "Schweppes",
    "PartyPerson3" => "Fanta",
    "PartyPerson4" => "Pepsi",
    "PartyPerson5" => "Lipton",
    "PartyPerson6" => "Sprite",
    "PartyPerson7" => "Finley",
    "PartyPerson8" => "Spa",
    "PartyPerson9" => "Dr-pepper",
    "PartyPerson10" => "Fuze-tea"
);
//hieronder staat de code van wat er uitgevoerd moet worden als je op de submit knop drukt
if(isset($_POST['submit']))
{
    //dit is een foreach loop waar de ingevulde waardes met de goede inloggevens worden vergeleken
    foreach ($users as $key => $value)
    {
        if ($Username == $key && $Password == $value)
        {
            //deze code hieronder is voor als de inloggevens goed zijn want dan haalt hij het formulier weg en plaatst de informatie over het adres en de openingstijden
            //hier maakt hij de message leeg zodat niet de foutmelding op het scherm verschijnt
            $message = "";
            $show = false;
           ?>
            <div style="text-align: center">
            <h1>Bergheen</h1>
            <h2>Welkom!</h2>
            </div>
            <div>
            <table style="margin-left: 30%">
                <tr>
                    <td><h2>Openingstijden</h2></td>
                    <td></td>
                    <td><h2>Adresgegevens</h2></td>
                </tr>
                <tr>
                    <td>Do: 22:00</td>
                    <td></td>
                    <td>Am Wriezener Bahnhof</td>
                </tr>
                <tr>
                    <td>Vr: All day</td>
                    <td></td>
                    <td>10243 Berlin</td>
                </tr>
                <tr>
                    <td>Za: All day</td>
                    <td></td>
                    <td>Duitsland</td>
                </tr>
                <tr>
                    <td>Zo: 12:00</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr></tr>
                <tr>
                    <td><br>
                        Deze gegevens dien je ten alle tijden geheim te houden!
                    </td>
                </tr>
            </div>
            </table>
            <?php
            return;
        }
        //hieronder staat de code voor als de inloggevens fout zijn dan past hij de message aan
        elseif($Username != $key && $Password != $value)
        {
            $message = "Foutieve gebruikersnaam en / of wachtwoord";
        }
    }
};








?>
