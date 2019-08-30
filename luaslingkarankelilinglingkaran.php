<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luas & Keliling Lingkaran</title>
</head>
<body>
    <p>Luas & Keliling Lingkaran</p>
    <fieldset>
        <legend>
            Luas & Keliling Lingkaran
        </legend>
        <form action="" method="get">
            <label for="">Jari Jari</label>
            <input type="number" name="j" min="1" required><br>
            <br>
            <input type="submit" name="simpan1" value="Simpan">
        </form>
    </fieldset>
    <?php
        if (isset($_GET['simpan1'])) {
            $jari = $_GET['j'];
            function luas_lingkaran($j){
                $luas = 3.14 * $j * $j;
                return $luas;
            }
            function kel_lingkaran($k){
                $kel = (3.14*($k+$k));
                return $kel;
            }
            $luas = luas_lingkaran($jari);
            echo "Luas Lingkaran : $luas<br>";
            $kel = kel_lingkaran($jari);
            echo "Keliling Lingkaran : $kel";
        }
    ?>
</body>
</html>
