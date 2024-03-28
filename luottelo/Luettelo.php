<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ol {
            counter-reset: item
        }

        ol li {
            display: block
        }

        li {
            font-family: 'Times New Roman', Times, serif;
            font-style: italic;
        }

        ol li:before {
            content: counters(item, ".") " ";
            counter-increment: item
        }
    </style>
</head>

<body>
    <h1>
        Tietoturvasuunnitelman runko
    </h1>
    <ol>
        <li>Tietoturvallisuuspolitiikka
            <ol>
                <li>Tietoturvallisuuden tavoitteet</li>
                <li>Tietoturvallisuuden organisaatio</li>
                <li>Tietoturvallisuuden toteutuminen</li>
            </ol>
        </li>
        <li>Riskienhallinta
            <ol>
                <li>Tietojenkäsittelyn fyysisen turvallisuuden analyysi</li>
                <li>Atk-riippuvuuden määrittely</li>
                <li>Kriittisten tietojen haavoittuvuusanalyysi</li>
            </ol>
        </li>
        <li>Tietoturvallisuusohjeisto
            <ol>
                <li>Fyysinen turvallisuus</li>
                <li>Asiakastietojen turvallisuus</li>
                <li>Hallinnollisten tietojen turvallisuus</li>
                <li>Laitteiston turvallisuus
                    <ol>
                        <li>Käyttöjärjestelmän suojaus</li>
                        <li>Ohjelmistojen ja tiedostojen salaus</li>
                        <li>Tiedonsiirron suojaus</li>
                    </ol>
                </li>
                <li>Avainhenkilösijaisuudet</li>
                <li>Vastuuorganisaatio</li>
                <li>Raportointi ja seuranta</li>
            </ol>
        </li>
        <li>Toipumissuunnitelma
            <ol>
                <li> Määrittelyt</li>
                <li>Valmiusorganisaatio</li>
                <li>Toimintaohjeet</li>
                <li>Raportointi ja seuranta</li>
            </ol>
        </li>
        <li>Tietoturvallisuus uhkatekijät
            <ol>
                <li>Näkökulmia
                    <ol>
                        <li>mistä uhka tulee?</li>
                        <li>mitä vahinkoa se voi aiheuttaa</li>
                        <li>paljonko vahinko maksaa</li>
                        <li>voidaanko se korjata</li>
                        <li>mitä menetelmiä uhka käyttää vahingon aiheuttamiseksi</li>
                    </ol>
                </li>
                <li>Laitteistojen heikkoudet</li>
                <li>
                 Troijan hevoset
                    <ol>
                        <li>Murtaa suojaukseen aukkoja</li>
                    </ol>
                </li>
                <li>Virheelliset suojausmäärittelyt</li>
                <li>Salasanojen arvailu</li>
            </ol>
        </li>
    </ol>
</body>

</html>