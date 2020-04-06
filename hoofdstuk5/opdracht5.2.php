<?php /**
 * User: Rosalie Bloemers
 * Date: 6-4-2020
 */ ?>

<?php include '../header.php'; ?>
<body>
<h1>Uitschrijfformulier KW1C</h1>
<hr>
<form action="form_data5.2.php" method="get">
    <table>
        <tr>
            <td>
                <label>Voor en achternaam: </label>
            </td>
            <td>
                <input name="name" type="text">
            </td>
        </tr>
        <tr>
            <td>
                <label>Studentennummer</label>
            </td>
            <td>
                <input name="studentnumber" type="text">
            </td>
        </tr>
        <tr>
            <td>
                <label>Datum van uitschrijving</label>
            </td>
            <td>
                <input name="date" type="date">
            </td>
        </tr>
        <tr>
            <td>
                <label>Reden van uitschrijving</label>
            </td>
            <td>
                <select name="reasons">
                    <option value="verkeerde keuze">verkeerde keuze</option>
                    <option value="blijven zitten">blijven zitten</option>
                    <option value="anders">anders</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Leerjaar</label>
            </td>
            <td>
                <br>
                <input type="radio" name="class" value="1ste leerjaar"> 1ste leerjaar<br>
                <input type="radio" name="class" value="2de leerjaar"> 2de leerjaar<br>
                <input type="radio" name="class" value="3de leerjaar"> 3de leerjaar
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <input type="checkbox"  name="reasons2" value="Ik wil me aanmelden bij de succesklas">
                <label for="succes">Ik wil me aanmelden bij de succesklas </label><br>
                <input type="checkbox"  name="reasons2" value="Verwijder mijn gegevens uit het systeem">
                <label for="delete">Verwijder mijn gegevens uit het systeem</label><br>
            </td>
        </tr>
        <tr>
            <td>
                <label>Geef hieronder de reden van je uitschrijving op</label>
            </td>
        </tr>
        <tr>
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
