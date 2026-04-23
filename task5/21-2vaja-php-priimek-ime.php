<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["placilo"] = $_POST["placilo"] ?? "";

    header("Location: 21-3vaja-PHP-priimek-ime.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Session: Plačilo</title>
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
            font-size: 20px;
            margin-bottom: 20px;
        }
        .radio {
            margin: 8px 0;
            font-size: 16px;
        }
        .btn {
            margin-top: 25px;
            margin-left: 85px;
            background: #556fb3;
            color: white;
            border: none;
            padding: 10px 14px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="wrap">
    <h1>3.korak: Način plačila</h1>

    <div class="menu">
        <span>✎ Prijava</span>
        <span>✉ Naslov</span>
        <span class="active">€ Plačilo</span>
        <span>🚚 Dostava</span>
        <span>☑ Povzetek</span>
    </div>

    <h2>Izberi način plačila:</h2>

    <form method="post">
        <div class="radio">
            <input type="radio" name="placilo" value="Z gotovino ob prevzemu" required>
            Z gotovino ob prevzemu
        </div>
        <div class="radio">
            <input type="radio" name="placilo" value="Plačilo preko spleta s kreditno kartico">
            Plačilo preko spleta s kreditno kartico
        </div>
        <div class="radio">
            <input type="radio" name="placilo" value="Spletna banka" checked>
            Prek spletne banke
        </div>

        <input class="btn" type="submit" value="Nadaljuj na dostavo">
    </form>
</div>
</body>
</html>