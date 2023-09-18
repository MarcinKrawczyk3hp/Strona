<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styl_1.css">
    <title>Wędkowanie</title>
</head>
<body>
    <div class="banner">
        <h1>Portal dla wętkarzy</h1>
    </div>
    <div class="główna">
    <div class="blok1">
        <div class="lista">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <li>Szczupak pływa w rzece Warta-Obrzycko, Wielkopolskie</li>
            <li>Leszcz pływa w rzece Przemsza k. Okradzinowa, Śląskie</li>
        </ol>
        </div>
        <div class="tabela">
        <h3>Ryby drapieżne naszych wód</h3>
        <table class="Rybki">
            <tr class="tr1">
                <td>L.p.</td>
                <td>Gatunek</td>
                <td>Występowanie</td>

            </tr>
            <tr class="tr1">
                <td>1</td>
                <td>Szczupak</td>
                <td>stawy, rzeki</td>
            </tr>
            <tr class="tr1">
                <td>3</td>
                <td>Sandacz</td>
                <td>stawy, jeziora, rzeki</td>
            </tr>
            <tr class="tr1">
                <td>4</td>
                <td>Okon</td>
                <td>rzeki</td>
            </tr>
            <tr class="tr1">
                <td>5</td>
                <td>Sum</td>
                <td>jeziora, rzeki</td>
            </tr>
            <tr class="tr1">
                <td>6</td>
                <td>Dorsz</td>
                <td>morza, oceany</td>
            </tr>
        </table>
        </div>
        </div>
    <div class="blok2">
        <div class="obraz"><img src="ryba1.jpg" alt="Sum"></div>
        <p><a href="kwerendy.txt">Pobierz kwerendy</a></p>
    </div>
</div>
    <?php
        $db = "localhost";
        $username = "root";
        $password = "";
        $database = "wedkowanie";
        $conn = new mysqli($db, $username, $password, $database);

        $conn->close();
    ?>
    <footer>
        <div class="stopka"><p>Stronę Wykonał: (Pesel)[Marcin Krawczyk]</p></div>
    </footer>

</body>
</html>