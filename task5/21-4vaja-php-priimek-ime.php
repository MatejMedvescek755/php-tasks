<?php
session_start();

$ime = $_SESSION["ime"] ?? "";
$priimek = $_SESSION["priimek"] ?? "";
$email = $_SESSION["email"] ?? "";

$naslov = $_SESSION["naslov"] ?? "";
$mesto = $_SESSION["mesto"] ?? "";
$postna_stevilka = $_SESSION["postna_stevilka"] ?? "";
$posta = $_SESSION["posta"] ?? "";

$placilo = $_SESSION["placilo"] ?? "";
$dostava = $_SESSION["dostava"] ?? "";
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Session: Povzetek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #efefef;
            color: #333;
        }
        h1 {
            color: #556fb3;
            font-size: 32px;
            margin: 40px 0 20px 0;
        }
        .wrap {
            width: 750px;
            margin: 0 auto;
        }
        .menu { margin-bottom: 25px; }
        .menu span {
            display: inline-block;
            padding: 8px 14px;
            background: #d6dced;
            color: #555;
            margin-right: -4px;
        }
        .menu .active {
            background: #556fb3;
            color: white;
            font-weight: bold;
        }
        h2 {
            color: #b2bddf;
            font-size: 18px;
            margin-top: 25px;
            margin-bottom: 5px;
        }
        .vr {
            margin-left: 20px;
            font-size: 16px;
            line-height: 1.5;
        }
        .val {
            color: #556fb3;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="wrap">
    <h1>5.korak: Povzetek naročila</h1>

    <div class="menu">
        <span>✎ Prijava</span>
        <span>✉ Naslov</span>
        <span>€ Plačilo</span>
        <span>🚚 Dostava</span>
        <span class="active">☑ Povzetek</span>
    </div>

    <h2>1.korak: Prijava</h2>
    <div class="vr">
        Ime: <span class="val"><?php echo htmlspecialchars($ime); ?></span><br>
        Priimek: <span class="val"><?php echo htmlspecialchars($priimek); ?></span><br>
        E-mail: <span class="val"><?php echo htmlspecialchars($email); ?></span>
    </div>

    <h2>2.korak: Naslov za dostavo</h2>
    <div class="vr">
        Naslov: <span class="val"><?php echo htmlspecialchars($naslov); ?></span><br>
        Mesto: <span class="val"><?php echo htmlspecialchars($mesto); ?></span><br>
        Poštna številka: <span class="val"><?php echo htmlspecialchars($postna_stevilka); ?></span><br>
        Pošta: <span class="val"><?php echo htmlspecialchars($posta); ?></span>
    </div>

    <h2>3.korak: Način plačila</h2>
    <div class="vr">
        Način plačila: <span class="val"><?php echo htmlspecialchars($placilo); ?></span>
    </div>

    <h2>4.korak: Dostava</h2>
    <div class="vr">
        Način dostave: <span class="val"><?php echo htmlspecialchars($dostava); ?></span>
    </div>
</div>
</body>
</html>