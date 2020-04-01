<?php /**
 * User: Rosalie Bloemers
 * Date: 1-4-2020
 */ ?>
<?php include '../header.php'; ?>
    <body>
    <h1>RESTARIA KEES KROKET</h1>
    <p>
        Visstraat 12<br>
        5211 DN 's-Hertogenbosch<br>
        073 613 6720<br>
        info@restariakeeskroket.nl
    </p>
    <form action="form_data.php" method="get">
        <table>
            <tr>
                <td>
                    <label>Bedrijfsnaam: </label>
                </td>
                <td>
                    <input name="nameCompany" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Voornaam</label>
                </td>
                <td>
                    <input name="name" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Achternaam</label>
                </td>
                <td>
                    <input name="surname" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Telefoonnummer</label>
                </td>
                <td>
                    <input name="Telnumber" type="number">
                </td>
            </tr>
            <tr>
                <td>
                    <label>E-mail</label>
                </td>
                <td>
                    <input name="mail" type="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Bericht</label>
                </td>
                <td>
                    <input name="message" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="verzend" value="Versturen">
                </td>
            </tr>
        </table>
    </form>

    </body>
<?php include '../footer.php'; ?>