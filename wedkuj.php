<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_1.css">
    <title>Wędkowanie</title>
</head>
<body>
    <?php 
    $db = mysqli_connect("localhost","root","","wedkowanie");
    mysqli_close($db);?>
    <header><h1>Portal dla wędkarzy</h1></header>
    <div id="flex">
    <div id="left">
        <div id="left1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <li>Szczupak pływa w rzece Warta-Obrzycko, Wielkopolskie</li>
            <li>Leszcze pływa w rzece Przemsza k. Okradzinowa, Sląskie</li>
        </ol>
        </div>
        <div id="left2">
        <table>
            <tr>
                <th>L.p</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Szczupak</td>
                <td>stawy,rzeki</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Sandacz</td>
                <td>stawy,jeziora,rzeki</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Okon</td>
                <td>Rzeki</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Sum</td>
                <td>jeziora, rzeki</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Dorsz</td>
                <td>morza, oceany</td>
            </tr>
        </table>
        </div>
</div>
    <div id="right">
        <img src="ryba1.jpg" alt="">
        <br><a href="">Pobierz kwerendy</a></br>
    </div>
    </div>
    <footer><p>Stronę wykonał: Mikołaj Ciepluch</p></footer>
</body>
</html>