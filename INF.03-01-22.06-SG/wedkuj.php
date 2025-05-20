<!DOCTYPE html>
<html lang="pl">
<meta charset="utf-8">
<title>Wędkowanie</title>
<link rel="stylesheet" href="styl_1.css">
<body>
<header>
<h1>Portal dla wędkarzy</h1>
</header>
<div id="lewy">
<h3>Ryby zamieszkujące rzeki</h3>
<ol>
    <?php
    $polaczenie = mysqli_connect('localhost','root','','wedkowanie');
    $zapytanie = mysqli_query($polaczenie,"SELECT `nazwa`, `akwen`, `wojewodztwo` FROM `ryby` JOIN `lowisko` ON `ryby`.`id`=`lowisko`.`Ryby_id` WHERE `lowisko`.`rodzaj`=2;");
    while($wynik = mysqli_fetch_array($zapytanie)){
        echo "<li>".$wynik[0]." pływa w rzece ".$wynik[1].", ".$wynik[2]."</li>";
    }
    mysqli_close($polaczenie);
    ?>
</ol>
</div>
<div id="prawy">
<img src="./ryba1.jpg" alt="Sum"><br>
<a href="./kwerendy.txt">Pobierz kwerendy</a>
</div>
<div id="lewy2">
<h3>Ryby drapieżne naszych wód</h3>
<table>
    <tr>
        <th>L.p.</th>
        <th>Gatunek</th>
        <th>Wystepowanie</th>
    </tr>
    <?php
    $polaczenie = mysqli_connect('localhost','root','','wedkowanie');
    $zapytanie2 = mysqli_query($polaczenie,"SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia`=1;");
    while($wynik2 = mysqli_fetch_array($zapytanie2)){
        echo "<tr>";
        echo "<td>".$wynik2[0]."</td><td>".$wynik2[1]."</td><td>".$wynik2[2]."</td>";
        echo "</tr>";
    }
    mysqli_close($polaczenie);
    ?>
</table>
</div>
<footer>
<p>Stronę wykonał: PESEL</p>
</footer>
</body>
</html>