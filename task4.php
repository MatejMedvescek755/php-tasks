<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $spol = $_POST['spol'] ?? '';
    $ime = $_POST['ime'] ?? '';
    $priimek = $_POST['priimek'] ?? '';
    $ulica = $_POST['ulica'] ?? '';
    $hisna = $_POST['hisna'] ?? '';
    $kraj = $_POST['kraj'] ?? '';
    $posta_st = $_POST['posta_st'] ?? '';
    $posta = $_POST['posta'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefon = $_POST['telefon'] ?? '';
    $opomba = $_POST['opomba'] ?? '';
    ?>
    
    <!DOCTYPE html>
    <html lang="sl">
    <head>
        <meta charset="UTF-8">
        <title>Kontaktni obrazec</title>
        <style>
            body { font-family: Arial; background: #eeeeee; }
            .box {
                width: 600px;
                margin: 50px auto;
                background: #d9dcea;
                padding: 20px;
                border: 1px solid #aaa;
            }
            h1 {
                text-align: center;
                color: #556fb5;
            }
        </style>
    </head>
    <body>
        <h1>Kontaktni obrazec</h1>

        <div class="box">
            <b>Obrazec ste izpolnili z naslednjimi podatki:</b><br><br>

            Spol: <?php echo htmlspecialchars($spol); ?><br>
            Ime: <?php echo htmlspecialchars($ime); ?><br>
            Priimek: <?php echo htmlspecialchars($priimek); ?><br><br>

            <b>Naslov:</b><br>
            Ulica: <?php echo htmlspecialchars($ulica); ?><br>
            Hišna številka: <?php echo htmlspecialchars($hisna); ?><br>
            Kraj: <?php echo htmlspecialchars($kraj); ?><br>
            Poštna številka: <?php echo htmlspecialchars($posta_st); ?><br>
            Pošta: <?php echo htmlspecialchars($posta); ?><br><br>

            <b>Osebni podatki:</b><br>
            Email: <?php echo htmlspecialchars($email); ?><br>
            Telefon: <?php echo htmlspecialchars($telefon); ?><br>
            Opomba: <?php echo nl2br(htmlspecialchars($opomba)); ?><br>
        </div>
    </body>
    </html>

    <?php
} else {
    ?>
    
    <!DOCTYPE html>
    <html lang="sl">
    <head>
        <meta charset="UTF-8">
        <title>Kontaktni obrazec</title>
        <style>
            body { font-family: Arial; background: #eeeeee; }
            .box {
                width: 600px;
                margin: 50px auto;
                background: #d9dcea;
                padding: 20px;
                border: 1px solid #aaa;
            }
            h1 {
                text-align: center;
                color: #556fb5;
            }
            input, textarea {
                width: 100%;
                padding: 6px;
                margin-bottom: 10px;
                box-sizing: border-box;
            }
            .radio-group input {
                width: auto;
            }
        </style>
    </head>
    <body>
        <h1>Kontaktni obrazec</h1>

        <div class="box">
            <form action="" method="post">
                Spol *:<br>
                <div class="radio-group">
                    <input type="radio" name="spol" value="Moški" required> Moški
                    <input type="radio" name="spol" value="Ženski"> Ženski
                </div>
                <br>

                Ime *:<br>
                <input type="text" name="ime" required>

                Priimek *:<br>
                <input type="text" name="priimek" required>

                Ulica:<br>
                <input type="text" name="ulica">

                Hišna številka:<br>
                <input type="text" name="hisna">

                Kraj:<br>
                <input type="text" name="kraj">

                Poštna številka:<br>
                <input type="text" name="posta_st">

                Pošta:<br>
                <input type="text" name="posta">

                Email *:<br>
                <input type="email" name="email" required>

                Telefon:<br>
                <input type="text" name="telefon">

                Opomba:<br>
                <textarea name="opomba"></textarea>

                <input type="submit" value="Pošlji">
                <input type="reset" value="Počisti">
            </form>
        </div>
    </body>
    </html>

    <?php
}
?>