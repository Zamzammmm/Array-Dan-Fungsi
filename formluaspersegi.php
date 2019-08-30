<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>luas persegi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<b>Luas Persegi</b>
<fieldset>
<legend> Luas Persegi</legend>
<form action="" method="get">
    <label for="">Sisi</label>
    <input type="number" min="1" name="s" required>
    <br>
    <input type="submit" name="simp" value="Simpan">
    </form>
</fieldset>
<?php
if (isset($_GET['simp'])) {
    $sisi = $_GET['s'];
    function luas_persegi($s){
        $luas = $s * $s;
        return $luas;
    }
    $luas = luas_persegi($sisi);
    echo "Luas Persegi : $luas";
}
?>
</body>
</html>