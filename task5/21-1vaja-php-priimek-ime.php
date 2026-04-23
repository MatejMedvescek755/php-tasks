<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["naslov"] = $_POST["naslov"] ?? "";
    $_SESSION["mesto"] = $_POST["mesto"] ?? "";
    $_SESSION["postna_stevilka"] = $_POST["postna_stevilka"] ?? "";
    $_SESSION["posta"] = $_POST["posta"] ?? "";

    header("Location: 21-2vaja-PHP-priimek-ime.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Session: Naslov</title>
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
        table td {
            padding: 6px 8px;
            font-size: 16px;
        }
        input[type="text"] {
            width: 220px;
            padding: 6px;
            background: #dfe3f4;
            border: 1px solid #adb6d8;
        }
        .wide { width: 280px !important; }
        .small { width: 90px !important; }
        .btn {
            margin-top: 20px;
            margin-left: 135px;
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
    <h1>2.korak: Naslov za dostavo</h1>

    <div class="menu">
        <span>✎ Prijava</span>
        <span class="active">✉ Naslov</span>
        <span>€ Plačilo</span>
        <span>🚚 Dostava</span>
        <span>☑ Povzetek</span>
    </div>

    <h2>Vpiši naslov za dostavo:</h2>

    <form method="post">
        <table>
            <tr>
                <td align="right">Naslov:</td>
                <td><input class="wide" type="text" name="naslov" required></td>
            </tr>
            <tr>
                <td align="right">Mesto:</td>
                <td><input class="wide" type="text" name="mesto" required></td>
            </tr>
            <tr>
                <td align="right">Poštna številka:</td>
                <td><input class="small" type="text" name="postna_stevilka" required></td>
            </tr>
            <tr>
                <td align="right">Pošta:</td>
                <td><input class="wide" type="text" name="posta" required></td>
            </tr>
        </table>

        <input class="btn" type="submit" value="Nadaljuj na plačilo">
    </form>
</div>
</body>
</html>