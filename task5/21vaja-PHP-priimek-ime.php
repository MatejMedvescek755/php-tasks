<?php
session_start();

// Po želji na začetku počistimo staro sejo
session_unset();
session_destroy();
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["ime"] = $_POST["ime"] ?? "";
    $_SESSION["priimek"] = $_POST["priimek"] ?? "";
    $_SESSION["email"] = $_POST["email"] ?? "";

    header("Location: 21-1vaja-PHP-priimek-ime.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Session: Prijava</title>
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
        .menu {
            margin-bottom: 25px;
        }
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
        input[type="text"], input[type="email"] {
            width: 220px;
            padding: 6px;
            background: #dfe3f4;
            border: 1px solid #adb6d8;
        }
        .email {
            width: 280px !important;
        }
        .btn {
            margin-top: 20px;
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
    <h1>1.korak: Prijava</h1>

    <div class="menu">
        <span class="active">✎ Prijava</span>
        <span>✉ Naslov</span>
        <span>€ Plačilo</span>
        <span>🚚 Dostava</span>
        <span>☑ Povzetek</span>
    </div>

    <h2>Vnesi svoje podatke za prijavo:</h2>

    <form method="post">
        <table>
            <tr>
                <td align="right">Ime:</td>
                <td><input type="text" name="ime" required></td>
            </tr>
            <tr>
                <td align="right">Priimek:</td>
                <td><input type="text" name="priimek" required></td>
            </tr>
            <tr>
                <td align="right">Email:</td>
                <td><input class="email" type="email" name="email" required></td>
            </tr>
        </table>

        <input class="btn" type="submit" value="Nadaljuj na korak naslov">
    </form>
</div>
</body>
</html>