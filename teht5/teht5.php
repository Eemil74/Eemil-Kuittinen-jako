<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .flex-container {
            display: flex;
            background-color: whitesmoke;
        }

        .flex-container>div {
            background-color: lightgreen;
            width: 20%;
            margin: 10px;
            justify-content: center;
            align-items: center;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
            border: 1px solid #000;

        }

        .flex-container1 {
            display: flex;
            background-color: whitesmoke;
        }

        .flex-container1>div {
            background-color: lightgray;
            width: 20%;
            margin:10px;
            text-align: center;
            line-height: 30px;
            font-size: 20px;
            border: 1px solid #000;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Tietokoneen osat</h1>
    <div class="flex-container">
        <div>keskusyksikkö</div>
        <div>emolevy</div>
        <div>muistit</div>
        <div>näytönohjain</div>
        <div>näyttö</div>

    </div>
    <div class="flex-container1">
        <div>Prosessori on tietokoneen keskusyksikkö, joka suorittaa ohjelmistoja ja käskyjä.</div>
        <div>Emolevy on tietokoneen keskeinen osa, joka yhdistää kaikki komponentit ja mahdollistaa niiden kommunikaation keskenään.</div>
        <div>RANDOM ACCESS MEMORY (RAM) toimii välimuistina tietokoneen nopeaa käyttöä varten.</div>
        <div>Näytönohjain huolehtii kuvan renderöinnistä näytölle.</div>
        <div>Näyttö on laite, joka näyttää tietokoneen tuottaman kuvan ja tekstin käyttäjälle.</div>
    </div>
</body>

</html>