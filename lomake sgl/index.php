<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form style="margin: 10px;" action="vastaus.php" method="post" autocomplete="on" target="_blank">
        <label for="">palautteen aihe:</label><br>
        <SELECT NAME="aihe">
            <OPTION VALUE="opetussuunnitelma">Opetussuunnitelma</option>
            <OPTION VALUE="opetusharjoitelu">Opetusharjoitelu</option>
            <OPTION VALUE="kodin ja koulun yhteistö">Kodin ja koulun yhteistö</option>
            <option value="idea tai aloite"> Idea tai aloite</option>
            <option value="kysyttävää">Kysyttävää</option>
            <option value="muu aihe">Muu aihe</option>
        </select>
        <br><br>
        Nimi: <br><input type="text" name="nimi">
        <br><br>
        E-mail: <br><input type="email" name="email">
        <br><br>

        <label for="viesti">Viesti:</label><br> <textarea name="viesti" id="viesti" cols="45" rows="5"></textarea>
        <br>
        <input type="submit" name="laheta" id="laheta" value="Lähetä palaute" onclick="alert('tiedot tallennetaan')">
        <input type="reset" name="laheta" id="laheta" value="tyhjennä">
    </form>
</body>

</html>