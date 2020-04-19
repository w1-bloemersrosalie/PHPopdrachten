<?php /**
 * User: Rosalie Bloemers
 * Date: 19-4-2020
 */ ?>
<?php include '../header.php'; ?>
    <!--hieronder staat de code voor het zichtbaar maken van de form-->
<?php include 'script.php'; ?>
<?php
if($show == true){


?>
    <link href="stylesheet.css" type="text/css" rel="stylesheet">

    <body>
        <table>
        <tr>
            <td>
                <h1>Bergheen</h1>

                <h3>login om onze adresgegevens + openeningstijden te zien</h3>
            </td>
        </tr>
        <form action = "login.php"  method="post" >

            <tr>
                <td id="message">
                    <!-- de code hieronder is voor het zichtbaar maken van de foutmelding van de inloggevens -->
                    <?php echo $message; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Username:</label>
                    <input type="text" name="Username">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Password:</label>

                    <input type="password" name="Password">
                </td>
            </tr>
            <tr>
                <td>
                    <!-- de code hieronder is voor als een gebruiker geen inloggevens heeft ingevuld dan komt er te staan "Vul alle velden in." -->
                    <?php echo $empty;?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="verzend">
                </td>
                <td></td>
            </tr>
    </table>
    </form>
    </body>
<?php } ?>
<?php include '../footer.php'; ?>