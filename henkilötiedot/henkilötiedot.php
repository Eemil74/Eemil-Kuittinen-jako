<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yhteystietolomake</title>
</head>
<body>

    <h2>Yhteystietolomake</h2>
    <form action="Vastaus.php" method="post">
        <label for="etunimi">Etunimi:</label><br>
        <input type="text" id="etunimi" name="etunimi" required><br><br>
        
        <label for="sukunimi">Sukunimi:</label><br>
        <input type="text" id="sukunimi" name="sukunimi" required><br><br>
        
        <label for="Puhelinnumero">Puhelinnumero:</label><br>
        <input type="text" id="puhelinnumero" name="Puhelinnumero" required><br><br>
        
        <label for="osoite">osoite:</label><br>
        <input type="text" id="osoite" name="osoite" required><br><br>
        
        <label for="postinumero">Postinumero:</label><br>
        <input type="text" id="postinumero" name="postinumero" required><br><br>
        
        <label for="postitoimipaikka">Postitoimipaikka:</label><br>
        <input type="text" id="postitoimipaikka" name="postitoimipaikka" required><br><br>
        
        <SELECT NAME="Tilaus">
            <OPTION VALUE="3kk">3kk</option>
            <OPTION VALUE="6kk">6kk</option>
            <OPTION VALUE="12kk">12kk</option>
        </select> <br><br>

        <input type="submit" name="laheta" id="laheta" value="Lähetä palaute" onclick="alert('tiedot tallennetaan')">
        <input type="reset" name="laheta" id="laheta" value="tyhjennä">    </form>
</body>
</html>
