<?php /**
 * User: Rosalie Bloemers
 * Date: 1-4-2020
 */ ?>
<?php include '../header.php'; ?>
    <body>
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
                    <input name="Telnumber" type="tel">
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
                    <input name="message" type="text" height="150px">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="verzend" value="verzend">
                </td>
            </tr>
        </table>
    </form>

    </body>
<?php include '../footer.php'; ?>