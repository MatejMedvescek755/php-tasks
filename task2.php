<?php
//subtask1
// const MAX_WIDTH = 640;
// const PI = 3.14;
// const ME = 9.109e-31;
// const VREME = "pretežno oblačno";
// const ZDRAVLJICA = "Prijatli! odrodile<br>so trte vince nam sladkó,<br>ki nam oživlja žile,<br>srce razjasni in oko,<br>ki utopi<br>vse skrbi,<br>v potrtih prsih up budi!";

// echo "<h1>Konstante v PHP</h1>";
// echo "<p>Vrednosti konstant so:</p>";

// echo "MAX_WIDTH = " . MAX_WIDTH . "<br>";
// echo "PI = " . PI . "<br>";
// echo "M<sub>e</sub> = 9.109E-31<br>";
// echo "VREME = " . VREME . "<br>";
// echo "ZDRAVLJICA = " . ZDRAVLJICA . "<br>";

//subtask2
// $vsota1 = 7 + 5;
// echo "7 + 5 = " . $vsota1 . "<br />";

// echo "12 + 08 = " . (12 + 8) . "<br />";

// echo "0,2 + 0,3 = " . (0.2 + 0.3) . "<br />";
// echo "0,36 + 12,65 = " . (0.36 + 12.65) . "<br />";
// echo "13 - 45 = " . (13 - 45) . "<br />";
// echo "0,056 - 0,042 = " . (0.056 - 0.042) . "<br />";
// echo "25 * 56 = " . (25 * 56) . "<br />";
// echo "0,2 * 10 = " . (0.2 * 10) . "<br />";
// echo "65 / 21 = " . (65 / 21) . "<br />";
// echo "6987 / 23,26 = " . (6987 / 23.26) . "<br />";
// echo "20 / 0 = Ni mogoče deliti z nič<br />"; 
// echo "-10 / 0 = Ni mogoče deliti z nič<br />";
// echo "123 % 20 = " . (123 % 20) . "<br />";
// echo "2 + 2 * 2 = " . (2 + 2 * 2) . "<br />";
// echo "(2 + 2) * 2 = " . ((2 + 2) * 2) . "<br />";
// echo "5^3 + 3^2 + 8 = " . (pow(5,3) + pow(3,2) + 8) . "<br />";
// echo "(10 % 6 - 1 + (5 / 4 - 13.0 / 2) = " . (10 % 6 - 1 + (5 / 4 - 13.0 / 2)) . "<br />";
// echo "10 + 1 = " . (10 + 1) . "<br />";
// echo "10 - 1 = " . (10 - 1) . "<br />";
// echo "cd23 + 236a (hex) = " . (0xcd23 + 0x236a) . "<br />";
// echo "265 - 142 (oct) = " . (0265 - 0142) . "<br />";

// echo "<h1>Skrajšani izrazi</h1>";
// $x = 100; $y = 50; $z = 80;
// echo "x = $x; y = $y; z = $z;<br /><br />";

// $x += 20;
// echo "x += 20 = " . $x . "<br />";
// $y -= 10;
// echo "y -= 10 = " . $y . "<br />";
// $z *= 8;
// echo "z *= 8 = " . $z . "<br />";
// $x /= 25;
// echo "x /= 25 = " . $x . "<br />";
// $y %= 2;
// echo "y %= 2 = " . $y . "<br />";

// echo "<h1>Nizi</h1>";
// $niz1 = "Z operatorji izvajamo operacije na spremenljivkah in vrednostih.";
// $niz2 = "V PHP-ju operatorje razdelimo na naslednje skupine:";
// $niz3 = "<li>prireditveni operatorji,</li>";
// $niz4 = "<li>aritmetični operatorji,</li>";
// $niz5 = "<li>povezavni operatorji,</li>";
// $niz6 = "<li>kombinirani dodeljeni operatorji,</li>";
// $niz7 = "<li>primerjalni operatorji,</li>";
// $niz8 = "<li>logični operatorji.</li>";

// $skupaj = $niz1 . "<br />" . $niz2 . "<ul>" . $niz3 . $niz4 . $niz5 . $niz6 . $niz7 . $niz8 . "</ul>";
// echo $skupaj;

//subtask3

// $naslov = '"Gesla so najslabša mogoča zaščita"';
// $podnaslov = "Statistika in spreminjanje besedila";
// $odstavek = "Na medmrežju na nas prežijo tako različne državne obveščevalne agencije kot zasebni akterji, želeč dostop do osebnih podatkov. Vse učinkovitejši so, zato moramo z zaščito slediti tudi uporabniki. Predsednik Evropske komisije 'Jean-Claude Juncker' je za eno svojih ključnih nalog določil gradnjo enotnega digitalnega trga, poimenovanega tudi \"digitalni schengen\". Za razvoj tega je zelo pomembno zaupanje v tehnologije in storitve. Prav zato je EK oktober določila za \"mesec informacijske varnosti\", in pri tem letos sodeluje tudi Slovenija.";

// $dodatek = "Predsednik Evropske... ";
// $celoten_odstavek = $dodatek . $odstavek;

// $st_znakov = strlen($odstavek);
// $st_besed = str_word_count($odstavek);

// $kodirano = convert_uuencode($odstavek);

// $male_crke = mb_strtolower($celoten_odstavek, 'UTF-8');

// echo "<h1>" . $naslov . "</h1>";
// echo "<p>" . $odstavek . "</p>";

// echo "<h2>" . $podnaslov . "</h2>";

// echo "Število znakov članka: " . $st_znakov . "<br>";
// echo "Število besed v članku: " . $st_besed . "<br><br>";

// echo "<b>Kodirano besedilo odstavka:</b><br>";
// echo $kodirano . "<br><br>";

// echo "<b>Odstavek samo z malimi znaki:</b><br>";
// echo $male_crke;

//subtask4

// echo $random;
// $ocena = "nezadostno";
// if ($random > 9) {
//     $ocena = "odlocno";
// } elseif ($random > 9) {
//     $ocena = "prav dobro";
// } elseif ($random > 6) {
//     $ocena = "dobro";
// } elseif ($random > 5) {
//     $ocena = "zadostno";
// }


?>
<!-- subtask 4 html -->
<!-- <!DOCTYPE html>
<html lang="sl">
<head>
    <style>
        body { text-align: center; font-family: sans-serif; }
        h1 { color: blue; }
        table { margin: auto; border-collapse: collapse; background: #d9dfff; }
        th { background: #a0acff; color: white; padding: 15px 40px; }
        td { padding: 30px; border: 2px solid white; }
        .green { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Ocena testa</h1>
    <table>
        <tr>
            <th>Število točk</th>
            <th>Ocena</th>
        </tr>
        <tr>
            <td>94</td>
            <td class="green"><?php echo $ocena; ?></td>
        </tr>
    </table>
</body>
</html> -->

<!-- subtask 5 -->
<!DOCTYPE html>
<html lang="sl">

<head>
    <meta charset="UTF-8">
    <title>Delovni čas</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 40px;
        }

        h1 {
            color: blue;
            text-align: center;
            margin-bottom: 50px;
        }

        .data-section {
            margin-bottom: 30px;
        }

        .bold {
            font-weight: bold;
        }

        .result-container {
            text-align: center;
            margin-top: 20px;
        }

        .day-name {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .time-box {
            display: inline-block;
            background-color: #d9dfff;
            padding: 15px 60px;
            border-radius: 15px;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .open {
            color: green;
        }

        .closed {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $dan = rand(1, 8);
    $teden_st = rand(1, 52);
    $je_sodi = ($teden_st % 2 == 0);
    $teden_tekst = $je_sodi ? "sodi teden" : "lihi teden";

    $delovni_cas = "";
    $ime_dneva = "";
    $odprto = true;

    if ($dan == 8) {
        $delovni_cas = "Trgovina danes ne obratuje!";
        $odprto = false;
    } else {
        switch ($dan) {
            case 1:
                $ime_dneva = "PONEDELJEK";
                $delovni_cas = $je_sodi ? "15:00 - 20:00" : "9:00 - 13:00";
                break;
            case 2:
                $ime_dneva = "TOREK";
                $delovni_cas = $je_sodi ? "8:00 - 14:00" : "14:00 - 20:00";
                break;
            case 3:
                $ime_dneva = "SREDA";
                $delovni_cas = $je_sodi ? "9:00 - 12:00 in 15:00 - 20:00" : "14:00 - 20:00";
                break;
            case 4:
                $ime_dneva = "ČETRTEK";
                $delovni_cas = $je_sodi ? "14:00 - 20:00" : "9:00 - 12:00 in 15:00 - 20:00";
                break;
            case 5:
                $ime_dneva = "PETEK";
                $delovni_cas = $je_sodi ? "8:00 - 14:00" : "8:00 - 14:00";
                break;
            case 6:
                $ime_dneva = "SOBOTA";
                // Every 4th Saturday is open regardless of week type
                if ($teden_st % 4 == 0) {
                    $delovni_cas = "9:00 - 12:00";
                } else {
                    $delovni_cas = $je_sodi ? "zaprto" : "9:00 - 12:00";
                }
                if ($delovni_cas == "zaprto") $odprto = false;
                break;
            case 7:
                $ime_dneva = "NEDELJA";
                $delovni_cas = "zaprto";
                $odprto = false;
                break;
        }
    }

    $color_class = $odprto ? "open" : "closed";
    ?>

    <h1>Delovni čas</h1>

    <div class="data-section">
        <p class="bold">Generirani podatki:</p>
        <p>Številka dneva v tednu: <span class="bold"><?php echo $dan; ?></span></p>
        <p>Zaporedna številka tedna: <span class="bold"><?php echo "$teden_st ($teden_tekst)"; ?></span></p>
    </div>

    <p class="bold">Današnji obratovalni čas:</p>

    <div class="result-container">
        <?php if ($dan < 8): ?>
            <div class="day-name"><?php echo $ime_dneva; ?>:</div>
        <?php endif; ?>

        <div class="time-box <?php echo $color_class; ?>">
            <?php echo $delovni_cas; ?>
        </div>
    </div>

</body>

</html>